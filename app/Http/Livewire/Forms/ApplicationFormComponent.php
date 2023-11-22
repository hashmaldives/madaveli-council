<?php

namespace App\Http\Livewire\Forms;

use App\Models\User;
use Laravel\Nova\URL;
use App\Mail\TestMail;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\UserAttachment;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationReceivedAdmin;
use App\Models\ApplicationFormCategory;
use Illuminate\Support\Facades\Session;
use App\Mail\ApplicationReceivedCustomer;
use App\Models\ApplicationFormSubmission;
use Laravel\Nova\Notifications\NovaNotification;

class ApplicationFormComponent extends Component
{

    use WithFileUploads;

    public  $name,
            $email,
            $phone,
            $permanent_address,
            $present_address,
            $user_message,
            $attachment = [];

    public $application_form_category_id = '0';

    public $categoryList;

    public $categories;

    public $message = '';

    public $language;

    protected $listeners = ['languageToggled' => 'changeLanguage'];

    public function changeLanguage($language)
    {
        $this->language = $language;
        $this->name ='';
        $this->email ='';
        $this->phone ='';
        $this->permanent_address ='';
        $this->present_address ='';
        $this->user_message ='';
    }

    public function mount() {
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
        $this->categories = ApplicationFormCategory::latest()->get();
        foreach($this->categories as $category) {
            $this->categoryList[] = array(
                "nameEn" => $category->title_en, 
                "valueEn" => $category->id,
                "nameDh" => $category->title_dh, 
                "valueDh" => $category->id,
            );
        }
    }

    protected function rules() {
        $rules = [];
        $rules = [
            'name' => 'required',
            'email' => 'nullable',
            'phone' => 'required',
            'permanent_address' => 'required',
            'present_address' => 'required',
            'application_form_category_id' => 'required',
            'user_message' => 'nullable',
            'attachment.*' => 'nullable|file|mimes:pdf|max:5120', // 5MB Max
        ];
        return $rules;
    }

    public function submit()
    {

        $this->validate();

        $submission = ApplicationFormSubmission::create([
            'application_form_category_id' => $this->application_form_category_id,
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'permanent_address' => $this->permanent_address,
            'present_address' => $this->present_address,
            'user_message' => $this->user_message,
        ]);

        foreach ($this->attachment as $file) {
            $path = $file->storePublicly('application_form_attachment','public');
            $submission->user_attachment()->create([
                'path' => $path,
                'name' => $file->getClientOriginalName(),
                'type' => pathinfo($path,PATHINFO_EXTENSION),
                'idea_box_submission_id' => null,
                'application_form_submission_id' => $this->id,
            ]);
        }

        $this->resetValidation();
        $this->reset();

        $this->attachment = [];

        $resourceData = [
            'resourceName' => 'Application Form Submission',
            'resourceUrl' => 'application-form-submissions',
        ];

        foreach( json_decode(nova_get_setting('application_form_users')) as $user ) {
            User::find($user->attributes->user)->notify(
                NovaNotification::make()
                    ->message('New ' . $resourceData['resourceName'] . ' by ' . $submission->name)
                    ->action('View', URL::remote('/control-panel/resources/' . $resourceData['resourceUrl'] . '/' . $submission->id ))
                    ->icon('eye')
                    ->type('success')
            );
            Mail::to(User::find($user->attributes->user))->queue(new ApplicationReceivedAdmin($submission, $resourceData));
        }

        //Checking if the user has entered an email or phone number
        if(filter_var($submission['email'], FILTER_VALIDATE_EMAIL)) {
            Mail::to($submission['email'], $submission['name'])->queue(new ApplicationReceivedCustomer($submission, $resourceData));
        }

        session()->flash('message', 'Request has been submitted. You may close this window now.');
    }

    public function removeFile($index)
    {
        unset($this->attachment[$index]);
        $this->attachment = array_values($this->attachment);
    }

    public function render()
    {
        return view('livewire.forms.application-form-component');
    }
}
