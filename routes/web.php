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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/despesas', [App\Http\Controllers\Despesas::class, 'index']);
Route::get('/despesas{id}', [App\Http\Controllers\Despesas::class, 'show']);
Route::get('/despesas/create', [App\Http\Controllers\Despesas::class, 'create']);
Route::post('/despesas', [App\Http\Controllers\Despesas::class, 'store']);
Route::post('/despesas/{id}', [App\Http\Controllers\Despesas::class, 'delete']);
