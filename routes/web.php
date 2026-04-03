<?php

use Illuminate\Support\Facades\Route;

// ==========================================
// 1. HALAMAN AWAL (Otomatis ke Login)
// ==========================================
Route::get('/', function () {
    return redirect('/login'); 
});

// ==========================================
// 2. ROUTE LUAR (File yang tidak di dalam folder)
// ==========================================
Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

// ==========================================
// 3. ROUTE USER (File di dalam folder User)
// ==========================================
Route::get('/home', function () {
    return view('User.home');
});

Route::get('/detail', function () {
    return view('User.detail');
});

Route::get('/cart', function () {
    return view('User.cart');
});

Route::get('/profil', function () {
    return view('User.profil');
});

Route::get('/contact', function () {
    return view('User.contact');
});

Route::get('/top', function () {
    return view('User.top');
});

Route::get('/toko', function () {
    return view('User.toko');
});

Route::get('/pengajuan-jualan', function () {
    return view('User.pengajuan-jualan'); 
});

Route::get('/menunggu-verifikasi', function () {
    return view('User.menunggu-verifikasi');
});

Route::post('/menunggu-verifikasi', function () {
    return view('User.menunggu-verifikasi');
});

Route::get('/tambah-produk', function () {
    return view('User.tambah-produk');
});


// ==========================================
// 4. ROUTE ADMIN (File di dalam folder Admin)
// ==========================================
Route::get('/admin/login', function () {
    return view('Admin.admin-login');
});

Route::get('/admin/dashboard', function () {
    return view('Admin.admin-dashboard');
});

Route::get('/dashboard-penjual', function () {
    return view('Admin.dashboard-penjual');
});

// Route POST simulasi untuk submit form tambah produk penjual
Route::post('/dashboard-penjual', function () {
    return view('Admin.dashboard-penjual');
});