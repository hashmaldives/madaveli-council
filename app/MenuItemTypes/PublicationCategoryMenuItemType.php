<?php

namespace App\MenuItemTypes;

use Laravel\Nova\Fields\Text;
use App\Models\PublicationCategory;
use HashTechnologies\ThaanaText\ThaanaText;
use Outl1ne\MenuBuilder\MenuItemTypes\BaseMenuItemType;

class PublicationCategoryMenuItemType extends BaseMenuItemType
{
    /**
     * Get the menu link identifier that can be used to tell different custom
     * links apart (ie 'page' or 'product').
     *
     * @return string
     **/
    public static function getIdentifier(): string {
        // Example usecase
        return 'publicationcategory';
        //return '';
    }

    public static function getType(): string
    {
        return 'select';
    }

    /**
     * Get menu link name shown in  a dropdown in CMS when selecting link type
     * ie ('Product Link').
     *
     * @return string
     **/
    public static function getName(): string {
        // Example usecase
        return 'Publication Category Archive';
        //return '';
    }

    /**
     * Get list of options shown in a select dropdown.
     *
     * Should be a map of [key => value, ...], where key is a unique identifier
     * and value is the displayed string.
     *
     * @return array
     **/
    public static function getOptions($locale): array {
        // Example usecase
        return PublicationCategory::all()->pluck('title_en', 'id')->toArray();
        //return [];
    }

    /**
     * Get the subtitle value shown in CMS menu items list.
     *
     * @param $value
     * @param $data The data from item fields.
     * @param $locale
     * @return string
     **/
    public static function getDisplayValue($value, ?array $data, $locale) {
        // Example usecase
        if(!empty(PublicationCategory::find($value)->title_en)) {
            return 'Publication Category: ' . PublicationCategory::find($value)->title_en;
        } else {
            return 'Publication Category: (not found. Please check if you have selected a value or if this item exists.)';
        }
    }

    /**
     * Get the value of the link visible to the front-end.
     *
     * Can be anything. It is up to you how you will handle parsing it.
     *
     * This will only be called when using the nova_get_menu()
     * and nova_get_menus() helpers or when you call formatForAPI()
     * on the Menu model.
     *
     * @param $value The key from options list that was selected.
     * @param $data The data from item fields.
     * @param $locale
     * @return any
     */
    public static function getValue($value, ?array $data, $locale)
    {
        if(!empty(PublicationCategory::find($value)->slug)) {
            return PublicationCategory::find($value)->slug;
        } else {
            return '';
        }
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @return array An array of fields.
     */
    public static function getFields(): array
    {
        return [
            Text::make('Label En', 'label_en'),
            ThaanaText::make('Label Dh', 'label_dh'),
        ];
    }

    /**
     * Get the rules for the resource.
     *
     * @return array A key-value map of attributes and rules.
     */
    public static function getRules(): array
    {
        return [
            
        ];
    }

    /**
     * Get data of the link visible to the front-end.
     *
     * Can be anything. It is up to you how you will handle parsing it.
     *
     * This will only be called when using the nova_get_menu()
     * and nova_get_menus() helpers or when you call formatForAPI()
     * on the Menu model.
     *
     * @param null $data Field values
     * @return any
     */
    public static function getData($data = null)
    {
        return $data;
    }
}