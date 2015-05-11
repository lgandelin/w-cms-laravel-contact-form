<?php

Route::post('/contact/', array('as' => 'contact_form_contact', 'uses' => 'Webaccess\WCMSLaravelContactForm\Http\Controllers\ContactController@contact'));
