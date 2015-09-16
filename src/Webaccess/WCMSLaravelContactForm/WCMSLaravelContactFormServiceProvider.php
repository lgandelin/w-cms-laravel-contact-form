<?php

namespace Webaccess\WCMSLaravelContactForm;

use Webaccess\WCMSCore\Fixtures\BlockTypesFixtures;
use Webaccess\WCMSLaravel\Helpers\WCMSLaravelModuleServiceProvider;

class WCMSLaravelContactFormServiceProvider extends WCMSLaravelModuleServiceProvider {

    public function boot()
    {
        include(__DIR__ . '/Http/routes.php');
        parent::initModule('contact-form', __DIR__ . '/../../');
        self::install();
    }

    public function install()
    {
        BlockTypesFixtures::addBlockType('contact_form', trans('w-cms-laravel-contact-form-back::contact-form.contact_form_block'), 'Webaccess\WCMSLaravelContactForm\Blocks\ContactFormBlock', null, null, 'modules.contact-form.blocks.contact-form', null);
    }
}
