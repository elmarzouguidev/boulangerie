<?php


use Illuminate\Support\Facades\Route;

/*** Admin Login */

Route::group(['prefix' => env('ADMIN_DASH_PREFIX')], function () {

    Route::get('/login', ['uses' => 'LoginController@login', 'as' => 'admin.login']);
});

/*** End Admin Login */


/*** Account Login */

Route::group(['prefix' => env('ACCOUNT_DASH_PREFIX')], function () {

    Route::get('/login', ['uses' => 'LoginController@login', 'as' => 'user.login']);
});

/*** End Account Login */