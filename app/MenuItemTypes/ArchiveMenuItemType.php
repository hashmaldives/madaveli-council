<?php

namespace App\MenuItemTypes;

use App\Models\Page;
use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Outl1ne\MenuBuilder\MenuItemTypes\BaseMenuItemType;

class ArchiveMenuItemType extends BaseMenuItemType
{
    /**
     * Get the menu link identifier that can be used to tell different custom
     * links apart (ie 'page' or 'product').
     *
     * @return string
     **/
    public static function getIdentifier(): string {
        // Example usecase
        return 'archive';
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
        return 'Archive Link';
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
        //return Page::all()->pluck('name', 'id')->toArray();
        return [
            'downloads' => 'Downloads',
            'news' => 'News',
            'galleries' => 'Galleries',
            'events' => 'Events',
            'projects' => 'Projects',
            'job-opportunities' => 'Job Opportunities',
            'serviceproviders' => 'Businesses / Service Providers',
        ];
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
        if(!empty($value)) {
            return 'Archive: ' . $value;
        } else {
            return 'Archive: (not found. This archive page is not available anymore.)';
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
        if(!empty($value)) {
            return $value;
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