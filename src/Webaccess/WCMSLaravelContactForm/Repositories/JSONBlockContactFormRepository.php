<?php

namespace Webaccess\WCMSLaravelContactForm\Repositories;

use Webaccess\WCMSLaravelContactForm\Entities\Blocks\ContactformBlock;

class JSONBLockContactFormRepository
{
    public function getBlock($blockData) {
        $block = new ContactFormBlock();

        return $block;
    }
} 