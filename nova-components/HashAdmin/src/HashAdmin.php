<?php

namespace Hashtechnologies\HashAdmin;

use Illuminate\Http\Request;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class HashAdmin extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('hash-admin', __DIR__.'/../dist/js/tool.js');
        Nova::style('hash-admin', __DIR__.'/../dist/css/tool.min.css');
        Nova::style('hash-admin', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css');
    }

    /**
     * Build the menu that renders the navigation links for the tool.
     *
     * @param  \Illuminate\Http\Request $request
     * @return mixed
     */
    public function menu(Request $request)
    {
        return MenuSection::make('Hash Admin')
            ->path('/hash-admin')
            ->icon('server');
    }
}
