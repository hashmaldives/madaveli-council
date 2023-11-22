<?php

namespace App\Http\Livewire\Forms;

use App\Models\User;
use Laravel\Nova\URL;
use App\Mail\TestMail;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\UserAttachment;
use App\Models\IdeaBoxSubmission;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationReceivedAdmin;
use Illuminate\Support\Facades\Session;
use App\Mail\ApplicationReceivedCustomer;
use Laravel\Nova\Notifications\NovaNotification;

class IdeaBoxComponent extends Component
{

    use WithFileUploads;

    public  $name,
            $email_phone,
            $address,
            $user_message,
            $attachment = [];

    public $message = '';

    public $language;

    protected $listeners = ['languageToggled' => 'changeLanguage'];

    public function changeLanguage($language)
    {
        $this->language = $language;
        $this->name = '';
        $this->email_phone = '';
        $this->address = '';
        $this->user_message = '';
    }

    public function mount() {
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
    }

    protected function rules() {
        $rules = [];
        $rules = [
            'name' => 'required',
            'email_phone' => 'required',
            'user_message' => 'required',
            'attachment.*' => 'nullable|max:2048', // 2MB Max
        ];
        return $rules;
    }

    public function submit()
    {

        $this->validate();

        $submission = IdeaBoxSubmission::create([
            'name' => $this->name,
            'email_phone' => $this->email_phone,
            'address' => $this->address,
            'user_message' => $this->user_message,
        ]);

        foreach ($this->attachment as $file) {
            $path = $file->storePublicly('ideabox_attachment','public');
            $submission->user_attachment()->create([
                'path' => $path,
                'name' => $file->getClientOriginalName(),
                'type' => pathinfo($path,PATHINFO_EXTENSION)
            ]);
        }



        $this->resetValidation();
        $this->reset();

        $this->attachment = [];

        $resourceData = [
            'resourceName' => 'Idea Box Submission',
            'resourceUrl' => 'idea-box-submissions',
        ];

        foreach( json_decode(nova_get_setting('idea_box_users')) as $user ) {
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
        if(filter_var($submission['email_phone'], FILTER_VALIDATE_EMAIL)) {
            Mail::to($submission['email_phone'], $submission['name'])->queue(new ApplicationReceivedCustomer($submission, $resourceData));
        }

        session()->flash('message', 'Your request has been submitted');
    }

    public function removeFile($index)
    {
        unset($this->attachment[$index]);
        $this->attachment = array_values($this->attachment);
    }

    public function render()
    {
        return view('livewire.forms.idea-box-component');
    }
}
