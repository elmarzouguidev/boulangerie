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
Route::get('/patisseries/{slug}',['uses'=>'SiteController@patisserieShop','as'=>'patisserie.shop'])
      ->where('slug', '[A-Za-z]+');

Route::get('/espace-pro',['uses'=>'SiteController@espacePro','as'=>'espacePro']);

Route::get('/transformation-digitale',['uses'=>'SiteController@transDigital','as'=>'transdigital']);      
//Route::get('/boutique',['uses'=>'SiteController@shop','as'=>'shop']);
Route::get('fnbp',['uses'=>'SiteController@fnbp','as'=>'fnbp']);

/***/
Route::get('blog',['uses'=>'SiteController@blog','as'=>'blog']);
Route::get('blog/{slug}',['uses'=>'SiteController@blogSingle','as'=>'blog.single']);

Route::get('/contact',['uses'=>'SiteController@contact','as'=>'contact']);

Route::group(['prefix' => 'theadmin'], function () {
    Voyager::routes();
});
