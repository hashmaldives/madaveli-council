<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Hashtechnologies\TinyMce\TinyMce;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

class GalleryLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'gallerylayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Gallery Block';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Title', 'title'),
            TinyMce::make('Gallery Description','excerpt')->hideFromIndex(),
            MediaHubField::make('Images', 'images')->defaultCollection('gallery')->multiple()->rules('required')->resolveUsing(function ($value) {
                return $value;
            }),
            //Boolean::make('Enable Slider?', 'enable_slider'),
            Select::make('Images per row', 'image_columns')->options([
                '3' => '4 Images',
                '4' => '3 Images',
                '6' => '2 Images',
            ])->help(
                'Select how many images to be displyed per row.'
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
            ])->help(
                'Select the size of this block.'
            )->rules('required'),
        ];
    }

}
