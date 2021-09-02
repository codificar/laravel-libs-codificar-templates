<?php

use Codificar\Templates\Http\Controllers\EmailTemplateController;

//Email Template
Route::group(["prefix" => "/admin/libs/email_template", "before" => "hasPermission:".Permission::PARTNER, "middleware" => ["auth.admin"]], function (){
	Route::post('/update', array('as' => 'EmailTemplateUpdate', 'uses' => EmailTemplateController::class.'@update_template'));
	Route::get('/', array('as' => 'EmailTemplates', 'uses' => EmailTemplateController::class.'@index'));
	Route::get('/get/{id}', array('as' => 'EmailTemplate', 'uses' => EmailTemplateController::class.'@getEmail'));
	Route::get('/edit/{id}', array('as' => 'EmailTemplateEdit', 'uses' => EmailTemplateController::class.'@edit_template'));
	Route::get('/delete/{id}', array('as' => 'EmailTemplateDelete', 'uses' => EmailTemplateController::class.'@delete_template'));
	Route::post('/test', ['as' => 'EmailTemplateTest', 'uses' => EmailTemplateController::class.'@test']);
	Route::post('/api/test', ['as' => 'EmailTemplateTestApi', 'uses' => EmailTemplateController::class.'@testApi']);
	Route::post('/api/validate', ['as' => 'EmailTemplateValidateApi', 'uses' => EmailTemplateController::class.'@validate']);
	Route::any('/make_migration', ['as' => 'EmailTemplateMigration', 'uses' => EmailTemplateController::class.'@makeSeederDataAll']);
});

Route::get('/js/lang/email_template', function(){
    header('Content-Type: text/javascript');
    $template = require __DIR__ . '/../translations/'.config('app.locale').'/email_template.php';
    return ('window.lang.email_template = ' . json_encode($template) . ';');
    exit();
});