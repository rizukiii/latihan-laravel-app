<?php

use App\Http\Controllers\BelajarController;
use Illuminate\Support\Facades\Route;

// ini adlah contoh fungsi syntax route untuk mengarahkan/mengedit dari alamat website
// masi bentuk yg tidak rapi
Route::get('/', function () {
    return view('welcome');
});

Route::get('/halaman-1', function () {
    return view('latihan1');
});

Route::get('/halaman-2', function () {
    return view('latihan2');
});

// ini adalah route yang sudah rapi dan siap digunakan
// kita pakai array untuk memanggil classnya lalu public
Route::get('/belajar-1', [BelajarController::class, 'laman1']);
Route::get('/belajar-2', [BelajarController::class, 'laman2']);
