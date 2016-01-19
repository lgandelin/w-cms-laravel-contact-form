<?php

Route::post('/contact/', array('as' => 'contact_form_controller', 'uses' => 'Webaccess\WCMSLaravelContactForm\Http\Controllers\ContactController@contact'));
