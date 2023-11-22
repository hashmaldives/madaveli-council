<?php

namespace App\Nova;

use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Textarea;
use Eminiarts\Tabs\Traits\HasTabs;
use Illuminate\Support\Facades\Gate;
use Hashtechnologies\TinyMce\TinyMce;
use Laravel\Nova\Fields\BelongsToMany;
use Hashtechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

class JobOpportunity extends Resource
{
    use HasTabs;
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\JobOpportunity>
     */
    public static $model = \App\Models\JobOpportunity::class;

    /**
     * The click action to use when clicking on the resource in the table.
     *
     * Can be one of: 'detail' (default), 'edit', 'select', 'preview', or 'ignore'.
     *
     * @var string
     */
    public static $clickAction = 'edit';

    /**
     * Indicates whether Nova should check for modifications between viewing and updating a resource.
     *
     * @var bool
     */
    public static $trafficCop = true;

    /**
     * The pagination per-page options configured for this resource.
     *
     * @return array
     */
    public static $perPageOptions = [50, 100, 150];

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title_en';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title_en', 'title_dh'
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
            DateTime::make('Created Date', 'created_at')->rules('required'),
            Text::make('Job Title (admin Reference)', 'job_title')->rules('required'),
            Text::make('Document Number', 'number')->rules('required'),
            Number::make('Basic Salary', 'basic_salary')->rules('required')->hideFromIndex(),
            Number::make('Living Allowance', 'living_allowance')->hideFromIndex(),
            Number::make('Service Allowance', 'service_allowance')->hideFromIndex(),
            Number::make('Number of vacancies', 'open_vacancies')->hideFromIndex(),
            Text::make('Other Allowance', 'other_allowance')->hideFromIndex(),
            Text::make('Position Rank', 'position_rank')->hideFromIndex(),
            Text::make('Position Classification', 'position_classification')->hideFromIndex(),
            DateTime::make('Application Deadline', 'application_deadline'),
            MediaHubField::make('Main PDF to Embed', 'main_pdf')->defaultCollection('documents'),
            Flexible::make('Attachments (If there are any PDFs or other files that need to be attached with this publication, add them here)', 'attachment')
                ->addLayout(\App\Nova\Flexible\Layouts\CouncilLayouts\DocumentAttachmentLayout::class),
            Tabs::make('Content', [
                Tab::make('English', [
                    Text::make('Position Name English', 'title_en')->rules('required')->hideFromIndex(),
                    Text::make('Office English', 'office_en')->hideFromIndex(),
                    Text::make('Section English', 'section_en')->hideFromIndex(),
                    TinyMce::make('Content English','content_en')->hideFromIndex(),
                ]),
                Tab::make('Dhivehi', [
                    ThaanaText::make('Position Name Dhivehi', 'title_dh')->rules('required')->hideFromIndex(),
                    ThaanaText::make('Office Dhivehi', 'office_dh')->hideFromIndex(),
                    ThaanaText::make('Section Dhivehi', 'section_dh')->hideFromIndex(),
                    TinyMce::make('Content Dhivehi','content_dh')->hideFromIndex(),
                ]),
                Tab::make('Tags', [
                    Textarea::make('Tags English', 'tags_en')->help('Keep tags saperated by commas (Eg: Tag One, Tag Two, Tag Three)'),
                    Textarea::make('Tags Dhivehi', 'tags_dh')->help('Keep tags saperated by commas (Eg: Tag One, Tag Two, Tag Three)'),
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
