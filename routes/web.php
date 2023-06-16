<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoundationController;
use App\Http\Controllers\UserController;
use App\Models\Foundation;
use Illuminate\Http\Request;


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

Route::get('/foundation', [FoundationController::class, 'index'])->middleware('auth');
Route::get('/foundation/create', [FoundationController::class, 'create']);
Route::post('/foundation',[FoundationController::class, 'store']);
Route::get('/foundation/{id}',[FoundationController::class, 'show'])->middleware('auth');
Route::get('/foundation/gallery',[FoundationController::class, 'gallery']);
Route::get('/register',[UserController::class, 'create']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
