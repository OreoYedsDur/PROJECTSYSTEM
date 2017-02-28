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

Route::get('/', function () {
    return view('dashboards.index');
});


Route::get('/locations/create/{id}','LocationController@create');
Route::get('/services/create/{id}','ServiceController@create');
Route::get('/contacts/create/{id}','ContactController@create');

Route::resource('groupsales','GroupsaleController');
Route::resource('sales','SaleController');
Route::resource('customers','CustomerController');
Route::resource('services','ServiceController');
Route::resource('locations','LocationController');
Route::resource('logbooks','LogbookController');
Route::resource('contacts','ContactController');