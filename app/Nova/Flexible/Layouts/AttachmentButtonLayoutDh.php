<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Marshmallow\NovaFontAwesome\NovaFontAwesome;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

class AttachmentButtonLayoutDh extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'attachmentbuttonlayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Attachment Button';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            
            ThaanaText::make('Title', 'title')->rules('required'),
            NovaFontAwesome::make('Icon', 'icon'),
            MediaHubField::make('Attachment', 'attachment')->defaultCollection('file_attachments'),
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
