<?php

namespace App\Nova\Flexible\Layouts\SpecialLayouts;

use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Select;
use Hashtechnologies\TinyMce\TinyMce;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

class TimelineItemLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'timelineitemlayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Timeline Item';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Date::make('Date', 'date')->resolveUsing(function ($value) {
                return $value;
            }),
            Text::make('Title', 'title')->rules('required'),
            TinyMce::make('Content','content')->rules('required'),
        ];
    }

}
