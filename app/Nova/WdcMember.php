<?php

namespace App\Nova;

use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Drobee\NovaSluggable\Slug;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Drobee\NovaSluggable\SluggableText;
use Laravel\Nova\Http\Requests\NovaRequest;
use Hashtechnologies\TinyMce\TinyMce;
use Whitecube\NovaFlexibleContent\Flexible;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

class WdcMember extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\WdcMember::class;

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
        'id', 'name', 'name_en', 'name_dh'
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
            SluggableText::make('Name (For admin purposes)', 'name')->rules('required'),
            Slug::make('Slug', 'slug')->slugUnique()->slugModel(static::$model)->rules('required'),
            Boolean::make('Publish?', 'publish'),
            MediaHubField::make('Image', 'image')->defaultCollection('council_members')->rules('required'),
            Text::make('Email', 'email')->hideFromIndex(),
            Text::make('Phone', 'phone'),
            BelongsTo::make('Political Party','political_party','App\Nova\PoliticalParty')->rules('required'),
            Boolean::make('Enable Short Description', 'shortdesc')->hideFromIndex()->default(false)->help('Check this option to display the values in this field on the website.'),
            Tabs::make('Additional Details & Social Media', [
                Tab::make('Short Description English', [
                    TinyMce::make('Short Description English','short_description_en'),
                ]),
                Tab::make('Short Description Dhivehi', [
                    TinyMce::make('Short Description Dhivehi','short_description_dh'),
                ]),
                Tab::make('Social Media', [
                    Text::make('Facebook', 'facebook_handler')->help( 'Facebook username without "@".' )->hideFromIndex(),
                    Text::make('Twitter', 'twitter_handler')->help( 'Twitter username without "@".' )->hideFromIndex(),
                    Text::make('Instagram', 'instagram_handler')->help( 'Instagram username without "@".' )->hideFromIndex(),
                    Text::make('Linkedin', 'linkedin_handler')->help( 'Linkedin username without "@".' )->hideFromIndex(),
                    Text::make('Youtube', 'youtube_handler')->help( 'Youtube username without "@".' )->hideFromIndex(),
                ]),
            ]),
            Tabs::make('Content', [
                Tab::make('English', [
                    Text::make('Name English', 'name_en')->rules('required')->hideFromIndex(),
                    Text::make('Address English', 'address_en'),
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
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\TabsLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\AccordionLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\TimelineLayout::class),
                ]),
                Tab::make('Dhivehi', [
                    ThaanaText::make('Name Dhivehi', 'name_dh')->rules('required')->hideFromIndex(),
                    ThaanaText::make('Address Dhivehi', 'address_dh')->hideFromIndex(),
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
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\TabsLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\AccordionLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\TimelineLayoutDh::class),
                ]),
            ]),
            BelongsToMany::make('WDC Term', 'wdc_terms')
            ->fields(function ($request) {
                return [
                    Select::make('Level', 'level')->options([
                        '1' => 'Level One',
                        '2' => 'Level Two',
                        '3' => 'Level Three',
                    ])->help(
                        'Select the level of this member.'
                    )->rules('required'),
                    Text::make('Position English', 'position_en'),
                    ThaanaText::make('Position Dhivehi', 'position_dh'),
                    Date::make('Term Start Date', 'term_start_date')->resolveUsing(function ($value) {
                        return $value;
                    }),
                    Date::make('Term End Date', 'term_end_date')->resolveUsing(function ($value) {
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
