<?php

namespace Webaccess\WCMSLaravelContactForm;

use Illuminate\Support\ServiceProvider;

class WCMSLaravelContactFormServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include(__DIR__ . '/Http/routes.php');

        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'w-cms-laravel-contact-form');

        $this->publishes([
            __DIR__. '/../../config/config.php' => config_path('vendor/w-cms-laravel-contact-form.php')
        ], 'config');

        $this->publishes([
            __DIR__. '/../../resources/views/partials' => 'themes/' . env('W_CMS_THEME', 'w-cms-base-theme') . '/views/partials',
            __DIR__. '/../../resources/views/emails' => 'resources/views/emails'
        ], 'views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
