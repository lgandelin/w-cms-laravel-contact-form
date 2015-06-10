<?php

namespace Webaccess\WCMSLaravelContactForm\BlockTypes;

use CMS\Entities\Block;
use CMS\Entities\Blocks\ViewBlock;
use CMS\Structures\Blocks\ViewBlockStructure;
use Webaccess\WCMSLaravel\Models\Block as BlockModel;
use Webaccess\WCMSLaravel\Models\Blocks\ViewBlock as ViewBlockModel;

class ContactFormBlockType
{
    public function __construct() {
        $this->code = 'contact_form';
        $this->name = trans('w-cms-laravel-contact-form-back::contact-form.contact_form_block');
        $this->content_view = null;
        $this->template_view = null;
        $this->front_view = 'modules.contact-form.blocks.contact-form';
        $this->order = 8;
        $this->getEntityFromModelMethod = function(BlockModel $blockModel) {
            $block = new ViewBlock();
            if ($blockModel->blockable) {
                $block->setViewPath($blockModel->blockable->view_path);
            }

            return $block;
        };
        $this->getUpdateContentMethod = function(BlockModel $blockModel, Block $block) {
            $blockable = ($blockModel->blockable) ? $blockModel->blockable : new ViewBlockModel();
            $blockable->view_path = $block->getViewPath();
            $blockable->save();
            $blockable->block()->save($blockModel);
        };
        $this->getBlockStructureMethod = function() {
            return new ViewBlockStructure();
        };
        $this->getBlockStructureForUpdateMethod = function($arguments) {
            return new ViewBlockStructure([
                'view_path' => $this->front_view,
                'type' => $this->code
            ]);
        };
    }
} 