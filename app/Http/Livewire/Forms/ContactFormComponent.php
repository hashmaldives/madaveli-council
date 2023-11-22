<?php

namespace App\Http\Livewire\Forms;

use App\Models\User;
use Laravel\Nova\URL;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactFormSubmission;
use App\Mail\ApplicationReceivedAdmin;
use Illuminate\Support\Facades\Session;
use App\Mail\ApplicationReceivedCustomer;
use Laravel\Nova\Notifications\NovaNotification;

class ContactFormComponent extends Component
{

    use WithFileUploads;

    public  $name,
            $email_phone,
            $user_message;

    public $message = '';

    public $language;

    protected $listeners = ['languageToggled' => 'changeLanguage'];
    
    public function changeLanguage($language)
    {
        $this->language = $language;
        $this->name = '';
        $this->email_phone = '';
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
        ];
        return $rules;
    }

    public function submit()
    {
        
        $this->validate();

        $submission = ContactFormSubmission::create([
            'name' => $this->name,
            'email_phone' => $this->email_phone,
            'user_message' => $this->user_message,
        ]);

        $this->resetValidation();
        $this->reset();

        $resourceData = [
            'resourceName' => 'Contact Form Submission',
            'resourceUrl' => 'contact-form-submissions',
        ];

        foreach( json_decode(nova_get_setting('contact_form_users')) as $user ) {
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

    public function render()
    {
        return view('livewire.forms.contact-form-component');
    }
}
