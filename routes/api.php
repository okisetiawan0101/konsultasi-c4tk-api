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

Route::get('/user', function (Request $request)
{
	return $request->user();
})->middleware('auth:api');

Route::resource('users', 'UserController', ['except' => [
	'create', 'edit', 'index'
]]);

Route::resource('threads', 'ThreadController', ['only' => [
	'store', 'show'
]]);

Route::patch('thread/{thread_id}/close', 'ThreadController@close');

Route::patch('thread/{thread_id}/user-rating', 'ThreadController@giveUserRating');

Route::patch('thread/{thread_id}/counselor-rating', 'ThreadController@giveCounselorRating');

Route::resource('counselors', 'CounselorController', ['only' => [
	'show', 'update'
]]);

Route::post('/users/login', 'UserController@login');

Route::post('/users/login-facebook', 'UserController@loginByFB');

Route::get('/suggestions/base', 'SuggestionController@getBaseSuggestion');

Route::get('/suggestions/{suggestionId}', 'SuggestionController@getSuggestion');

Route::get('/provinces', 'MasterController@showProvinces');

Route::get('/provinces/{province_id}/cities', 'MasterController@showCities');

Route::get('/cities/{city_id}/districts', 'MasterController@showDistricts');

Route::get('/districts/{district_id}/villages', 'MasterController@showVillages');

Route::get('/educations', 'MasterController@showEducations');

Route::get('/occupations', 'MasterController@showOccupations');

Route::get('/marital-statuses', 'MasterController@showMaritalStatuses');

Route::get('/genders', 'MasterController@showGenders');

Route::get('/avatars', 'MasterController@showAvatars');

Route::get('/categories', 'MasterController@showCategories');

Route::get('/consultation-types', 'MasterController@showConsultationTypes');

Route::get('/institutions', 'MasterController@showInstitutions');

Route::get('/users/{userId}/threads', 'ThreadController@getPaginateThreadsByUserId');