<?php

namespace App\Nova\Flexible\Layouts\SpecialLayouts;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Whitecube\NovaFlexibleContent\Flexible;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Hashtechnologies\TinyMce\TinyMce;

class TabItemLayoutDh extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'tabitemlayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Tab Item';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            ThaanaText::make('Title', 'title'),
            Boolean::make('Tab Active?', 'tab_active'),
            Flexible::make('Content', 'content')->rules('required')->button('Add Block')->stacked()
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
                ->addLayout(\App\Nova\Flexible\Layouts\SectionHeadingLayoutDh::class)
                ->addLayout(\App\Nova\Flexible\Layouts\ImageLayout::class)
                ->addLayout(\App\Nova\Flexible\Layouts\ButtonLayoutDh::class)
                ->addLayout(\App\Nova\Flexible\Layouts\AttachmentButtonLayoutDh::class)
                ->addLayout(\App\Nova\Flexible\Layouts\YouTubeVideoLayoutDh::class)
                ->addLayout(\App\Nova\Flexible\Layouts\CardLayoutDh::class)
                ->addLayout(\App\Nova\Flexible\Layouts\UserCardDh::class)
                ->addLayout(\App\Nova\Flexible\Layouts\ListLayoutDh::class)
                ->addLayout(\App\Nova\Flexible\Layouts\GalleryLayout::class)
                ->addLayout(\App\Nova\Flexible\Layouts\StatItemLayoutDh::class)
                ->addLayout(\App\Nova\Flexible\Layouts\ResourceLayouts\NewsResourceLayout::class)
                ->addLayout(\App\Nova\Flexible\Layouts\ResourceLayouts\EventsResourceLayout::class)
                ->addLayout(\App\Nova\Flexible\Layouts\ResourceLayouts\GalleryResourceLayout::class)
                ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\TimelineLayoutDh::class),
        ];
    }

}
