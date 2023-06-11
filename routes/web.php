<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/foundation','FoundationController@index');
Route::get('/foundation/create', 'FoundationController@create');
Route::post('/foundation','FoundationController@store');
Route::get('/foundation/{id}','FoundationController@show');
