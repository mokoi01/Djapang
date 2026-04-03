<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/top', function () {
    return view('top');
});

Route::get('/toko', function () {
    return view('toko');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin/login', function () {
    return view('admin-login');
});

Route::get('/admin/dashboard', function () {
    return view('admin-dashboard');
});

// Route untuk halaman form pengajuan jualan
Route::get('/pengajuan-jualan', function () {
    return view('pengajuan-jualan'); 
});

// Route bawaan kamu sebelumnya (biarkan saja)
Route::get('/menunggu-verifikasi', function () {
    return view('menunggu-verifikasi');
});

// TAMBAHKAN ROUTE INI UNTUK MENERIMA SUBMIT FORM (POST)
Route::post('/menunggu-verifikasi', function () {
    return view('menunggu-verifikasi');
});

// Route untuk halaman dashboard penjual
Route::get('/dashboard-penjual', function () {
    return view('dashboard-penjual');
});

// Route untuk halaman tambah/edit produk
Route::get('/tambah-produk', function () {
    return view('tambah-produk');
});

// Route POST simulasi untuk submit form tambah produk
Route::post('/dashboard-penjual', function () {
    return view('dashboard-penjual');
});