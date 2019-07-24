<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function(){
    Route::post('login', 'Api\UserController@login');
    Route::post('register', 'Api\UserController@register');
    
    Route::group(['middleware' => 'auth:api'], function(){
        Route::post('getUser', 'Api\UserController@getUser');
        Route::post('allUser', 'Api\UserController@allUser');
    });
});