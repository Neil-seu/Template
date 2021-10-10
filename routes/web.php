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

Route::get('/', function () {
    return view('default');
})->name('/');

Route::get('/about', function () {
    return view('about');
})->name('About');

Route::get('/contact', function () {
    return view('contact');
})->name('Contact');

Route::get('/insert', function () {
    return view('insert');
})->name('Insert');

Route::post('/redirect', ['DefaultController@dataInsert']);