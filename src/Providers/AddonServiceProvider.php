<?php

namespace Addons\TinyMceFieldtype\Providers;

use File;
use Illuminate\Support\ServiceProvider;

class AddonServiceProvider extends ServiceProvider
{
    /**
     * Register any addon services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Bootstrap any addon services.
     *
     * @return void
     */
    public function boot()
    {
        //
        \Fusion::asset('/addons/TinyMceFieldtype/js/app.js');
        fieldtypes()->register(\Addons\TinyMceFieldtype\Fieldtypes\TinyMceFieldtype::class);

        $addonName = 'TinyMceFieldtype';
        $basePath = dirname(dirname(dirname(__FILE__)));

        if (!File::isDirectory(public_path("addons"))) {
            File::makeDirectory(public_path("addons"));
        }
        if (!File::exists(public_path("addons/{$addonName}"))) {
            // Create symlink
            File::link(
                "{$basePath}/public",
                public_path("addons/{$addonName}")
            );
        }
        //
    }
}