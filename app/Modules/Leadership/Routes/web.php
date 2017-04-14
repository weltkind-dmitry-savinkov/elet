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
    Route::resource('/leadership', 'Admin\IndexController');
    Route::delete(
        'leadership/delete-upload/{id}/{field}',
        'Admin\IndexController@deleteUpload'
    )->name('admin.partners.delete-upload');
});

Route::group(['prefix' => 'leaderships'], function () {
    Route::get('/', 'IndexController@index')->name('leaderships.index');
    Route::get('/{id}', 'IndexController@customShow')->name('leaderships.customShow')->middleware('page');
});
