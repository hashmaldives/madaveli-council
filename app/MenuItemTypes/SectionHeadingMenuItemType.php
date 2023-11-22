<?php

namespace App\MenuItemTypes;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Boolean;
use Outl1ne\MenuBuilder\MenuItemTypes\BaseMenuItemType;

class SectionHeadingMenuItemType extends BaseMenuItemType
{
    public static function getIdentifier(): string
    {
        return 'section_heading';
    }

    public static function getName(): string
    {
        return 'Section Heading Item';
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
        ];
    }
}