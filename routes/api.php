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

Route::resource('counselors', 'CounselorController', ['only' => [
    'show', 'update'
]]);

Route::post('/users/login', 'UserController@login');

Route::post('/users/login-facebook', 'UserController@loginByFB');