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

Route::get('/', "App\Http\Controllers\IndexController@index");
Route::get('/about', "App\Http\Controllers\AboutController@index");
Route::get('/services', "App\Http\Controllers\ServicesController@index");
Route::get('/contact', "App\Http\Controllers\ContactController@index");
Route::get('/blog', "App\Http\Controllers\BlogController@index");
Route::get('/blog', "App\Http\Controllers\PartnersController@index");
Route::get('/index', "App\Http\Controllers\IndexController@index");
Route::get('/index.html', "App\Http\Controllers\IndexController@index");
Route::get('/depot', "App\Http\Controllers\DepotController@index");