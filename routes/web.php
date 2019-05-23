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

/*
Länkar till controllers
*/
Route::get('/', 'StatsController@home');
Route::get('/clan', 'StatsController@clan');
Route::get('/tournament', 'StatsController@tournament');
Route::get('/br', 'StatsController@br');
Route::post('/', 'StatsController@store');
Route::get('/create', 'StatsController@create');