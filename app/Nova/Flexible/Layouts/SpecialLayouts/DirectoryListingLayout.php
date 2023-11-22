<?php

namespace App\Nova\Flexible\Layouts\SpecialLayouts;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class DirectoryListingLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'directorylistinglayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Directory Listing Card';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Name English', 'name_en'),
            ThaanaText::make('Name Dhivehi', 'name_dh'),
            Text::make('Position English', 'position_en'),
            ThaanaThaanaText::make('Position Dhivehi', 'position_dh'),
            MediaHubField::make('Profile Picture', 'image')->defaultCollection('general'),
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
            )
        ];
    }

}
