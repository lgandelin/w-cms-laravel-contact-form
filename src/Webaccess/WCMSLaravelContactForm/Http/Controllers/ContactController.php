<?php

namespace Webaccess\WCMSLaravelContactForm\Http\Controllers;

use Webaccess\WCMSLaravel\Http\Controllers\Front\FrontController;
use Webaccess\WCMSLaravel\Helpers\ShortcutHelper;

class ContactController extends FrontController
{
    public function contact()
    {
        $aParams = [
            'sender_name' => \Input::get('name'),
            'sender_email' => \Input::get('mail'),
            'sender_message' => \Input::get('message')
        ];

        try {
            \Mail::send('emails.contact-form', $aParams, function($message)
            {
                $recipientEmail = config('vendor.w-cms-laravel-contact-form.contact-form-recipient-email');
                $recipientName = config('vendor.w-cms-laravel-contact-form.contact-form-recipient-name');
                $subject = config   ('vendor.w-cms-laravel-contact-form.contact-form-subject');

                $message->to($recipientEmail, $recipientName)->subject($subject);
            });
        } catch(\Exception $e) {
            dd($e->getMessage());
        }
    }
} 