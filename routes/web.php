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

Route::get('/',['uses'=>'SiteController@index','as'=>'home']);
Route::get('/patisseries',['uses'=>'SiteController@patisserie','as'=>'patisserie']);
Route::get('/boutique',['uses'=>'SiteController@shop','as'=>'shop']);
Route::get('fnbp',['uses'=>'SiteController@fnbp','as'=>'fnbp']);

Route::group(['prefix' => 'theadmin'], function () {
    Voyager::routes();
});
