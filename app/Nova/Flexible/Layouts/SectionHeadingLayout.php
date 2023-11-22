<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Hashtechnologies\TinyMce\TinyMce;

class SectionHeadingLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'sectionheadinglayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Section Heading Layout';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Section Heading', 'title')->rules('required'),
            Text::make('Url', 'url')->withMeta(['extraAttributes' => [
                'placeholder' => 'Int link: (page-name). Ext Link: (https://www.website.com/)']
            ]),
            Boolean::make('External Link?', 'external_link'),
            Boolean::make('Open in new window?', 'target'),
            Select::make('Text Align', 'text_align')->options([
                'text-left' => 'Left',
                'text-right' => 'Right',
                'text-center' => 'Center',
            ])->help(
                'Select the size of this block.'
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