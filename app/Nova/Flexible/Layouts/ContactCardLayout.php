<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class ContactCardLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'contactcardlayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Contact Card';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Title', 'title')->rules('required'),
            Text::make('Address', 'address'),
            Text::make('Phone', 'phone'),
            Text::make('Hotline', 'hotline'),
            Text::make('Email', 'email'),
            Text::make('Fax', 'fax'),
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
            )->rules('required')
        ];
    }

}
