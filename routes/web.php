<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/home', [BarangController::class, 'index'])->name('home');

Route::post('/barang/add', [BarangController::class, 'create'])->name('create');
Route::get('/barang/add', [BarangController::class, 'add'])->name('addbarang');

Route::get('/barang/{id}', [BarangController::class, 'edit'])->name('edit');
Route::patch('/barang/{id}', [BarangController::class, 'update'])->name('update');
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('delete');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
