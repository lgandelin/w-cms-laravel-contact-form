<?php

namespace Webaccess\WCMSLaravelContactForm;

use Webaccess\WCMSCore\Fixtures\BlockTypesFixtures;
use Webaccess\WCMSLaravel\Helpers\WCMSLaravelModuleServiceProvider;

class WCMSLaravelContactFormServiceProvider extends WCMSLaravelModuleServiceProvider {

    public function boot()
    {
        include(__DIR__ . '/Http/routes.php');
        parent::initModule('contact-form', __DIR__ . '/../../');
    }

    public function install()
    {
        BlockTypesFixtures::addBlockType('contact_form', trans('w-cms-laravel-contact-form-back::contact-form.contact_form_block'), null, 'modules.contact-form.blocks.contact-form', null);
    }
}
