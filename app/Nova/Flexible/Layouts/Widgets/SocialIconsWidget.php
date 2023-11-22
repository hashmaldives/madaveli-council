<?php

namespace App\Nova\Flexible\Layouts\Widgets;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Hashtechnologies\TinyMce\TinyMce;

class SocialIconsWidget extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'socialiconswidget';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Social Icons Widget';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Title', 'title'),
        ];
    }

}
