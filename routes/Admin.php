<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/login', ['uses' => 'AdminLoginController@showLoginForm', 'as' => 'login']);
Route::post('/login', ['uses' => 'AdminLoginController@login', 'as' => 'login']);


Route::group([
    'middleware' => [
        'auth:admin'
    ],
], function () {
    Route::get('/', ['uses' => 'DashController@index', 'as' => 'dash']);
});
