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

Route::get('/', function () { return view('home'); });
Route::get('/pricing', function () { return view('pricing'); });
Route::get('/contact', function () { return view('contact'); });
Route::post('/contact/send', 'Controller@contactSend');
Route::get('/terms-and-conditions', function () { return view('terms'); });
