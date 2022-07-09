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


//Route::resource('/students', 'StudentsController')->middleware('auth');
//Route::resource('/aircraft', 'AircraftsController')->middleware('auth');
//Route::resource('/instructors', 'InstructorsController')->middleware('auth');
//Route::resource('/flights', 'FlightsController')->middleware('auth');
//Route::resource('/accounting', 'AccountingController')->middleware('auth');
//Route::resource('/tabs', 'TabsController')->middleware('auth');
//Route::resource('/aircraft/fuel', 'FuelController')->middleware('auth');
//Route::resource('/staff', 'StaffController')->middleware('auth');
//Route::resource('/camp', 'CampController')->middleware('auth');
//Route::resource('/settings', 'SettingsController')->middleware('auth');

//Route::get('/accounting/commit/{id}', 'AccountingController@commitExpense')->middleware('auth');
//Route::get('/accounting/returnEarn/add', 'AccountingController@return')->middleware('auth');
//Route::post('/accounting/returnEarn/add', 'AccountingController@returnEarn')->middleware('auth');
//Route::get('/students/checkin/{id}', 'StudentsController@checkIn')->middleware('auth');
//Route::post('/students/checkin/{id}', 'StudentsController@completeCheckIn')->middleware('auth');
//Route::get('/tabs/createtab/{id}', 'TabsController@createtab')->middleware('auth');
//Route::get('/aircraft/addfuel/{id}', 'FuelController@addfuel')->middleware('auth');

//Route::get('/accounting/reports/pdf','PDFController@expensesReport')->middleware('auth');
//Route::get('/reports/camp', 'PDFController@campReport')->middleware('auth');
//Route::get('/students/invoice/{id}', 'StudentsController@studentInvoice')->middleware('auth');
//Route::get('/students/invoice/print/{id}', 'PDFController@studentInvoice')->middleware('auth');
//Route::get('/students/checkout/{id}', 'StudentsController@studentCheckout')->middleware('auth');
//Route::post('/students/checkout/{id}', 'StudentsController@completeCheckOut')->middleware('auth');
//Route::post('/staff/note', 'StaffController@addNote')->middleware('auth');
//Route::post('/student/note', 'StudentsController@addNotes')->middleware('auth');
