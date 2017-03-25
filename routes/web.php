<?php

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'my'], function () {
        Route::get('/', 'My\MyLinksController@index');
    });

    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/', 'My\MyLinksController@index');
    });
});

Auth::routes();
Route::get('activate/{token}', 'Auth\ActivationController@activate');

Route::post('shorten', 'ShortenLinkController@shorten')->middleware(['ajax', 'throttle:20,1']);

Route::get('/', 'HomeController@index');