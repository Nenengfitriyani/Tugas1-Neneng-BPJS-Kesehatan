<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'dashboard']);

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');   
Route::get('/pengajuan', [HomeController::class, 'index'])->name('index');
Route::get('/create', [HomeController::class, 'create'])->name('user.create');
Route::post('/store', [HomeController::class, 'store'])->name('user.store');