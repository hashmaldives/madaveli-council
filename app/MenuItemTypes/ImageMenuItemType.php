<?php

namespace App\MenuItemTypes;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Textarea;
use Infinety\Filemanager\FilemanagerField;
use ClassicO\NovaMediaLibrary\MediaLibrary;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Outl1ne\MenuBuilder\MenuItemTypes\BaseMenuItemType;

class ImageMenuItemType extends BaseMenuItemType
{
    public static function getIdentifier(): string
    {
        return 'image_item';
    }

    public static function getName(): string
    {
        return 'Image Item';
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
            MediaHubField::make('Item Image', 'image')->defaultCollection('default')->rules('required'),
            Text::make('Label En', 'label_en'),
            ThaanaText::make('Label Dh', 'label_dh'),
            Text::make('Url', 'url')->withMeta(['extraAttributes' => [
                'placeholder' => 'Int link: (page-slug). Ext Link: (https://www.website.com/)']
            ]),
            Boolean::make('External Link?', 'external_link'),
            Boolean::make('Open in a new tab?', 'target'),
            Textarea::make('Description', 'description'),
        ];
    }
}