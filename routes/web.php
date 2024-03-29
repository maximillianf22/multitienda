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

/*Route::view('/','system.templates.home.index');*/
Route::view('/plantilla','system.templates.home.home');
Route::view('/restaurantes','system.templates.restaurant.index');
Route::view('/login', 'system.templates.auth.login')->name('login');
Route::view('/supermercados', 'system.templates.supermarket.list')->name('supermercados');
Route::view('/', 'system.templates.supermarket.index')->name('supermercado');