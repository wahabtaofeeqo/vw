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


Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/wallets', 'HomeController@wallets');
Route::get('/test', 'HomeController@processPhrase');
Route::get('/connect', 'HomeController@connect');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');