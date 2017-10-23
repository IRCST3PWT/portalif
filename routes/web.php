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
    return view('index');
})->name('index');
Route::get('/dashboard/{stuff}', 'DashboardController@stuff');
Route::get('/dashboard/{stuff}/{title}', 'StuffController@index');
Auth::routes();
Route::post('/dashboard', 'DashboardController@store')->name('store');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
