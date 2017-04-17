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
    Route::resource('/branches', 'Admin\IndexController');
});

Route::group(['prefix' => '/branches'], function () {
    Route::get('/', 'IndexController@index')->name('branches.index');
});