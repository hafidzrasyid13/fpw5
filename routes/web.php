<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('photos', PhotoController::class);

Route::get('/photos', [PhotoController::class, 'index'])->middleware('cek.password');
 
Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')   
    ->name('login');
 
Route::post('/login', [LoginController::class, 'store'])
    ->middleware('guest')
    ->name('login.store');
 
Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/reports/sales', [ReportController::class, 'sales'])->name('report.sales');
});
    
Route::middleware(['auth', 'role:admin,kasir'])->group(function () {
    Route::get('/pos', [PosController::class, 'index'])->name('pos.index');
    Route::post('/pos', [PosController::class, 'store'])->name('pos.store');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/pos/history', function () {
    return ' Riwayat Transaksi ';
})->middleware(['auth', 'role:kasir'])->name('pos.history');


Route::resource('categories', CategoryController::class);

