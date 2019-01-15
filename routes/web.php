<?php

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

//前台接口
Route::group(['namespace' => 'Api', 'prefix' => '/api'], function (){
    Route::post('/createOrUpdateUser', 'UserController@addOrUpdate');
    Route::post('/contactUs', 'UserController@contactUs');


    Route::get('/rollingImgsList', 'RollingImgController@index');


    Route::get('/categories', 'ArticleController@categories');

    Route::get('/artileList/{category_id}', 'ArticleController@index');
    Route::get('/artileDetail/{id}', 'ArticleController@detail');

    Route::get('/newsList', 'NewsController@index');
    Route::get('/newsDetail/{id}', 'NewsController@detail');

    Route::get('/imgList', 'ImgController@index');
    Route::get('/poster', 'ImgController@poster');
    Route::get('/caonimadeshabi', 'CaonimaController@index');


});