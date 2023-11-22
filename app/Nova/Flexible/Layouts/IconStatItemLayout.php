<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Hashtechnologies\TinyMce\TinyMce;
use Marshmallow\NovaFontAwesome\NovaFontAwesome;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

class IconStatItemLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'iconstatitemlayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Stat Item';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Title English', 'title_en')->rules('required'),
            ThaanaText::make('Title Dhivehi', 'title_dh')->rules('required'),
            Text::make('Value', 'value')->rules('required'),
            Text::make('Url', 'url')->withMeta(['extraAttributes' => [
                'placeholder' => 'Int link: (page-slug). Ext Link: (https://www.website.com/)']
            ]),
            Boolean::make('External Link?', 'external_link'),
            Boolean::make('Open in a new tab?', 'target'),
            NovaFontAwesome::make('Font Icon', 'icon')->addButtonText('Add Icon')->help('Select an icon. If both font icon and image icon is selected, priority will be given to image icon.'),
            MediaHubField::make('Image Icon', 'image_icon')->defaultCollection('default')->help('Select an icon. Size: 100 x 100 px square png icon only. If both font icon and image icon is selected, priority will be given to image icon.'),
        ];
    }

}