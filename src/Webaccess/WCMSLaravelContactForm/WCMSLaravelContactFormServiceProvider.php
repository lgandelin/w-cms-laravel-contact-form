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

        $this->publishes([
            __DIR__. '/../../config/config.php' => config_path('vendor/w-cms-laravel-contact-form.php')
        ], 'config');

        $this->publishes([
            __DIR__. '/../../resources/lang' => 'resources/lang/modules/contact-form'
        ], 'langs');

        $this->publishes([
            __DIR__. '/../../resources/views/partials' => 'themes/' . env('W_CMS_THEME', 'w-cms-base-theme') . '/views/partials',
            __DIR__. '/../../resources/views/emails' => 'resources/views/modules/contact-form/emails'
        ], 'views');

        $this->loadTranslationsFrom(base_path() . '/resources/lang/modules/contact-form', 'w-cms-laravel-contact-form');
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
