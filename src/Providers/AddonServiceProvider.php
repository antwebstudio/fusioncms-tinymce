<?php

namespace Addons\TinyMceFieldtype\Providers;

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

        if (!File::exists(public_path("addons/{$addonName}"))) {
            // Create symlink
            File::link(
                base_path("addons/{$addonName}/public"),
                public_path("addons/{$addonName}")
            );
        }
    }
}