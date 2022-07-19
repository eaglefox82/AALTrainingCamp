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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//Resource Routes
Route::resource('/members', 'MembersController')->middleware('auth');
Route::resource('/mess/diet', 'FoodController')->middleware('auth');

//Post Routes
Route::post('/members/completecheckin/{id}', 'MembersController@completeCheckIn')->middleware('auth');

//Get Routes
Route::get('/members/checkin/{id}', 'MembersController@memberCheckIn')->middleware('auth');



//Ajax Calls
Route::get('get/members', 'MembersController@getMemberlist')->name('getMembers');
Route::get('get/food', 'FoodController@getFoodlist')->name('getFood');






