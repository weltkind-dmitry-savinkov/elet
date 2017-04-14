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
    Route::resource('/partners', 'Admin\IndexController');

    Route::delete(
        'partners/delete-upload/{id}/{field}',
        'Admin\IndexController@deleteUpload'
    )->name('admin.leadership.delete-upload');
});

Route::group(['prefix' => 'partners'], function() {
    Route::get('/', function() {
        dd('This is the Partners module index page. Build something great!');
    });
});
