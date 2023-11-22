<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Http\Requests\NovaRequest;

class EmployeeSection extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\EmployeeSection::class;

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
            Text::make('Title English', 'title_en')->rules('required'),
            ThaanaText::make('Title Dhivehi', 'title_dh')->rules('required'),
            Boolean::make('Active?', 'active'),
            Boolean::make('Link to Employee profiles?', 'link_to_employee_profile'),
            BelongsToMany::make('Employees', 'employees')
            ->fields(function ($request) {
                return [
                    Select::make('Level', 'level')->options([
                        '1' => 'Level One',
                        '2' => 'Level Two',
                        '3' => 'Level Three',
                    ])->help(
                        'Select the level of this staff.'
                    )->rules('required'),
                    Text::make('Position English', 'position_en')->rules('required'),
                    ThaanaText::make('Position Dhivehi', 'position_dh')->rules('required'),
                    Date::make('Employment Start Date', 'employment_start_date')->resolveUsing(function ($value) {
                        return $value;
                    }),
                    Date::make('Employment End Date', 'employment_end_date')->resolveUsing(function ($value) {
                        return $value;
                    }),
                ];
            })->searchable(function ($request) {
                return true;
            }),
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
