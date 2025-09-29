<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\DataMhsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);

Route::get('/form2', [DataMhsController::class, 'formMhs']);
Route::post('/proses2', [DataMhsController::class, 'prosesMhs']);


// route tubes

Route::get('/registrasi', function () {
    return ('registrasi');
});

Route::post('/registrasi-post', function () {
    return ('registrasi');
});

Route::get('/login', function () {
    return ('login');
});

Route::post('/login-post', function () {
    return ('login');
});

Route::get('/beranda', function () {
    return ('beranda');
});

Route::get('/dashboardAdmin', function () {
    return ('dashboard admin');
});

Route::get('/detail-laporan', function () {
    return ('detail-laporan');
});

Route::get('/laporkan', function () {
    return ('laporkan');
});

Route::post('/laporkan-post', function () {
    return ('laporkan');
});

Route::get('/berita', function () {
    return ('berita');
});

Route::get('/mitigasi', function () { 
    return ('mitigasi');
});

Route::get('/mitigasi/banjir', function () {
    return ('mitigasi banjir');
});

Route::get('/mitigasi/banjir', function () {
    return ('mitigasi banjir');
});

Route::get('/mitigasi/longsor', function () {
    return ('mitigasi longsor');
});

Route::get('/mitigasi/gempa', function () {
    return ('mitigasi gempa');
});