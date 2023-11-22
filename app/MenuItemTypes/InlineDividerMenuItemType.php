<?php

namespace App\MenuItemTypes;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Outl1ne\MenuBuilder\MenuItemTypes\BaseMenuItemType;

class InlineDividerMenuItemType extends BaseMenuItemType
{
    public static function getIdentifier(): string
    {
        return 'inline_divider';
    }

    public static function getName(): string
    {
        return 'Inline Divider';
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

        ];
    }
}