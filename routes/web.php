<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localize']], function()
{
    Route::get('/', function () { return View::make('home'); });
    Route::get(LaravelLocalization::transRoute('routes.features'), function () { return view('features'); });
    Route::get(LaravelLocalization::transRoute('routes.pricing'), function () { return view('pricing'); });
    Route::get(LaravelLocalization::transRoute('routes.contact'), function () { return view('contact'); });
    Route::post('/contact/send', 'Controller@contactSend');
    Route::get(LaravelLocalization::transRoute('routes.terms_and_conditions'), function () { return view('terms'); });
    Route::get(LaravelLocalization::transRoute('routes.privacy_policy'), function () { return view('privacy-policy'); });
});