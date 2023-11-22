<?php

namespace App\Nova\Flexible\Layouts\ResourceLayouts;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Whitecube\NovaFlexibleContent\Flexible;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class EventsResourceLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'eventsresourcelayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Event Items';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Select::make('Number of items to display', 'number_of_items')->options([
                '2' => '2 Items',
                '3' => '3 Items',
                '4' => '4 Items',
                '5' => '5 Items',
                '6' => '6 Items',
                '7' => '7 Items',
                '8' => '8 Items',
                '9' => '9 Items',
                '10' => '10 Items',
                '11' => '11 Items',
                '12' => '12 Items',
            ])->rules('required')->help(
                'Select the number of items to display.'
            ),
            Select::make('Items Per Row', 'items_per_row')->options([
                '12' => '1 Item',
                '6' => '2 Items',
                '4' => '3 Items',
                '3' => '4 Items',
            ])->rules('required')->help(
                'Select the number of items to be displayed per row.'
            ),
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
            ])->rules('required')->help(
                'Select the size of this block.'
            ),
        ];
    }

}
