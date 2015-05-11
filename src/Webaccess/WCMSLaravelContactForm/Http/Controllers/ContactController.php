<?php

namespace Webaccess\WCMSLaravelContactForm\Http\Controllers;

use Webaccess\WCMSLaravel\Http\Controllers\Front\FrontController;

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
            \Mail::send('modules.contact-form.emails.contact-form', $aParams, function($message)
            {
                $recipientEmail = config('vendor.w-cms-laravel-contact-form.contact-form-recipient-email');
                $recipientName = config('vendor.w-cms-laravel-contact-form.contact-form-recipient-name');
                $subject = config('vendor.w-cms-laravel-contact-form.contact-form-subject');

                $message->to($recipientEmail, $recipientName)->subject($subject);
            });

            $response = [
                'success' => true,
                'message' => trans('w-cms-laravel-contact-form::contact-form.mail_send_with_success')
            ];
        } catch(\Exception $e) {
            $response = [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }

        return $response;
    }
}
