<?php

namespace App\Nova\Flexible\Layouts\Widgets;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class ImageWidget extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'imagewidget';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Image Widget';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Title', 'title'),
            MediaHubField::make('Block Image', 'image')->defaultCollection('general'),
            Text::make('Url', 'url')->withMeta(['extraAttributes' => [
                'placeholder' => 'Int link: (page-slug). Ext Link: (https://www.website.com/)']
            ]),
            Boolean::make('External Link?', 'external_link'),
            Boolean::make('Open in a new tab?', 'target'),
        ];
    }

}

