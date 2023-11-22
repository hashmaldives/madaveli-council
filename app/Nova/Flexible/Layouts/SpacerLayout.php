<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Select;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class SpacerLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'spacerlayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Spacer';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Select::make('Spacer Height in Pixels', 'height')->options([
                '10' => '10 px', '15' => '15 px', '20' => '20 px', '25' => '25 px', '30' => '30 px', '35' => '35 px', '40' => '40 px', '45' => '45 px', '50' => '50 px', '55' => '55 px', '60' => '60 px', '65' => '65 px', '70' => '70 px', '75' => '75 px', '80' => '80 px', '85' => '85 px', '90' => '90 px', '95' => '95 px', '100' => '100 px', '105' => '105 px', '110' => '110 px', '115' => '115 px', '120' => '120 px', '125' => '125 px', '130' => '130 px', '135' => '135 px', '140' => '140 px', '145' => '145 px', '150' => '150 px', '155' => '155 px', '160' => '160 px', '165' => '165 px', '170' => '170 px', '175' => '175 px', '180' => '180 px', '185' => '185 px', '190' => '190 px', '195' => '195 px', '200' => '200 px',
            ])->help('Optional'),
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