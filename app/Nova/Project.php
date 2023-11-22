<?php

namespace App\Nova;

use App\Models\Sidebar;
use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Drobee\NovaSluggable\Slug;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\FormData;
use Eminiarts\Tabs\Traits\HasTabs;
use Laravel\Nova\Fields\BelongsTo;
use Drobee\NovaSluggable\SluggableText;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

class Project extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Project::class;

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
            Tabs::make('Data', [
                Tab::make('Project Details', [
                    MediaHubField::make('Page Image', 'image')->defaultCollection('page_images')->rules('required'),
                    BelongsTo::make('Project Category','project_category','App\Nova\ProjectCategory')->nullable(),
                    BelongsTo::make('Project Status','project_status','App\Nova\ProjectStatus')->nullable(),
                    Number::make('Completion Percentage' , 'project_completion_percentage')->nullable()->max(100)->help('This displays a status bar with percentage on project page. Enter a number between 0 - 100.'),
                    Date::make('Start Date', 'start_date')->nullable(),
                    Date::make('End Date', 'end_date')->nullable(),
                ]),
                Tab::make('Content English', [
                    Text::make('Title English', 'title_en')->rules('required')->withMeta(['extraAttributes' => ['class' => 'test']]),
                    Flexible::make('Content English', 'content_en')->button('Add Block')->stacked()
                        ->menu(
                            'flexible-search-menu',
                            [
                                'selectLabel' => 'Press enter to select',
                                // the property on the layout entry
                                'label' => 'title',
                                // 'top', 'bottom', 'auto'
                                'openDirection' => 'bottom',
                            ]
                        )
                        ->addLayout(\App\Nova\Flexible\Layouts\RichTextLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\InfoBoxLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\SpacerLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ImageLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ButtonLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\AttachmentButtonLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\YouTubeVideoLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\CardLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ListLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\GalleryLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\TimelineLayout::class),
                ]),
                Tab::make('Content Dhivehi', [
                    ThaanaText::make('Title Dhivehi', 'title_dh')->rules('required')->hideFromIndex(),
                    Flexible::make('Content Dhivehi', 'content_dh')->button('Add Block')->stacked()
                        ->menu(
                            'flexible-search-menu',
                            [
                                'selectLabel' => 'Press enter to select',
                                // the property on the layout entry
                                'label' => 'title',
                                // 'top', 'bottom', 'auto'
                                'openDirection' => 'bottom',
                            ]
                        )
                        ->addLayout(\App\Nova\Flexible\Layouts\RichTextLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\InfoBoxLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\SpacerLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ImageLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ButtonLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\AttachmentButtonLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\YouTubeVideoLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\CardLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ListLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\GalleryLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\TimelineLayoutDh::class),
                ]),
                Tab::make('Project Gallery', [
                    MediaHubField::make('Gallery Images (Multiple)', 'images')->defaultCollection('projects')->multiple(),
                    Flexible::make('Videos', 'videos')->button('Add Videos')
                        ->addLayout(\App\Nova\Flexible\Layouts\GalleryYouTubeVideoLayout::class),
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
