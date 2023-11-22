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

class ExperienceLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'experiencelayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Experience Item';
    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Company Name', 'company'),
            Text::make('Project / Event Name', 'project_event'),
            Text::make('Role', 'role'),
            Date::make('Start', 'startdate')->rules('required')->resolveUsing(function ($value) {
                return $value;
            }),
            Date::make('End', 'enddate')->rules('required')->resolveUsing(function ($value) {
                return $value;
            }),
            Textarea::make('Additional Details', 'details'),
        ];
    }

}
