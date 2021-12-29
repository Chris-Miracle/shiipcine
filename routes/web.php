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

Route::get('/', [App\Http\Controllers\MovieController::class, 'index'])->name('welcome');
Route::get('/sort-by-cinema/{id}', [App\Http\Controllers\MovieController::class, 'sortByCinema'])->name('sort-by-location');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home/add-movie', [App\Http\Controllers\HomeController::class, 'store'])->name('add-movie');
Route::delete('/home/delete-movie', [App\Http\Controllers\HomeController::class, 'destroy'])->name('delete-movie');
