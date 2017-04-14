<?php

Route::localizedGroup(function () {
    Route::group(['prefix' => config('cms.uri')], function() {
        Route::resource('slider', 'Admin\IndexController');

        Route::put('slider/priority/{id}/{direction}', 'Admin\IndexController@priority')->name('admin.slider.priority');
        Route::delete('slider/delete-upload/{id}/{field}', 'Admin\IndexController@deleteUpload')->name('admin.slider.delete-upload');

    });
});