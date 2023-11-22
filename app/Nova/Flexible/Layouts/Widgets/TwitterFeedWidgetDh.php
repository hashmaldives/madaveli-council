<?php

namespace App\Nova\Flexible\Layouts\Widgets;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class TwitterFeedWidgetDh extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'twitterfeedlayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Twitter Feed Widget';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            ThaanaText::make('Title', 'title'),
            Text::make('Twitter Handler', 'twitter_handler'),
        ];
    }

}
