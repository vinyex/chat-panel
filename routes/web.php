<?php
use App\Events\TestEvent;

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

Auth::routes();

Route::get('/semantic', function(){
    return view('layouts.app-user');
});
Route::get('/test-web', function(){
    broadcast(new TestEvent('this working yet?'));
    return view('welcome');
});
Route::get('/sendEmail/{user}', 'UserController@sendEmail');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'HomeController@index');
    Route::get('chat', 'ChatsController@index');
    Route::get('messages', 'ChatsController@fetchMessages');
    Route::post('messages', 'ChatsController@sendMessage');

    Route::get('/profile','UserController@index');
    Route::post('/profile/update/{id}','UserController@update');
});