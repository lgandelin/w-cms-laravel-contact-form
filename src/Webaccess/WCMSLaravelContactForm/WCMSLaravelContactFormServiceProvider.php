<?php

namespace Webaccess\WCMSLaravelContactForm;

use Webaccess\WCMSLaravel\Helpers\WCMSLaravelModuleServiceProvider;

class WCMSLaravelContactFormServiceProvider extends WCMSLaravelModuleServiceProvider {

    public function boot()
    {
        include(__DIR__ . '/Http/routes.php');
        parent::initModule('contact-form', __DIR__ . '/../../');
    }
}
