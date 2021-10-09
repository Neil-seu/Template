<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DefaultController;

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

Route::get('/', 'DefaultController@default')->name('/');

Route::get('/about', 'DefaultController@about')->name('About');

Route::get('/contact', 'DefaultController@contact')->name('Contact');

Route::get('/insert', 'DefaultController@addNew')->name('Insert');