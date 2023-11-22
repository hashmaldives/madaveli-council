<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\BelongsTo;
use HashTechnologies\LinkField\LinkField;
use Laravel\Nova\Http\Requests\NovaRequest;

class ApplicationFormSubmission extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\ApplicationFormSubmission>
     */
    public static $model = \App\Models\ApplicationFormSubmission::class;

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
            DateTime::make('Submitted Date', 'created_at'),
            Text::make('Applicant Name', 'name'),
            Text::make('Applicant Phone', 'phone'),
            Text::make('Applicant Email', 'email')->hideFromIndex(),
            Text::make('Applicant Permanent Address', 'permanent_address')->hideFromIndex(),
            Text::make('Applicant Present Address', 'present_address')->hideFromIndex(),
            BelongsTo::make('Application Form Category','application_form_category','App\Nova\ApplicationFormCategory')->rules('required'),
            LinkField::make('Download Attachments', 'id')
                ->details([
                    'href' => function () {
                        return '/application-form-zip/'.encrypt($this->id);
                    },
                    'text' => function () {
                        return 'Download Attachments';
                    },
                    'newTab' => true,
                ]),
            HasMany::make('Attachments', 'user_attachment','App\Nova\UserAttachment'),
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
