<?php

namespace App\Nova\Flexible\Layouts\SpecialLayouts;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Select;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Whitecube\NovaFlexibleContent\Flexible;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class TabsLayoutDh extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'tabslayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Tabs';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
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
            ),
            Flexible::make('Tabs', 'tabs')->button('Add Tab')->stacked()
                ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\TabItemLayoutDh::class)
        ];
    }

}
