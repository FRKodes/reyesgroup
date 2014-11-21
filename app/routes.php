<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::post('/sendmail', function()
{
	Mail::send('emails.contacto', [], function($message){
		$message->to('frkalderon@gmail.com')->subject('Reyes Group, mail de contacto.');
	});
});