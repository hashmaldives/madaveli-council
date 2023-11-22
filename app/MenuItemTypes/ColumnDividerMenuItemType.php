<?php

namespace App\MenuItemTypes;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Outl1ne\MenuBuilder\MenuItemTypes\BaseMenuItemType;

class ColumnDividerMenuItemType extends BaseMenuItemType
{
    public static function getIdentifier(): string
    {
        return 'column_divider';
    }

    public static function getName(): string
    {
        return 'Column Divider';
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