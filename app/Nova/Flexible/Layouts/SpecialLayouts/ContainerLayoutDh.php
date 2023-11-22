<?php

namespace App\Nova\Flexible\Layouts\SpecialLayouts;

use Laravel\Nova\Fields\Color;
use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Whitecube\NovaFlexibleContent\Flexible;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class ContainerLayoutDh extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'containerlayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Container Layout';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            
            Text::make('Title', 'title')->help('Admin Field. Will not be displayed on website.'),
            Select::make('Columns', 'column')->options([
                '2' => '2 Column',
                '3' => '3 Column',
                '4' => '4 Column',
                '5' => '5 Column',
                '6' => '6 Column',
                '7' => '7 Column',
                '8' => '8 Column',
                '9' => '9 Column',
                '10' => '10 Column',
                '11' => '11 Column',
                '12' => '12 Column',
            ])->help(
                'Select the size of this block.'
            )->rules('required'),
            Select::make('Align Content', 'align_content')->options([
                'align-items-start' => 'Top',
                'align-items-center' => 'Center',
                'align-items-end' => 'Bottom',
            ])->help(
                'Select the size of this block.'
            )->rules('required'),
            Flexible::make('Section Elements', 'section_elements')->button('Add Block')->stacked()
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
                ->addLayout(\App\Nova\Flexible\Layouts\TwitterFeedLayout::class)
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
        ];
    }

}
