<?php

namespace App\Nova\Flexible\Layouts\MemberDirectory;

use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Textarea;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class QualificationLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'qualificationlayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Trainings & Qualification Item';
    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Select::make('Qualification Type', 'type')->options([
                'Professional Certificate' => 'Professional Certificate',
                'Certificate I' => 'Certificate I',
                'Certificate II' => 'Certificate II',
                'Certificate III' => 'Certificate III',
                'Certificate IV' => 'Certificate IV',
                'Diploma (Level 5)' => 'Diploma (Level 5)',
                'Advanced Diploma (Level 6)' => 'Advanced Diploma (Level 6)',
                'Bachelors Degree (Level 7)' => 'Bachelors Degree (Level 7)',
                'Postgraduate Diploma (Level 8)' => 'Postgraduate Diploma (Level 8)',
                'Master’s Degree (Level 9)' => 'Master’s Degree (Level 9)',
                'Doctoral Degree (Level 10)' => 'Doctoral Degree (Level 10)',
            ])->help(
                'Select the type of the program..'
            )->rules('required'),
            Text::make('Institution', 'institution')->rules('required'),
            Text::make('Program Name', 'program_name')->rules('required'),
            Date::make('Start', 'startdate')->rules('required')->resolveUsing(function ($value) {
                return $value;
            }),
            Date::make('End', 'enddate')->rules('required')->resolveUsing(function ($value) {
                return $value;
            }),
        ];
    }

}
