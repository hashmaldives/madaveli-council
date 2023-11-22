<?php

namespace App\Nova;

use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Drobee\NovaSluggable\Slug;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Drobee\NovaSluggable\SluggableText;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

class DynamicForm extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\DynamicForm>
     */
    public static $model = \App\Models\DynamicForm::class;

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
            Tabs::make('Data', [
                Tab::make('Form Settings', [
                    SluggableText::make('Title English', 'title_en')->rules('required'),
                    Slug::make('Slug', 'slug')->slugUnique()->slugModel(static::$model)->rules('required'),
                    ThaanaText::make('Title Dhivehi', 'title_dh')->rules('required')->hideFromIndex(),
                    Select::make('Form Template', 'template')->options([
                        'regular-form' => 'Regular Form',
                    ])->displayUsingLabels()->rules('required')->hideFromIndex(),
                    MediaHubField::make('Form Image', 'image')->defaultCollection('page_images')->help('Form image is optional'),
                    BelongsTo::make('Form Type','form_type','App\Nova\FormType')->rules('required'),
                    BelongsTo::make('Form Category','form_category','App\Nova\FormCategory')->rules('required'),
                    Text::make('Submit Btn Title English', 'submit_btn_title_en')->default('Submit')->rules('required')->hideFromIndex()->suggestions([
                        'Submit',
                    ]),
                    ThaanaText::make('Submit Btn Title Dhivehi', 'submit_btn_title_dh')->default('ފޮނުވާ')->rules('required')->hideFromIndex(),
                ]),
                Tab::make('Form Data', [
                    Flexible::make('Form Data', 'form_data')->button('Add Section')->stacked()
                        ->addLayout(\App\Nova\Flexible\Layouts\Forms\FormSection::class)->hideFromIndex(),
                ]),
                Tab::make('Notifications', [
                    Heading::make('Select users who would receive notifications whenever a new application is submitted.'),
                    Flexible::make('Notification Users', 'notification_users')->button('Add User')
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\UserSelectLayout::class)->hideFromIndex(),
                ]),
            ]),
            HasMany::make('Form Submission', 'form_submission'),
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
