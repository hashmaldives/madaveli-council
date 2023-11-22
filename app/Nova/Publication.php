<?php

namespace App\Nova;

use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Eminiarts\Tabs\Traits\HasTabs;
use Laravel\Nova\Fields\BelongsTo;
use Hashtechnologies\TinyMce\TinyMce;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;
use Sereny\NovaSearchableFilter\SearchableFilter;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

class Publication extends Resource
{
    use HasTabs;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Publication::class;

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
     * Build an "index" query for the given resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     * Publications are only visible to a user if the user have access to the publication category.
     */
    public static function indexQuery(NovaRequest $request, $query)
    {
        $categoryIds = $request->user()->publication_category->pluck('id');
        return $query->whereIn('publication_category_id', $categoryIds);
    }
    

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
            Text::make('Title English', 'title_en')->rules('required'),
            ThaanaText::make('Title Dhivehi', 'title_dh')->rules('required'),
            Text::make('Document Number', 'number'),
            BelongsTo::make('Category','publication_category','App\Nova\PublicationCategory')->showCreateRelationButton()->modalSize('7xl')->rules('required')->searchable(function ($request) {
                return true;
            })->sortable(),
            MediaHubField::make('Main PDF to Embed', 'main_pdf')->defaultCollection('documents')->rules('required'),
            Flexible::make('Attachments', 'attachment')->button('Add Attachment')
                ->addLayout(\App\Nova\Flexible\Layouts\CouncilLayouts\DocumentAttachmentLayout::class),
            Tabs::make('Content', [
                Tab::make('English', [
                    TinyMce::make('Content English','content_en')->hideFromIndex(),
                ]),
                Tab::make('Dhivehi', [
                    TinyMce::make('Content Dhivehi','content_dh')->hideFromIndex(),
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
        return [
            SearchableFilter::make('Category','publication_category')
        ];
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
