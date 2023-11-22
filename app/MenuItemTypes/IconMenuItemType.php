<?php

namespace App\MenuItemTypes;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Textarea;
use Marshmallow\NovaFontAwesome\NovaFontAwesome;
use Outl1ne\MenuBuilder\MenuItemTypes\BaseMenuItemType;

class IconMenuItemType extends BaseMenuItemType
{
    public static function getIdentifier(): string
    {
        return 'icon_item';
    }

    public static function getName(): string
    {
        return 'Icon Item';
    }

    public static function getOptions($locale): array
    {
        return [];
    }

    public static function getType(): string
    {
        return 'text';
    }

    public static function getFields(): array
    {
        return [
            NovaFontAwesome::make('Font Icon', 'icon')->addButtonText('Add Icon')->help('Select an icon.'),
            Text::make('Url', 'url')->withMeta(['extraAttributes' => [
                'placeholder' => 'Int link: (page-slug). Ext Link: (https://www.website.com/)']
            ]),
            Boolean::make('External Link?', 'external_link'),
            Boolean::make('Open in a new tab?', 'target'),
            Boolean::make('Activate Megamenu', 'activate_megamenu'),
        ];
    }
}