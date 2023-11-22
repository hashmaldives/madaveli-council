<?php

namespace App\Nova\Flexible\Layouts\Forms\Fields;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Hashtechnologies\TinyMce\TinyMce;
use HashTechnologies\ThaanaText\ThaanaText;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class InfoText extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'infotext';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Info Text';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Label English', 'label_en')->rules('required'),
            ThaanaText::make('Label Dhivehi', 'label_dh')->rules('required'),
            TinyMce::make('Content English','content_en')->rules('required'),
            TinyMce::make('Content Dhivehi','content_dh')->rules('required'),
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