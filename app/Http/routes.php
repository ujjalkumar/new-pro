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

<<<<<<< HEAD
Route::get('tcs', function () {
    return view('action.tcs');
})->name('TCS');

Route::get('cts', function () {
    return view('action.cts');
})->name('CTS');

Route::get('tier5', function () {
    return view('action.Tier5');
})->name('Tier5');
=======
Route::get('hello',function(){
	return 'hello';
});

Route::get('ujjal',function(){
	return 'ujjal';
});
Route::get('akash',function(){
	return 'akash';
});

>>>>>>> 753d5f9dbbf9c4485ee843d9ef676067cff1f46b
