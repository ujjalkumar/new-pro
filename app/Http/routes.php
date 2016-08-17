<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('tcs', function () {
    return view('action.tcs');
})->name('TCS');

Route::get('cts', function () {
    return view('action.cts');
})->name('CTS');

Route::get('tier5', function () {
    return view('action.Tier5');
})->name('Tier5');