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

Route::get('franquicias', function (){
	return View::make('franquicias');
});

Route::post('franquicias', function()
{
	Mail::send('emails.franquicia', [], function($message){
		$message->to('maria@reyesgroup.com.mx')->subject('Reyes Group, interesado en franquicia.');
	});
});

Route::get('aviso-de-privacidad', function (){
	return View::make('aviso');
});

Route::post('/sendmail', function()
{
	Mail::send('emails.contacto', [], function($message){
		$message->to('maria@reyesgroup.com.mx')->subject('Reyes Group, mail de contacto.');
	});
});