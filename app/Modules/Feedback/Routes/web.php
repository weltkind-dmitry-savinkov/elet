<?php
Route::localizedGroup(function () {

Route::group(['prefix' => config('cms.uri')], function() {
    Route::resource('feedback', 'Admin\IndexController');
    Route::post('/email/save/feedback', 'Admin\IndexController@saveEmail')->name('feedback.admin.email.save');
});

    Route::post('feedback', 'IndexController@store')->name('feedback.store');
});