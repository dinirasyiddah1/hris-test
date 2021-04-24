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
    return view('index');
});

Route::get('/kehadiran', [App\Http\Controllers\KehadiranController::class, 'index'])->name('kehadiran/index');
Route::get('/kehadiran/create', [App\Http\Controllers\KehadiranController::class, 'create'])->name('kehadiran/create');
Route::post('/kehadiran/store', [App\Http\Controllers\KehadiranController::class, 'store'])->name('kehadiran/store');
// Route::get('/kehadiran/show/{id}', [App\Http\Controllers\KehadiranController::class, 'show'])->name('kehadiran/show');
Route::get('/kehadiran/edit/{id}', [App\Http\Controllers\KehadiranController::class, 'edit'])->name('kehadiran/edit');
Route::post('/kehadiran/update', [App\Http\Controllers\KehadiranController::class, 'update'])->name('kehadiran/update');
Route::get('/kehadiran/destroy/{id}', [App\Http\Controllers\KehadiranController::class, 'destroy'])->name('kehadiran/destroy');
