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
    Route::resource('/order', 'Admin\IndexController');
    Route::post('/email/save/order', 'Admin\IndexController@saveEmail')->name('order.admin.email.save');
});

Route::group(['prefix' => 'order'], function() {
    Route::get('/', 'IndexController@index')->name('order.main')->middleware('page');
    Route::post('/store', 'IndexController@store')->name('order.store');
});
