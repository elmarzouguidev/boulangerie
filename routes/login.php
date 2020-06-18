<?php

/**
 * @Author : Elmarzougui Abdelghafour
 * @facebook : https://facebook.com/devscript
 * @linkedIn :https://www.linkedin.com/in/devscript/
 * @twitter  :https://twitter.com/devscriptt
 */

use Illuminate\Support\Facades\Route;

/*** Account Login */

Route::group(['prefix' => env('ACCOUNT_DASH_PREFIX')], function () {

    Route::get('/login', ['uses' => 'UserLoginController@showLoginForm', 'as' => 'user.login']);
});

/*** End Account Login */


/*** Admin Login */

Route::group(['prefix' => env('ADMIN_DASH_PREFIX')], function () {

    Route::get('/login', ['uses' => 'AdminLoginController@showLoginForm', 'as' => 'admind.login']);
    Route::post('/login', ['uses' => 'AdminLoginController@login', 'as' => 'admin.login']);

});

/*** End Admin Login */
