<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Marshmallow\NovaFontAwesome\NovaFontAwesome;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class ButtonLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'buttonlayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Button';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            
            Text::make('Title', 'title')->rules('required'),
            Text::make('Url', 'url')->withMeta(['extraAttributes' => [
                'placeholder' => 'Int link: (page-slug). Ext Link: (https://www.website.com/)']
            ])->rules('required'),
            Boolean::make('External Link?', 'external_link'),
            NovaFontAwesome::make('Icon', 'icon'),
            Boolean::make('Open in a new tab?', 'target'),
            Select::make('Size', 'size')->options([
                'medium' => 'Medium',
                'small' => 'Small',
                'full' => 'Full',
                'big' => 'Big',
            ])->help(
                'Select the Size of this button.'
            )->rules('required'),
            Select::make('Desin', 'design')->options([
                'primary' => 'Primary',
                'dark' => 'Dark',
                'light' => 'Light',
                'outline primary' => 'Outline Primary',
                'outline dark' => 'Outline Dark',
                'outline light' => 'Outline Light',
            ])->help(
                'Select the design of this button.'
            )->rules('required'),
            Select::make('Align', 'align')->options([
                'justify-content-start' => 'Left',
                'justify-content-end' => 'Right',
                'justify-content-center' => 'Center',
            ]),
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
