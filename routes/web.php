<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/home', [BarangController::class, 'index'])->name('home');

Route::post('/barangs/add', [BarangController::class, 'create'])->name('create');
Route::get('/barangs/add', [BarangController::class, 'add'])->name('addbarang');
