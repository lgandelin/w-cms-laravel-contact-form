<?php

namespace Webaccess\WCMSLaravelContactForm;

use Webaccess\WCMSCore\Context;
use Webaccess\WCMSCore\DataStructure;
use Webaccess\WCMSCore\Interactors\BlockTypes\CreateBlockTypeInteractor;
use Webaccess\WCMSLaravel\Helpers\WCMSLaravelModuleServiceProvider;

class WCMSLaravelContactFormServiceProvider extends WCMSLaravelModuleServiceProvider {

    public function boot()
    {
        include(__DIR__ . '/Http/routes.php');
        parent::initModule('contact-form', __DIR__ . '/../../');
        self::createBlockType();
    }

    public function createBlockType()
    {
        if (!$blockType = Context::get('block_type_repository')->findByCode('contact_form')) {
            $blockTypeStructure = new DataStructure();
            $blockTypeStructure->code = 'contact_form';
            $blockTypeStructure->name = trans('w-cms-laravel-contact-form-back::contact-form.contact_form_block');
            $blockTypeStructure->entity = 'Webaccess\WCMSLaravelContactForm\Blocks\ContactFormBlock';
            $blockTypeStructure->front_view = 'modules.contact-form.blocks.contact-form';

            (new CreateBlockTypeInteractor())->run($blockTypeStructure);
        }
    }
}
