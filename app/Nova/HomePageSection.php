<?php

namespace App\Nova;

use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\FormData;
use Outl1ne\NovaColorField\Color;
use Eminiarts\Tabs\Traits\HasTabs;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;
use Outl1ne\NovaSortable\Traits\HasSortableRows;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

class HomePageSection extends Resource
{
    use HasSortableRows;
    use HasTabs;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\HomePageSection::class;

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
            Text::make('Section Name', 'name')->rules('required')->help('For admin use only. Will not appear on website'),
            Boolean::make('Active', 'active'),
            Boolean::make('This is a google maps section', 'maps')->hideFromIndex()->default(false),
            Select::make('Map', 'map_id')->options(\App\Models\Map::pluck('title_en', 'id'))
            ->hideFromIndex()
            ->hide()
            ->dependsOn(
                ['maps'], 
                function (Select $field, NovaRequest $request, FormData $formData) {
                    if ($formData->maps === true) {
                        $field->show(false)->rules(['required']);
                    }
                }
            )->help('If no map is shown from the list, go to Administrative/Maps and create a Map.'),
            Tabs::make('Section Settings', [
                Tab::make('Design & Appearance', [
                    Select::make('Section Height', 'section_height')->options([
                        '50' => '50 px', '100' => '100 px', '150' => '150 px', '200' => '200 px', '250' => '250 px', '300' => '300 px', '350' => '350 px', '400' => '400 px', '450' => '450 px', '500' => '500 px', '550' => '550 px', '600' => '600 px', '650' => '650 px', '700' => '700 px', '750' => '750 px', '800' => '800 px', '850' => '850 px', '900' => '900 px', '950' => '950 px', '1000' => '1000 px', '1050' => '1050 px', '1100' => '1100 px', '1150' => '1150 px', '1200' => '1200 px', '1250' => '1250 px', '1300' => '1300 px', '1350' => '1350 px', '1400' => '1400 px', '1450' => '1450 px', '1500' => '1500 px', '1550' => '1550 px', '1600' => '1600 px', '1650' => '1650 px', '1700' => '1700 px', '1750' => '1750 px', '1800' => '1800 px', '1850' => '1850 px', '1900' => '1900 px', '1950' => '1950 px', '2000' => '2000 px', '2050' => '2050 px',
                    ])->help('Optional')->nullable()->hideFromIndex(),
                    Select::make('Padding Top', 'padding_top')->options([
                        '10' => '10 px', '15' => '15 px', '20' => '20 px', '25' => '25 px', '30' => '30 px', '35' => '35 px', '40' => '40 px', '45' => '45 px', '50' => '50 px', '55' => '55 px', '60' => '60 px', '65' => '65 px', '70' => '70 px', '75' => '75 px', '80' => '80 px', '85' => '85 px', '90' => '90 px', '95' => '95 px', '100' => '100 px', '105' => '105 px', '110' => '110 px', '115' => '115 px', '120' => '120 px', '125' => '125 px', '130' => '130 px', '135' => '135 px', '140' => '140 px', '145' => '145 px', '150' => '150 px', '155' => '155 px', '160' => '160 px', '165' => '165 px', '170' => '170 px', '175' => '175 px', '180' => '180 px', '185' => '185 px', '190' => '190 px', '195' => '195 px', '200' => '200 px',
                    ])->help('Optional')->nullable()->hideFromIndex(),
                    Select::make('Padding Bottom', 'padding_bottom')->options([
                        '10' => '10 px', '15' => '15 px', '20' => '20 px', '25' => '25 px', '30' => '30 px', '35' => '35 px', '40' => '40 px', '45' => '45 px', '50' => '50 px', '55' => '55 px', '60' => '60 px', '65' => '65 px', '70' => '70 px', '75' => '75 px', '80' => '80 px', '85' => '85 px', '90' => '90 px', '95' => '95 px', '100' => '100 px', '105' => '105 px', '110' => '110 px', '115' => '115 px', '120' => '120 px', '125' => '125 px', '130' => '130 px', '135' => '135 px', '140' => '140 px', '145' => '145 px', '150' => '150 px', '155' => '155 px', '160' => '160 px', '165' => '165 px', '170' => '170 px', '175' => '175 px', '180' => '180 px', '185' => '185 px', '190' => '190 px', '195' => '195 px', '200' => '200 px',
                    ])->help('Optional')->nullable()->hideFromIndex(),
                    Boolean::make('Enable Parallax Scrolling', 'parallax')->hideFromIndex(),
                    Boolean::make('Enable Container', 'container')->hideFromIndex(),
                    MediaHubField::make('Background Image', 'background_image')->defaultCollection('backgrounds'),
                    Boolean::make('Enable Background Filter', 'bg_filter')->hideFromIndex(),
                    Select::make('Filter Visibility', 'filter_visibility')->options([
                        '1' => '0.1', '2' => '0.2', '3' => '0.3', '4' => '0.4', '5' => '0.5', '6' => '0.6', '7' => '0.7', '8' => '0.8', '9' => '0.9',
                    ])->help('Select the transparency level of the filter.')->nullable()->hideFromIndex(),
                    Color::make('Filter Background Color', 'filter_bg')->hideFromIndex()->sketch(),
                    Select::make('Section Text Color', 'text_color')->options([
                        'text_dark' => 'Dark',
                        'text_extra_dark' => 'Extra Dark',
                        'text_light' => 'Light',
                        'text_extra_light' => 'Extra Light',
                        'text_light_grey' => 'Light Grey',
                        'text_grey' => 'Grey',
                        'text_primary' => 'Primary',
                    ])->help(
                        'Select the text color of this block.'
                    )->rules('required'),
                    Color::make('Section Background Color', 'background_color')->sketch()->help(
                        'Only select a background color if this section does not have a background image.'
                    )->hideFromIndex(),
                ]),
                Tab::make('Elements English', [
                    Flexible::make('Section Elements English', 'section_elements_en')->button('Add Block')->stacked()
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
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\ContainerLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\SectionHeadingLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\InfoBoxLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\SpacerLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ImageLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ButtonLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\AttachmentButtonLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\YouTubeVideoLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\CardLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\UserCard::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ListLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\GalleryLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\StatItemLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\TwitterFeedLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ResourceLayouts\NewsResourceLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ResourceLayouts\EventsResourceLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ResourceLayouts\GalleryResourceLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ResourceLayouts\ProjectResourceLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\CouncilLayouts\IslandPopulationLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\CouncilLayouts\IslandPopulationPieChartLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\CouncilLayouts\CouncilResourceLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\CouncilLayouts\IslandInformationLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\TabsLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\AccordionLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\TimelineLayout::class),
                ]),
                Tab::make('Elements Dhivehi', [
                    Flexible::make('Section Elements Dhivehi', 'section_elements_dh')->button('Add Block')->stacked()
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
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\ContainerLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\SectionHeadingLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\InfoBoxLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\SpacerLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ImageLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ButtonLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\AttachmentButtonLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\YouTubeVideoLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\CardLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\UserCardDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ListLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\GalleryLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\StatItemLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\TwitterFeedLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ResourceLayouts\NewsResourceLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ResourceLayouts\EventsResourceLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ResourceLayouts\GalleryResourceLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\ResourceLayouts\ProjectResourceLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\CouncilLayouts\IslandPopulationLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\CouncilLayouts\IslandPopulationPieChartLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\CouncilLayouts\CouncilResourceLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\CouncilLayouts\IslandInformationLayout::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\TabsLayoutDh::class)
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\AccordionLayoutDh::class)
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
