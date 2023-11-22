<?php

namespace App\Nova\Flexible\Layouts\Forms\Fields;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Hashtechnologies\TinyMce\TinyMce;
use HashTechnologies\ThaanaText\ThaanaText;
use Marshmallow\NovaFontAwesome\NovaFontAwesome;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class Heading extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'heading';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Heading';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Heading English', 'heading_en')->rules('required'),
            ThaanaText::make('Heading Dhivehi', 'heading_dh')->rules('required'),
            Select::make('Heading Size', 'heading')->options([
                'H1' => 'H1',
                'H2' => 'H2',
                'H3' => 'H3',
                'H4' => 'H4',
                'H5' => 'H5',
                'H6' => 'H6',
            ])->help(
                'Select the size of this field.'
            )->rules('required'),
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
                'Select the size of this field.'
            )->rules('required')
        ];
    }

}