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

Route::get('/Home', 'HomeController@home');

Route::get('/Register', 'AuthController@register');

Route::get('/Welcome', 'AuthController@welcome');

Route::post('/Welcome', 'AuthController@welcome_post');