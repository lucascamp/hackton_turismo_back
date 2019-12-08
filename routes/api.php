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

//user
Route::post('users', 'UserController@store');

//userAnswers
Route::get('usersAnswer', 'UsersAnswerController@index');
Route::post('usersAnswer', 'UsersAnswerController@store');

//cities
Route::get('city', 'CityController@index');
Route::post('city', 'CityController@store');

//trips
Route::get('trip', 'TripController@index');
Route::post('trip', 'TripController@store');

//restaurants
Route::get('restaurant', 'RestaurantController@index');
Route::post('restaurant', 'RestaurantController@store');