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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('users', 'UserController', ['except' => [
	'create', 'edit', 'index'
]]);

Route::resource('threads', 'ThreadController', ['only' => [
	'store', 'show'
]]);

Route::patch('thread/{thread_id}/close','ThreadController@close');

Route::patch('thread/{thread_id}/user-rating','ThreadController@giveUserRating');

Route::patch('thread/{thread_id}/counselor-rating','ThreadController@giveCounselorRating');

Route::post('/users/login', 'UserController@login');

Route::post('/users/login-facebook', 'UserController@loginByFB');

Route::get('/suggestions/base', 'SuggestionController@getBaseSuggestion');
Route::get('/suggestions/{suggestionId}', 'SuggestionController@getSuggestion');