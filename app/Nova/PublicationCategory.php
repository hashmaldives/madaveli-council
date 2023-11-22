<?php

namespace App\Nova;

use App\Models\User;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Drobee\NovaSluggable\Slug;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\BelongsToMany;
use Drobee\NovaSluggable\SluggableText;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Http\Requests\NovaRequest;

class PublicationCategory extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\PublicationCategory::class;

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
     * Only users who have a publication attached by an admin or a by user who already has access can only view publications.
     */
    public static function indexQuery(NovaRequest $request, $query)
    {
        // Retrieve the currently authenticated user
        $user = $request->user();
        // Apply a filter to the query to get categories for the current user
        return $query->whereHas('users', function ($userQuery) use ($user) {
            $userQuery->where('users.id', $user->id);
        });
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
            SluggableText::make('Title English', 'title_en')->rules('required'),
            Slug::make('Slug', 'slug')->slugUnique()->slugModel(static::$model)->rules('required'),
            ThaanaText::make('Title Dhivehi', 'title_dh')->rules('required'),
            HasMany::make('Publications'),
            BelongsToMany::make('Users')
            // ->searchable(function ($request) {
            //     return true;
            // }),
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
