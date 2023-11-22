<?php

namespace App\Nova;

use App\Models\Sidebar;
use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Drobee\NovaSluggable\Slug;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\FormData;
use Eminiarts\Tabs\Traits\HasTabs;
use Laravel\Nova\Fields\BelongsTo;
use Drobee\NovaSluggable\SluggableText;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

class Page extends Resource
{
    use HasTabs;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Page::class;

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
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name', 'title_en', 'title_dh'
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
            ID::make(__('ID'), 'id')->sortable(),
            Tabs::make('Data', [
                Tab::make('Page Settings', [
                    SluggableText::make('Name', 'name')->rules('required'),
                    Slug::make('Slug', 'slug')->slugUnique()->slugModel(static::$model)->rules('required'),
                    Select::make('Template', 'template')->options([
                        'regular-page' => 'Regular Page',
                        'contact-page' => 'Contact Us',
                        'ideabox-page' => 'Idea Box Page',
                        'council-members-page' => 'Council Members Page',
                        'wdc-members-page' => 'WDC Members Page',
                        'employees-page' => 'Employees Page',
                        'application-form-page' => 'Application Form Page',
                        'job-applications-page' => 'Job Application Form Page',
                        'page-with-sidebar' => 'Page with Sidebar',
                    ])->displayUsingLabels()->rules('required')->hideFromIndex(),
                    MediaHubField::make('Page Image', 'image')->defaultCollection('page_images')->help('Page image is optional'),
                    Boolean::make('Enable maps', 'maps')->hideFromIndex()->default(false)->help('Toggle to select a map to display on this page.'),
                    Select::make('Map', 'map_id')->options(\App\Models\Map::pluck('title_en', 'id'))
                    ->nullable()
                    ->hideFromIndex()
                    ->hide()
                    ->dependsOn(
                        ['maps'], 
                        function (Select $field, NovaRequest $request, FormData $formData) {
                            if ($formData->maps === true) {
                                $field->show(false)->rules(['required']);
                            }
                        }
                    )->help('If no map is shown from the list, go to Administrative/Maps and create a Map.'),
                ]),
                Tab::make('Sidebar', [
                    Boolean::make('Enable Sidebar?', 'enable_sidebar'),
                    BelongsTo::make('Sidebar','sidebar','App\Nova\Sidebar')->nullable(),
                ]),
                Tab::make('Content English', [
                    Text::make('Title English', 'title_en')->rules('required')->withMeta(['extraAttributes' => ['class' => 'test']])->hideFromIndex(),
                    Flexible::make('Content', 'content_en')->button('Add Section')->stacked()
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\PageSectionLayout::class)->hideFromIndex(),
                ]),
                Tab::make('Content Dhivehi', [
                    ThaanaText::make('Title Dhivehi', 'title_dh')->rules('required')->hideFromIndex(),
                    Flexible::make('Content', 'content_dh')->button('Add Section')->stacked()
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\PageSectionLayoutDh::class)->hideFromIndex(),
                ]),
            ]),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
