<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => config('cms.uri')], function () {
    Route::resource('/credit', 'Admin\IndexController');
    Route::delete(
        'credit/delete-upload/{id}/{fied}',
        'Admin\IndexController@deleteUpload'
    )->name('admin.credit.delete-upload');
});

Route::group(['prefix' => 'credit'], function () {
    Route::get('show/{id}', 'IndexController@show')->name('credit.show');
});