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

/* Blog**/
Route::get('blog',['uses'=>'SiteController@blog','as'=>'blog']);
Route::get('blog/{slug}',['uses'=>'SiteController@blogSingle','as'=>'blog.single']);
/***/

/*** City */

Route::prefix('villes')->group(function () {

    Route::get('/' ,['uses'=>'CityController@index','as'=>'city']);
    Route::get('/{slug}',['uses'=>'CityController@single','as'=>'city.single']);
    Route::get('/boulangerie/{slug}',['uses'=>'CityController@boulangerie','as'=>'city.single.boulangerie']);
});


/***/


/***Boulangerie */

Route::prefix('boulangerie')->group(function () {
    Route::get('/' ,['uses'=>'BakeryController@index','as'=>'boulangerie']);
    Route::get('/{slug}',['uses'=>'BakeryController@single','as'=>'boulangerie.single']);
});

/******* */


Route::get('/contact',['uses'=>'SiteController@contact','as'=>'contact']);

// Route::group(['prefix' => 'theadmin'], function () {
//     Voyager::routes();
// });
