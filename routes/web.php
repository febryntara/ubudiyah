<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/acara', function () {
    return view('acara');
});

Route::get('/galeri', function () {
    return view('galleri');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/guru', function () {
    return view('guru');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/siswa', function () {
    return view('siswa');
});

Route::get('/ujian', function () {
    return view('ujian');
});

// halaman admin

Route::get('/admin', function () {
    return view('admin/home');
});

Route::get('/admin/acara', function () {
    return view('admin/acara');
});

Route::get('/admin/user', function () {
    return view('admin/user');
});

Route::get('/admin/footer', function () {
    return view('admin/footer');
});

Route::get('/admin/gallery', function () {
    return view('admin/gallery');
});

Route::get('/admin/guru', function () {
    return view('admin/guru');
});

Route::get('/admin/hapus_guru', function () {
    return view('admin/hapus_guru');
});

Route::get('/admin/header', function () {
    return view('admin/header');
});

Route::get('/admin/acara', function () {
    return view('admin/acara');
});

Route::get('/admin/home', function () {
    return view('admin/home');
});

Route::get('/admin/login', function () {
    return view('admin/login');
});

Route::get('/admin/logout', function () {
    return view('admin/logout');
});

Route::get('/admin/madin', function () {
    return view('admin/madin');
});

Route::get('/admin/tpq', function () {
    return view('admin/tpq');
});

Route::get('/admin/tambah_guru', function () {
    return view('admin/tambah_guru');
});

Route::get('/admin/ubah_guru', function () {
    return view('admin/ubah_guru');
});


// Route::put('/admin/register', [RegisterController::class, 'store']);
Route::resource('logn',RegisterController::class);
