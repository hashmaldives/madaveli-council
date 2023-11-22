<?php

namespace App\Nova;

use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Eminiarts\Tabs\Traits\HasTabs;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;

class Sidebar extends Resource
{
    use HasTabs;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Sidebar::class;

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
        'id', 'name'
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
            Text::make('Name', 'name')->rules('required'),
            Tabs::make('Content', [
                Tab::make('English', [
                    Flexible::make('Widgets English', 'content_en')->rules('required')
                    ->button('Add Block')->stacked()
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
                    ->addLayout(\App\Nova\Flexible\Layouts\Widgets\RichTextWidget::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\Widgets\ImageWidget::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\Widgets\ContactDetailsWidget::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\Widgets\LocationWidget::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\Widgets\SocialIconsWidget::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\Widgets\ContainerWidget::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\Widgets\FacebookFeedWidget::class),
                ]),
                Tab::make('Dhivehi', [
                    Flexible::make('Widgets Dhivehi', 'content_dh')->rules('required')
                    ->button('Add Block')->stacked()
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
                    ->addLayout(\App\Nova\Flexible\Layouts\Widgets\RichTextWidgetDh::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\Widgets\ImageWidgetDh::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\Widgets\ContactDetailsWidgetDh::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\Widgets\LocationWidget::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\Widgets\SocialIconsWidgetDh::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\Widgets\ContainerWidgetDh::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\Widgets\FacebookFeedWidgetDh::class),
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
