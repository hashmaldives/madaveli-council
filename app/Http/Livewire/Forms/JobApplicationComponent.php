<?php

namespace App\Http\Livewire\Forms;

use Carbon\Carbon;
use App\Models\User;
use Laravel\Nova\URL;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\JobApplication;
use App\Models\JobOpportunity;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationReceivedAdmin;
use Illuminate\Support\Facades\Session;
use App\Mail\ApplicationReceivedCustomer;
use Illuminate\Support\Facades\Validator;
use Laravel\Nova\Notifications\NovaNotification;

class JobApplicationComponent extends Component
{
    use WithFileUploads;

    public  $job_opportunity_id = '0',
    $name,
    $gender = '0',
    $permanent_address,
    $current_address,
    $nic,
    $dob,
    $email,
    $phone,
    $application_form,
    $applicant_cv,
    $national_id_card,
    $gce_ol_al_certificates,
    $college_degree_diploma_masters,
    $short_training_certificates,
    $employment_reference_letters;


    public $gce_al_results = [];
    public $gce_al_subject;
    public $gce_al_grade;
    public $gce_al_year;

    public $gce_ol_results = [];
    public $gce_ol_subject;
    public $gce_ol_grade;
    public $gce_ol_year;        

    public $higher_education_certificates = [];
    public $higher_ed_course_name;
    public $higher_ed_course_level;
    public $higher_ed_start_date;
    public $higher_ed_end_date;
    public $higher_ed_institution_country;

    public $professional_trainings = [];
    public $professional_certificate_training_name;
    public $professional_certificate_training_institution_country;
    public $professional_certificate_training_duration;
    public $professional_certificate_training_year;

    public $employment_history = [];
    public $employment_position_name;
    public $place_of_employment;
    public $employment_duration;
    public $employment_salary;
    public $employment_termination_reason;

    public $service_bonds = [];
    public $bond_reason;
    public $bond_duration;
    public $bond_start_date;
    public $bond_end_date;
    public $bond_status;

    public $message = '';

    public $language;

    public $jobList;
    public $jobs;

    protected $listeners = ['languageToggled' => 'changeLanguage'];
    
    public function changeLanguage($language)
    {
        $this->language = $language;
        $this->name = '';
        $this->gender = '0';
        $this->permanent_address = '';
        $this->current_address = '';
        $this->nic = '';
        $this->dob = '';
        $this->email = '';
        $this->phone = '';
        $this->application_form = '';
        $this->applicant_cv = '';
        $this->national_id_card = '';
        $this->gce_ol_al_certificates = '';
        $this->college_degree_diploma_masters = '';
        $this->short_training_certificates = '';
        $this->employment_reference_letters = '';
        $this->gce_al_results = [];
        $this->gce_ol_results = [];
        $this->higher_education_certificates = [];
        $this->professional_trainings = [];
        $this->employment_history = [];
        $this->service_bonds = [];
    }

    public function mount() {
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
        $this->jobs = JobOpportunity::latest()->get();
        foreach($this->jobs as $job) {
            if( $job->application_deadline->isPast() != '1' ) {
                $this->jobList[] = array(
                    "nameEn" => $job->title_en, 
                    "valueEn" => $job->id,
                    "nameDh" => $job->title_dh . ' - ' . ' އިއުލާން ނަންބަރ ' . $job->number, 
                    "valueDh" => $job->id,
                );
            }
        }
    }

    /**========================================================================
                                * GCE AL RESULTS
    ==========================================================================*/
    public function removeGceAlResult($index){
        unset($this->gce_al_results[$index]);
        $this->gce_al_results = $this->gce_al_results;
    }

    public function addGceAlResult()
    {
        
        $arr = [
            'gce_al_subject' => $this->gce_al_subject,
            'gce_al_grade' => $this->gce_al_grade,
            'gce_al_year' => $this->gce_al_year
        ];
        Validator::make($arr,[
            'gce_al_subject' => 'required',
            'gce_al_grade' => 'required',
            'gce_al_year' => 'required'
        ])->validate();

        $data = [
            'gce_al_subject' => $this->gce_al_subject,
            'gce_al_grade' => $this->gce_al_grade,
            'gce_al_year' => $this->gce_al_year,
        ];
        array_push($this->gce_al_results,$data);
        $this->reset(['gce_al_subject', 'gce_al_grade', 'gce_al_year']);
    }
    /**========================================================================
                                * GCE AL RESULTS
    ==========================================================================*/


    /**========================================================================
                                * GCE OL RESULTS
    ==========================================================================*/
    public function removeGceOlResult($index){
        unset($this->gce_ol_results[$index]);
        $this->gce_ol_results = $this->gce_ol_results;
    }

    public function addGceOlResult()
    {
        
        $arr = [
            'gce_ol_subject' => $this->gce_ol_subject,
            'gce_ol_grade' => $this->gce_ol_grade,
            'gce_ol_year' => $this->gce_ol_year
        ];
        Validator::make($arr,[
            'gce_ol_subject' => 'required',
            'gce_ol_grade' => 'required',
            'gce_ol_year' => 'required'
        ])->validate();

        $data = [
            'gce_ol_subject' => $this->gce_ol_subject,
            'gce_ol_grade' => $this->gce_ol_grade,
            'gce_ol_year' => $this->gce_ol_year,
        ];
        array_push($this->gce_ol_results,$data);
        $this->reset(['gce_ol_subject', 'gce_ol_grade', 'gce_ol_year']);
    }
    /**========================================================================
                                * GCE OL RESULTS
    ==========================================================================*/


    /**========================================================================
                        * HIGHER EDUCATION CERTIFICATES
    ==========================================================================*/
    public function removeHigherEducationCourse($index){
        unset($this->higher_education_certificates[$index]);
        $this->higher_education_certificates = $this->higher_education_certificates;
    }

    public function addHigherEducationCourse()
    {
        
        $arr = [
            'higher_ed_course_name' => $this->higher_ed_course_name,
            'higher_ed_course_level' => $this->higher_ed_course_level,
            'higher_ed_start_date' => $this->higher_ed_start_date,
            'higher_ed_end_date' => $this->higher_ed_end_date,
            'higher_ed_institution_country' => $this->higher_ed_institution_country
        ];
        Validator::make($arr,[
            'higher_ed_course_name' => 'required',
            'higher_ed_course_level' => 'required',
            'higher_ed_start_date' => 'required',
            'higher_ed_end_date' => 'required',
            'higher_ed_institution_country' => 'required'
        ])->validate();

        $data = [
            'higher_ed_course_name' => $this->higher_ed_course_name,
            'higher_ed_course_level' => $this->higher_ed_course_level,
            'higher_ed_start_date' => $this->higher_ed_start_date,
            'higher_ed_end_date' => $this->higher_ed_end_date,
            'higher_ed_institution_country' => $this->higher_ed_institution_country,
        ];
        array_push($this->higher_education_certificates,$data);
        $this->reset(['higher_ed_course_name', 'higher_ed_course_level', 'higher_ed_start_date', 'higher_ed_end_date', 'higher_ed_institution_country']);
    }
    /**========================================================================
                        * HIGHER EDUCATION CERTIFICATES
    ==========================================================================*/


    /**========================================================================
                        * PROFESSIONAL CERTIFICATES
    ==========================================================================*/
    public function removeProfessionalCertificate($index){
        unset($this->professional_trainings[$index]);
        $this->professional_trainings = $this->professional_trainings;
    }

    public function addProfessionalCertificate()
    {
        
        $arr = [
            'professional_certificate_training_name' => $this->professional_certificate_training_name,
            'professional_certificate_training_institution_country' => $this->professional_certificate_training_institution_country,
            'professional_certificate_training_duration' => $this->professional_certificate_training_duration,
            'professional_certificate_training_year' => $this->professional_certificate_training_year,
        ];
        Validator::make($arr,[
            'professional_certificate_training_name' => 'required',
            'professional_certificate_training_institution_country' => 'required',
            'professional_certificate_training_duration' => 'required',
            'professional_certificate_training_year' => 'required',
        ])->validate();

        $data = [
            'professional_certificate_training_name' => $this->professional_certificate_training_name,
            'professional_certificate_training_institution_country' => $this->professional_certificate_training_institution_country,
            'professional_certificate_training_duration' => $this->professional_certificate_training_duration,
            'professional_certificate_training_year' => $this->professional_certificate_training_year,
        ];
        array_push($this->professional_trainings,$data);
        $this->reset(['professional_certificate_training_name', 'professional_certificate_training_institution_country', 'professional_certificate_training_duration', 'professional_certificate_training_year']);
    }
    /**========================================================================
                        * PROFESSIONAL CERTIFICATES
    ==========================================================================*/

    
    /**========================================================================
                                * EMPLOYMENT HISTORY
    ==========================================================================*/
    public function removeEmploymentHistory($index){
        unset($this->employment_history[$index]);
        $this->employment_history = $this->employment_history;
    }

    public function addEmploymentHistory()
    {
        
        $arr = [
            'employment_position_name' => $this->employment_position_name,
            'place_of_employment' => $this->place_of_employment,
            'employment_duration' => $this->employment_duration,
            'employment_salary' => $this->employment_salary,
            'employment_termination_reason' => $this->employment_termination_reason,
        ];
        Validator::make($arr,[
            'employment_position_name' => 'required',
            'place_of_employment' => 'required',
            'employment_duration' => 'required',
            'employment_salary' => 'required',
            'employment_termination_reason' => 'required',
        ])->validate();

        $data = [
            'employment_position_name' => $this->employment_position_name,
            'place_of_employment' => $this->place_of_employment,
            'employment_duration' => $this->employment_duration,
            'employment_salary' => $this->employment_salary,
            'employment_termination_reason' => $this->employment_termination_reason,
        ];
        array_push($this->employment_history,$data);
        $this->reset(['employment_position_name', 'place_of_employment', 'employment_duration', 'employment_salary', 'employment_termination_reason']);
    }
    /**========================================================================
                                * EMPLOYMENT HISTORY
    ==========================================================================*/
    

    /**========================================================================
                                * SERVICE BONDS
    ==========================================================================*/
    public function removeServiceBond($index){
        unset($this->service_bonds[$index]);
        $this->service_bonds = $this->service_bonds;
    }

    public function addServiceBond()
    {
        
        $arr = [
            'bond_reason' => $this->bond_reason,
            'bond_duration' => $this->bond_duration,
            'bond_start_date' => $this->bond_start_date,
            'bond_end_date' => $this->bond_end_date,
            'bond_status' => $this->bond_status,
        ];
        Validator::make($arr,[
            'bond_reason' => 'required',
            'bond_duration' => 'required',
            'bond_start_date' => 'required',
            'bond_end_date' => 'required',
            'bond_status' => 'required',
        ])->validate();

        $data = [
            'bond_reason' => $this->bond_reason,
            'bond_duration' => $this->bond_duration,
            'bond_start_date' => $this->bond_start_date,
            'bond_end_date' => $this->bond_end_date,
            'bond_status' => $this->bond_status,
        ];
        array_push($this->service_bonds,$data);
        $this->reset(['bond_reason', 'bond_duration', 'bond_start_date', 'bond_end_date', 'bond_status']);
    }
    /**========================================================================
                                * SERVICE BONDS
    ==========================================================================*/
    
    protected function rules() {
        $rules = [];
        $rules = [
            'job_opportunity_id' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'permanent_address' => 'required',
            'current_address' => 'required',
            'nic' => 'required',
            'dob' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'application_form' => 'required|file|mimes:pdf|max:5000',
            'applicant_cv' => 'required|file|mimes:pdf|max:5000',
            'national_id_card' => 'required|file|mimes:pdf|max:5000',
            'gce_ol_al_certificates' => 'nullable|file|mimes:pdf|max:10000',
            'college_degree_diploma_masters' => 'nullable|file|mimes:pdf|max:10000',
            'short_training_certificates' => 'nullable|file|mimes:pdf|max:10000',
            'employment_reference_letters' => 'nullable|file|mimes:pdf|max:10000',
        ];
        return $rules;
    }

    public function submit()
    {
        
        $this->validate();

        if( !empty($this->application_form) ) { $application_form = $this->application_form->storePublicly('application_form','public');}
        if( !empty($this->applicant_cv) ) { $applicant_cv = $this->applicant_cv->storePublicly('applicant_cv','public');}
        if( !empty($this->national_id_card) ) { $national_id_card = $this->national_id_card->storePublicly('national_id_card','public');}
        if( !empty($this->gce_ol_al_certificates) ) { $gce_ol_al_certificates = $this->gce_ol_al_certificates->storePublicly('gce_ol_al_certificates','public');}
        if( !empty($this->college_degree_diploma_masters) ) { $college_degree_diploma_masters = $this->college_degree_diploma_masters->storePublicly('college_degree_diploma_masters','public');}
        if( !empty($this->short_training_certificates) ) { $short_training_certificates = $this->short_training_certificates->storePublicly('short_training_certificates','public');}
        if( !empty($this->employment_reference_letters) ) { $employment_reference_letters = $this->employment_reference_letters->storePublicly('employment_reference_letters','public');}
        
        $submission = JobApplication::create([
            'job_opportunity_id' => $this->job_opportunity_id,
            'name' => $this->name,
            'gender' => $this->gender,
            'permanent_address' => $this->permanent_address,
            'current_address' => $this->current_address,
            'nic' => $this->nic,
            'dob' => $this->dob,
            'email' => $this->email,
            'phone' => $this->phone,
            'gce_al_results' => $this->gce_al_results,
            'gce_ol_results' => $this->gce_ol_results,
            'higher_education_certificates' => $this->higher_education_certificates,
            'professional_trainings' => $this->professional_trainings,
            'employment_history' => $this->employment_history,
            'service_bonds' => $this->service_bonds,
            'applicant_cv' => $this->applicant_cv,
            'national_id_card' => $this->national_id_card,
            'application_form' => $application_form ?? '',
            'applicant_cv' => $applicant_cv ?? '',
            'national_id_card' => $national_id_card ?? '',
            'gce_ol_al_certificates' => $gce_ol_al_certificates ?? '',
            'college_degree_diploma_masters' => $college_degree_diploma_masters ?? '',
            'short_training_certificates' => $short_training_certificates ?? '',
            'employment_reference_letters' => $employment_reference_letters ?? '',
        ]);

        $this->resetValidation();
        $this->reset();
        $this->applicant_cv = null;
        $this->national_id_card = null;
        $this->gce_ol_al_certificates = null;
        $this->college_degree_diploma_masters = null;
        $this->short_training_certificates = null;
        $this->employment_reference_letters = null;
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');

        // $users[] = '';
        // foreach( json_decode(nova_get_setting('job_users')) as $user ) {
        //     $users[] = User::find($user->attributes->user);
        // }

        // $resourceData = [
        //     'resourceName' => 'Job Application',
        //     'resourceUrl' => 'job-applications',
        // ];
        // if(!empty($users)) {
        //     Notification::send($users, new NewApplicationNotification($submission, $resourceData));
        // }
        // Mail::to($submission['email'])->queue(new ApplicationReceivedCustomer($submission, $resourceData));

        $resourceData = [
            'resourceName' => 'Job Application',
            'resourceUrl' => 'job-applications',
        ];

        foreach( json_decode(nova_get_setting('job_application_form_users')) as $user ) {
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


        session()->flash('message', 'Your Application has been submitted');
    }

    public function render()
    {
        return view('livewire.forms.job-application-component');
    }
}
