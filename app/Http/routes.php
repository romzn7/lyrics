<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('lyrics/', [
    'as' => 'lyrics', 'uses' => 'lyrics\LyricsController@index'
]);

Route::get('lyrics/{id}', [
    'as' => 'lyrics', 'uses' => 'lyrics\LyricsController@show'
]);

Route::get('lyrics/{id}/edit', [
    'as' => 'lyrics', 'uses' => 'lyrics\LyricsController@edit'
]);

Route::post('lyrics/{id}/', [
    'as' => 'lyrics', 'uses' => 'lyrics\LyricsController@update'
]);

Route::get('lyrics/create/', [
    'as' => 'lyrics', 'uses' => 'lyrics\LyricsController@create'
]);

Route::get('/form', [
    'uses' => 'lyrics\LyricsController@form'
]);

Route::post('/{id}/{name}', [
    'as' => 'action', 'uses' => 'lyrics\LyricsController@action'
]);
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
