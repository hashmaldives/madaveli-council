<?php

namespace HashTechnologies\ThaanaTextarea;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('thaana-textarea', __DIR__.'/../dist/js/field.js');
            Nova::style('thaana-textarea', __DIR__.'/../dist/css/field.css');
            Nova::script('jquery', __DIR__.'/../dist/js/jquery.js');
            Nova::script('jkt', __DIR__.'/../dist/jtk.js');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
