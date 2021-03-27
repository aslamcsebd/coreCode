<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('viewCode/{id}', 'CodeController@viewCode')->name('viewCode');
Route::get('viewCodeAll', 'CodeController@viewCodeAll')->name('viewCodeAll');

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



