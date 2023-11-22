<?php

return [
    /*
    |------------------|
    | Required options |
    |------------------|
    */


    /*
    |--------------------------------------------------------------------------
    | Table names
    |--------------------------------------------------------------------------
    */

    'menus_table_name' => 'nova_menu_menus',
    'menu_items_table_name' => 'nova_menu_menu_items',


    /*
    |--------------------------------------------------------------------------
    | Locales
    |--------------------------------------------------------------------------
    |
    | Set all the available locales as either [key => name] pairs, a closure
    | or a callable (ie 'locales' => 'nova_get_locales').
    |
    */

    'locales' => ['en_US' => 'English'],


    /*
    |--------------------------------------------------------------------------
    | Menus
    |--------------------------------------------------------------------------
    |
    | Set all the possible menus in a keyed array of arrays with the options
    | 'name' and optionally 'menu_item_types' and unique.
    /  Unique is true by default
    |
    | For example: ['header' => ['name' => 'Header', 'unique' => true, 'menu_item_types' => []]]
    |
    */

    'menus' => [
        'primary_menu' => [
            'name' => 'Primary Menu',
            'unique' => true,
            'max_depth' => 3,
            'menu_item_types' => [
                \App\MenuItemTypes\RegularMenuItemType::class,
                \App\MenuItemTypes\InlineDividerMenuItemType::class,
                \App\MenuItemTypes\ImageMenuItemType::class,
                //\App\MenuItemTypes\DescriptionMenuItemType::class,
                \App\MenuItemTypes\ColumnDividerMenuItemType::class,
                \App\MenuItemTypes\SectionHeadingMenuItemType::class,
                \App\MenuItemTypes\PageMenuItemType::class,
                \App\MenuItemTypes\ArchiveMenuItemType::class,
                \App\MenuItemTypes\PublicationCategoryMenuItemType::class,
                \App\MenuItemTypes\IconMenuItemType::class,
                //\App\MenuItemTypes\MultiLangMenuItemType::class,
            ]
        ],
        // 'top_menu' => [
        //     'name' => 'Top Menu',
        //     'unique' => true,
        //     'max_depth' => 2,
        //     'menu_item_types' => [
        //         \App\MenuItemTypes\MultiLangMenuSimpleItemType::class,
        //         \App\MenuItemTypes\PageMenuItemType::class,
        //     ]
        // ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu item types
    |--------------------------------------------------------------------------
    |
    | Set all the available menu item types as an array.
    |
    */

    'menu_item_types' => [
        // \Outl1ne\MenuBuilder\MenuItemTypes\MenuItemTextType::class,
        // \Outl1ne\MenuBuilder\MenuItemTypes\MenuItemStaticURLType::class,
    ],

    /*
    |--------------------------------|
    | Optional configuration options |
    |--------------------------------|
    */
    'show_duplicate' => true,

    'collapsed_as_default' => true,

    /*
    |--------------------------------------------------------------------------
    | Resource
    |--------------------------------------------------------------------------
    |
    | Optionally override the original Menu resource.
    |
    */

    'resource' => Outl1ne\MenuBuilder\Nova\Resources\MenuResource::class,


    /*
    |--------------------------------------------------------------------------
    | Menu Model
    |--------------------------------------------------------------------------
    |
    | Optionally override the original Menu model.
    |
    */

    'menu_model' => Outl1ne\MenuBuilder\Models\Menu::class,


    /*
    |--------------------------------------------------------------------------
    | MenuItem Model
    |--------------------------------------------------------------------------
    |
    | Optionally override the original Menu Item model.
    |
    */

    'menu_item_model' => Outl1ne\MenuBuilder\Models\MenuItem::class,


    /*
    |--------------------------------------------------------------------------
    | Auto-load migrations
    |--------------------------------------------------------------------------
    |
    | Allow auto-loading of migrations (without the need to publish them)
    |
    */

    'auto_load_migrations' => true,


];
