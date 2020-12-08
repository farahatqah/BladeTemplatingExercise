<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ebookController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/subviews/about', '\App\Http\Controllers\ebookController@info');
Route::get('/subviews/list', '\App\Http\Controllers\ebookController@details');
Route::get('/subviews/master', '\App\Http\Controllers\ebookController@index');
Route::get('/subviews/nav', '\App\Http\Controllers\ebookController@index1');
