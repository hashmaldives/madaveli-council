<?php

namespace App\Nova;

use App\Models\Sidebar;
use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Tag;
use Laravel\Nova\Fields\Text;
use Drobee\NovaSluggable\Slug;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\FormData;
use Eminiarts\Tabs\Traits\HasTabs;
use Laravel\Nova\Fields\BelongsTo;
use Drobee\NovaSluggable\SluggableText;
use Hashtechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;
use Trinityrank\GoogleMapWithAutocomplete\TRMap;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

class Business extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Business>
     */
    public static $model = \App\Models\Business::class;

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
            ID::make()->sortable(),
            Tabs::make('Data', [
                Tab::make('Settings', [
                    SluggableText::make('Name', 'name')->rules('required'),
                    Slug::make('Slug', 'slug')->slugUnique()->slugModel(static::$model)->rules('required'),
                    MediaHubField::make('Business Image', 'image')->defaultCollection('business_images'),
                ]),
                Tab::make('Categories', [
                    Tag::make('Business Type', 'business_type', 'App\Nova\BusinessType')->withPreview()->showCreateRelationButton()->modalSize('7xl')->nullable(),
                    Tag::make('Business Category', 'business_category', 'App\Nova\BusinessCategory')->withPreview()->showCreateRelationButton()->modalSize('7xl')->nullable(),
                ]),
                Tab::make('Content EN', [
                    Text::make('Title English', 'title_en')->rules('required')->hideFromIndex(),
                    Flexible::make('Content', 'content_en')->button('Add Section')->stacked()
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\PageSectionLayout::class)->hideFromIndex(),
                ]),
                Tab::make('Content DH', [
                    ThaanaText::make('Title Dhivehi', 'title_dh')->rules('required')->hideFromIndex(),
                    Flexible::make('Content', 'content_dh')->button('Add Section')->stacked()
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\PageSectionLayoutDh::class)->hideFromIndex(),
                ]),
                Tab::make('Location', [
                    Boolean::make('Enable maps', 'maps')->hideFromIndex()->default(false)->help('Toggle to select a map to display on this page.'),
                    TRMap::make('Map Coordinates', 'map')
                        ->stacked()
                        ->latitude('4.1735893')
                        ->longitude('73.5093244')
                        ->zoom(20),
                ]),
                Tab::make('Social Media', [
                    Text::make('Email', 'email')->hideFromIndex(),
                    Text::make('Phone', 'phone')->hideFromIndex(),
                    Text::make('Facebook', 'facebook_handler')->help( 'Facebook username without "@".' )->hideFromIndex(),
                    Text::make('Twitter', 'twitter_handler')->help( 'Twitter username without "@".' )->hideFromIndex(),
                    Text::make('Instagram', 'instagram_handler')->help( 'Instagram username without "@".' )->hideFromIndex(),
                    Text::make('Linkedin', 'linkedin_handler')->help( 'Linkedin username without "@".' )->hideFromIndex(),
                    Text::make('Youtube', 'youtube_handler')->help( 'Youtube username without "@".' )->hideFromIndex(),
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
