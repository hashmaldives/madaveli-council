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

class SlideSectionLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'slidesectionlayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Slide Section';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            
            Text::make('Section Name', 'name'),
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
                ->addLayout(\App\Nova\Flexible\Layouts\SpacerLayout::class)
                ->addLayout(\App\Nova\Flexible\Layouts\ButtonLayout::class)
                ->addLayout(\App\Nova\Flexible\Layouts\AttachmentButtonLayout::class),
        ];
    }

}
