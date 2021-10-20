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


Route::get('/', [DefaultController::class, 'index'])->name('Default');

Route::get('/about', [DefaultController::class, 'about'])->name('About');

Route::get('/contact', [DefaultController::class, 'contact'])->name('Contact');

Route::get('/insert', [DefaultController::class, 'addNew'])->name('Insert');

Route::post('/redirect', [DefaultController::class, 'dataInsert']);

Route::get('/dataedit/{edit_id}', [DefaultController::class, 'dataEdit'])->name('');

Route::post('/update', [DefaultController::class, 'dataUpdate'])->name('Update');

Route::get('/delete/{delete_id}', [DefaultController::class, 'dataDelete'])->name('');