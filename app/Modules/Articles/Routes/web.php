<?php
Route::localizedGroup(function () {

    Route::group(['prefix' => config('cms.uri')], function() {
        Route::resource('articles', 'Admin\IndexController');
        Route::put('articles/priority/{id}/{direction}', 'Admin\IndexController@priority')->name('admin.articles.priority');
        Route::delete('articles/delete-upload/{id}/{field}', 'Admin\IndexController@deleteUpload')->name('admin.articles.delete-upload');
        Route::get('/list/articles', 'Admin\IndexController@list');
    });

    Route::group(['prefix' => '/articles'], function () {
        Route::get('/{id}', 'IndexController@customShow')->middleware('page')->name('articles.customShow');
    });

});