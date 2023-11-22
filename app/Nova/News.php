<?php

namespace App\Nova;

use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Textarea;
use Eminiarts\Tabs\Traits\HasTabs;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;
use HashTechnologies\ThaanaTextarea\ThaanaTextarea;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

class News extends Resource
{
    use HasTabs;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\News::class;

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
            ID::make(__('ID'), 'id')->sortable(),
            MediaHubField::make('Post Image', 'image')->defaultCollection('news_images')->rules('required'),
            Tabs::make('Content', [
                Tab::make('English', [
                    Text::make('Title English', 'title_en')->rules('required'),
                    Flexible::make('Content', 'content_en')->rules('required')->button('Add Block')->stacked()
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
                Tab::make('Dhivehi', [
                    ThaanaText::make('Title Dhivehi', 'title_dh')->rules('required'),
                    Flexible::make('Content', 'content_dh')->rules('required')->button('Add Block')->stacked()
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
