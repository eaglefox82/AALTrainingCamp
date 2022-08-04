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
Route::resource('/accommodation', 'HutController')->middleware('auth');
Route::resource('/reports', 'ReportController')->middleware('auth');

//Post Routes
Route::post('/members/completecheckin/{id}', 'MembersController@completeCheckIn')->middleware('auth');
Route::post('/members/addMemberNote/{id}', 'MembersController@addMemberNote')->middleware('auth');
Route::post('/members/addMemberDiet/{id}', 'MembersController@addMemberDiet')->middleware('auth');
Route::post('/members/addMemberMedical/{id}', 'MembersController@addMemberMedical')->middleware('auth');
Route::post('/members/addassign', 'MembersController@completeAssignMember')->middleware('auth');


//Get Routes
Route::get('/members/checkin/{id}', 'MembersController@memberCheckIn')->middleware('auth');
Route::get('/members/addnote/{id}', 'MembersController@addNote')->middleware('auth');
Route::get('/members/addmedical/{id}', 'MembersController@addMedical')->middleware('auth');
Route::get('/members/adddiet/{id}', 'MembersController@addDiet')->middleware('auth');
Route::get('/members/assign/{id}', 'MembersController@assignMember')->middleware('auth');
Route::get('/flights', 'LessonsController@flights')->middleware('auth');
Route::get('/flights/rollcall', 'ReportController@RollCall')->middleware('auth');

//Report Routes
Route::get('/flights/rollcall', 'ReportController@RollCall')->middleware('auth');
Route::get('/flights/RoomCall', 'ReportController@RoomRoll')->middleware('auth');

//Ajax Calls
Route::get('get/members', 'MembersController@getMemberlist')->name('getMembers');
Route::get('get/food', 'FoodController@getFoodlist')->name('getFood');
Route::get('get/huts', 'HutController@getHutlist')->name('getHuts');


//Development Routes
Route::get('/autoload', function()
{
    \Artisan::call('dump-autoload');
    echo 'dump-autoload complete';
});







