<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/menu', [App\Http\Controllers\menuController::class, 'index']);
Route::get('/menu/create', [App\Http\Controllers\menuController::class, 'create']);
Route::post('/menu', [App\Http\Controllers\menuController::class, 'store']);
Route::get('/menu/{id}/edit', [App\Http\Controllers\menuController::class, 'edit']);
Route::patch('/menu/{id}', [App\Http\Controllers\menuController::class, 'update']);
Route::delete('/menu/{id}', [App\Http\Controllers\menuController::class, 'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/meja', [App\Http\Controllers\mejaController::class, 'index']);
Route::get('/meja/create', [App\Http\Controllers\mejaController::class, 'create']);
Route::post('/meja', [App\Http\Controllers\mejaController::class, 'store']);
Route::get('/meja/{id}/edit', [App\Http\Controllers\mejaController::class, 'edit']);
Route::patch('/meja/{id}', [App\Http\Controllers\mejaController::class, 'update']);
Route::delete('/meja/{id}', [App\Http\Controllers\mejaController::class, 'destroy']);

Route::get('/pelanggan', [App\Http\Controllers\pelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\pelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\pelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\pelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\pelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\pelangganController::class, 'destroy']);

Route::get('/pesanan', [App\Http\Controllers\pesananController::class, 'index']);
Route::get('/pesanan/create', [App\Http\Controllers\pesananController::class, 'create']);
Route::post('/pesanan', [App\Http\Controllers\pesananController::class, 'store']);
Route::get('/pesanan/{id}/edit', [App\Http\Controllers\pesananController::class, 'edit']);
Route::patch('/pesanan/{id}', [App\Http\Controllers\pesananController::class, 'update']);
Route::delete('/pesanan/{id}', [App\Http\Controllers\pesananController::class, 'destroy']);