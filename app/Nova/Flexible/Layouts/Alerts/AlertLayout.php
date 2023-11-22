<?php

namespace App\Nova\Flexible\Layouts\Alerts;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class AlertLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'alertlayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Alert Element';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Boolean::make('Active', 'alert_active'),
            Text::make('Tab Name English', 'name_en'),
            Select::make('Alert Type', 'alert_type')->options([
                'primary_alert' => 'Primary Alert',
                'secondary_alert' => 'Secondary Alert',
                'success_alert' => 'Success Alert',
                'danger_alert' => 'Danger Alert',
                'warning_alert' => 'Warning Alert',
                'info_alert' => 'Info Alert',
                'dark_alert' => 'Dark Alert',
            ])->help(
                'Select the size of this block.'
            )
        ];
    }

}
