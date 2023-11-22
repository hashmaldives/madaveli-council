<?php

namespace App\MenuItemTypes;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Textarea;
use Outl1ne\MenuBuilder\MenuItemTypes\BaseMenuItemType;

class DescriptionMenuItemType extends BaseMenuItemType
{
    public static function getIdentifier(): string
    {
        return 'description_item';
    }

    public static function getName(): string
    {
        return 'Description Item';
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
            Textarea::make('Description En', 'description_en'),
            Textarea::make('Description Dh', 'description_dh'),
        ];
    }
}