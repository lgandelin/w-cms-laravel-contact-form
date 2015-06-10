<?php

namespace Webaccess\WCMSLaravelContactForm;

use Webaccess\WCMSLaravel\Helpers\WCMSLaravelModuleServiceProvider;
use Webaccess\WCMSLaravelContactForm\BlockTypes\ContactFormBlockType;

class WCMSLaravelContactFormServiceProvider extends WCMSLaravelModuleServiceProvider {

    public function boot()
    {
        include(__DIR__ . '/Http/routes.php');
        parent::initModule('contact-form', __DIR__ . '/../../');
        $this->app->make('block_type')->addBlockType(new ContactFormBlockType());
    }
}
