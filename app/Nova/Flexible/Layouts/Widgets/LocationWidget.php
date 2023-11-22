<?php

namespace App\Nova\Flexible\Layouts\Widgets;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Mauricewijnia\NovaMapsAddress\MapsAddress;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class LocationWidget extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'locationwidget';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Location Widget';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Title', 'title'),
            Select::make('Map', 'map_id')->options(\App\Models\Map::pluck('title_en', 'id'))
                ->nullable()
                ->hideFromIndex()
                ->help('If no map is shown from the list, go to Administrative/Maps and create a Map.'),
        ];
    }

}
