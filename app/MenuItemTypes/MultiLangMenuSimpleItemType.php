<?php

namespace App\MenuItemTypes;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Boolean;
use Outl1ne\MenuBuilder\MenuItemTypes\BaseMenuItemType;

class MultiLangMenuSimpleItemType extends BaseMenuItemType
{
    public static function getIdentifier(): string
    {
        return 'multilanguagesimpleitem';
    }

    public static function getName(): string
    {
        return 'Multi Language Item';
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
            Text::make('Label En', 'label_en'),
            ThaanaText::make('Label Dh', 'label_dh'),
            Text::make('Url', 'url')->withMeta(['extraAttributes' => [
                'placeholder' => 'Int link: (page-slug). Ext Link: (https://www.website.com/)']
            ]),
            Boolean::make('External Link?', 'external_link'),
            Boolean::make('Open in a new tab?', 'target'),
        ];
    }
}