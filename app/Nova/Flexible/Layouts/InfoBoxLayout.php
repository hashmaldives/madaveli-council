<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Select;
use Marshmallow\NovaFontAwesome\NovaFontAwesome;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Hashtechnologies\TinyMce\TinyMce;

class InfoBoxLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'infoboxlayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Info Box Block';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Title', 'title'),
            NovaFontAwesome::make('Icon', 'icon')->rules('required'),
            TinyMce::make('Content','content')->rules('required'),
            Select::make('Type', 'type')->options([
                'primary' => 'Primary (Theme Color)',
                'dark' => 'Dark Grey',
                'light' => 'Light (Theme Light)',
                'grey' => 'Light Grey',
                'success' => 'Success (Light Green)',
                'danger' => 'Danger (Light Red)',
                'warning' => 'Warning (Light Orange)',
                'info' => 'Info (Mix light blue and green)',
            ])->help(
                'Select the type of this block.'
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
                'Select the size of this block.'
            )->rules('required')
        ];
    }

}
