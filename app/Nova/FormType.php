<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Drobee\NovaSluggable\Slug;
use Laravel\Nova\Fields\HasMany;
use Drobee\NovaSluggable\SluggableText;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Http\Requests\NovaRequest;

class FormType extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\FormType>
     */
    public static $model = \App\Models\FormType::class;

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
            SluggableText::make('Title English', 'title_en')->rules('required'),
            Slug::make('Slug', 'slug')->slugUnique()->slugModel(static::$model)->rules('required'),
            ThaanaText::make('Title Dhivehi', 'title_dh')->rules('required'),
            HasMany::make('Dynamic Forms', 'dynamic_forms'),
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
