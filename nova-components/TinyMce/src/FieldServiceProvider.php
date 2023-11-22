<?php

namespace Hashtechnologies\TinyMce;

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
            Nova::script('tiny-mce', __DIR__.'/../dist/js/field.js');
            Nova::style('tiny-mce', __DIR__.'/../dist/css/field.css');
            // Nova::script('jkt', __DIR__.'/../dist/jtk.js');
        });

        $this->publishes([
            __DIR__ . '/../config/nova-tinymce-editor.php' => config_path('nova-tinymce-editor.php'),
        ], 'config');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        try {
            $this->mergeConfigFrom(__DIR__.'/../config/thaana-tinymce-field.php', 'thaana-tinymce-field');
        } catch (\Exception $exception){

        }
    }
}
