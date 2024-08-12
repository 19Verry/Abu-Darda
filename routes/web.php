<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/kantin', function () {
    return view('kantin');
});
Route::get('/loginkantin', function () {
    return view('loginKantin');
});
Route::get('/transaksi', function () {
    return view('historytransaksi');
});
Route::get('/ubahpassword', function () {
    return view('ubahpassword');
});
Route::get('/tarik', function () {
    return view('tarik');
});
Route::get('/topup', function () {
    return view('topup');
});
Route::get('/prodi', function () {
    return view('prodi');
});
Route::get('/prodi', function () {
    return view('prodi');
});

Route::get('/pendaftaran/loginPendaftaran', function () {
    return view('pendaftaran/loginPendaftaran');
});

Route::get('/pendaftaran/registerPendaftaran', function () {
    return view('pendaftaran/registerPendaftaran');
});