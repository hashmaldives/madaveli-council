<?php

namespace App\Nova\Flexible\Layouts\Widgets;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Select;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Hashtechnologies\TinyMce\TinyMce;

class RichTextWidgetDh extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'richtextwidget';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Rich Text Widget';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            ThaanaText::make('Title', 'title'),
            TinyMce::make('Content','content')->rules('required'),
        ];
    }

}
