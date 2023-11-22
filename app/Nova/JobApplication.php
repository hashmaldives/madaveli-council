<?php

namespace App\Nova;

use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\BelongsTo;
use HashTechnologies\LinkField\LinkField;
use Laravel\Nova\Http\Requests\NovaRequest;
use Hashtechnologies\GceAlResultsArray\GceAlResultsArray;
use Hashtechnologies\GceOlResultsArray\GceOlResultsArray;
use Hashtechnologies\ServiceBondsArray\ServiceBondsArray;
use Hashtechnologies\EmploymentHistoryArray\EmploymentHistoryArray;
use Hashtechnologies\ProfessionalTrainingsArray\ProfessionalTrainingsArray;
use Hashtechnologies\HigherEducationCertificatesArray\HigherEducationCertificatesArray;

class JobApplication extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\JobApplication>
     */
    public static $model = \App\Models\JobApplication::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Tabs::make('Submission Details', [
                Tab::make('Form Data', [
                    DateTime::make('Submitted Date', 'created_at'),
                    BelongsTo::make('Job listing','job_opportunity','App\Nova\JobOpportunity')->rules('required'),
                    Text::make('Applicant Name', 'name'),
                    Text::make('Applicant Gender', 'gender')->hideFromIndex(),
                    Text::make('Applicant Permanent Address', 'permanent_address')->hideFromIndex(),
                    Text::make('Applicant Current Address', 'current_address')->hideFromIndex(),
                    Text::make('Applicant NIC Number', 'nic')->hideFromIndex(),
                    Text::make('Applicant Date of Birth', 'dob')->hideFromIndex(),
                    Text::make('Applicant Email', 'email')->hideFromIndex(),
                    Text::make('Applicant Phone', 'phone'),
                    GceAlResultsArray::make('GCE A/L Results','gce_al_results')->hideFromIndex(),
                    GceOlResultsArray::make('GCE O/L Results','gce_ol_results')->hideFromIndex(),
                    HigherEducationCertificatesArray::make('Higher Education Certificates','higher_education_certificates')->hideFromIndex(),
                    ProfessionalTrainingsArray::make('Professional Trainings','professional_trainings')->hideFromIndex(),
                    EmploymentHistoryArray::make('Employment History','employment_history')->hideFromIndex(),
                    ServiceBondsArray::make('Service Bonds','service_bonds')->hideFromIndex(),
                ]),
                Tab::make('Attachments & PDF Download', [
                    LinkField::make('Application Form', 'application_form')
                        ->details([
                            'href' => function () {
                                return env('APP_URL') . '/' . $this->application_form;
                            },
                            'text' => function () {
                                return 'Download';
                            },
                            'newTab' => true,
                        ])->hideFromIndex(),
                    LinkField::make('Applicant CV', 'applicant_cv')
                        ->details([
                            'href' => function () {
                                return env('APP_URL') . '/' . $this->applicant_cv;
                            },
                            'text' => function () {
                                return 'Download';
                            },
                            'newTab' => true,
                        ])->hideFromIndex(),
                    LinkField::make('Applicant NIC', 'national_id_card')
                        ->details([
                            'href' => function () {
                                return env('APP_URL') . '/' . $this->national_id_card;
                            },
                            'text' => function () {
                                return 'Download';
                            },
                            'newTab' => true,
                        ])->hideFromIndex(),
                    LinkField::make('GCE O/L & A/L Certificates', 'gce_ol_al_certificates')
                        ->details([
                            'href' => function () {
                                return env('APP_URL') . '/' . $this->gce_ol_al_certificates;
                            },
                            'text' => function () {
                                return 'Download';
                            },
                            'newTab' => true,
                        ])->hideFromIndex(),
                    LinkField::make('Higher Education Certificates', 'college_degree_diploma_masters')
                        ->details([
                            'href' => function () {
                                return env('APP_URL') . '/' . $this->college_degree_diploma_masters;
                            },
                            'text' => function () {
                                return 'Download';
                            },
                            'newTab' => true,
                        ])->hideFromIndex(),
                    LinkField::make('Short Training Certificates', 'short_training_certificates')
                        ->details([
                            'href' => function () {
                                return env('APP_URL') . '/' . $this->short_training_certificates;
                            },
                            'text' => function () {
                                return 'Download';
                            },
                            'newTab' => true,
                        ])->hideFromIndex(),
                    LinkField::make('Employment Reference Letters', 'employment_reference_letters')
                        ->details([
                            'href' => function () {
                                return env('APP_URL') . '/' . $this->employment_reference_letters;
                            },
                            'text' => function () {
                                return 'Download';
                            },
                            'newTab' => true,
                        ])->hideFromIndex(),
                    LinkField::make('Download Attachments', 'id')
                        ->details([
                            'href' => function () {
                                return '/job-application-zip/'.encrypt($this->id);
                            },
                            'text' => function () {
                                return 'Download Attachments';
                            },
                            'newTab' => true,
                        ]),
                    LinkField::make('Generate PDF EN', 'id')
                        ->details([
                            'href' => function () {
                                return '/job-application-form-pdf-generate/'.encrypt($this->id).'/en';
                            },
                            'text' => function () {
                                return 'Generate PDF EN';
                            },
                            'newTab' => true,
                        ]),
                    LinkField::make('Generate PDF DH', 'id')
                        ->details([
                            'href' => function () {
                                return '/job-application-form-pdf-generate/'.encrypt($this->id).'/dh';
                            },
                            'text' => function () {
                                return 'Generate PDF DH';
                            },
                            'newTab' => true,
                        ]),

                ]),
            ]),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
