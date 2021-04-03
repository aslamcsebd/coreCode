<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('viewCode/{id}', 'CodeController@viewCode')->name('viewCode');
Route::get('viewAllCode', 'CodeController@viewAllCode')->name('viewAllCode');

// Leftside
Route::post('addItem', 'CodeController@addItem')->name('addItem');
Route::post('addCode', 'CodeController@addCode')->name('addCode');

//editCode
Route::post('editCode', 'CodeController@editCode')->name('editCode');

//softDelete
Route::get('softDelete/{id}', 'CodeController@softDelete')->name('softDelete');
Route::get('trashedCode', 'CodeController@trashedCode')->name('trashedCode');

Route::get('restore/{id}', 'CodeController@restore')->name('restore');
Route::get('forceDelete/{id}', 'CodeController@forceDelete')->name('forceDelete');

Route::get('/clear', function() {
   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');
   
   return "Cleared!";
});

