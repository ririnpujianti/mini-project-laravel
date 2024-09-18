<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SepatuController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sepatus', [SepatuController::class, 'index'])->name('sepatus.index');

// Route untuk menampilkan form tambah sepatu
Route::get('/sepatus/create', [SepatuController::class, 'create'])->name('sepatus.create');

// Route untuk menyimpan sepatu baru
Route::post('/sepatus', [SepatuController::class, 'store'])->name('sepatu.store');

// Route untuk menampilkan form edit sepatu
Route::get('/sepatus/{id}/edit', [SepatuController::class, 'edit'])->name('sepatus.edit');

// Route untuk update sepatu
Route::put('/sepatus/{id}', [SepatuController::class, 'update'])->name('sepatus.update');

// Route untuk menghapus sepatu
Route::delete('/sepatus/{id}', [SepatuController::class, 'destroy'])->name('sepatus.destroy');
