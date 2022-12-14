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
})->name('login')->middleware('guest');

Route::get('/ujian', function () {
    return view('ujian');
});

// halaman admin

Route::get('/admin', function () {
    return view('admin.home');
})->middleware('auth')->name('dashboard');


Route::controller(SchoolEventController::class)->group(function () {
    Route::get('/admin/acara', 'index')->name('acara.all')->middleware('auth');
    Route::get('/admin/acara/tambah', 'create')->name('acara.create')->middleware('auth');
    Route::post('/admin/acara/tambah', 'store')->name('acara.store')->middleware('auth');
    Route::get('/admin/acara/{acara}', 'detail')->name('acara.detail')->middleware('auth');
    Route::get('/admin/acara/{acara}/ubah', 'update')->name('acara.update')->middleware('auth');
    Route::patch('/admin/acara/{acara}/ubah', 'patch')->name('acara.patch')->middleware('auth');
    Route::delete('/admin/acara/{acara}/hapus', 'delete')->name('acara.delete')->middleware('auth');
});

Route::controller(UserController::class)->group(function () {
    Route::post('/login', 'loginAttempt')->name('login_attempt')->middleware('guest');
    Route::get('/logout', 'logout')->name('logout')->middleware('auth');
    Route::get('/admin/user', 'allUser')->name('user.all')->middleware('auth');
    Route::get('/admin/user/tambah', 'registerUser')->name('user.create')->middleware('auth');
    Route::post('/admin/user/tambah', 'store')->name('user.store')->middleware('auth');
    Route::get('/admin/user/{user}/detail', 'detailUser')->name('user.detail')->middleware('auth');
    Route::get('/admin/user/{user}/ubah', 'editUser')->name('user.update')->middleware('auth');
    Route::patch('/admin/user/{user}/ubah', 'patch')->name('user.patch')->middleware('auth');
    Route::delete('/admin/user/{user}/hapus', 'delete')->name('user.delete')->middleware('auth');
    Route::get('/admin/guru', 'guru')->name('guru')->middleware('auth');
    Route::get('/admin/siswa', 'allSiswa')->name('siswa.all')->middleware('auth');
});

Route::controller(AbsensiController::class)->group(function () {
    Route::get('/admin/absensi', 'index')->name('absensi.all')->middleware('auth');
    Route::get('/admin/absensi/validasi', 'validasiSebelumAbsen')->name('absensi.validasi')->middleware('auth');
    Route::get('/admin/absensi/tambah', 'create')->name('absensi.create')->middleware('auth');
    Route::get('/admin/absensi/edit/{absen}', 'edit')->name('absensi.edit')->middleware('auth');
    Route::patch('/admin/absensi/patch/{absen}', 'patch')->name('absensi.patch')->middleware('auth');
    Route::delete('/admin/absensi/delete/{absen}', 'delete')->name('absensi.delete')->middleware('auth');
    Route::post('/admin/absensi/simpan', 'store')->name('absensi.store')->middleware('auth');
});

Route::get('/admin/footer', function () {
    return view('admin/footer');
});

Route::get('/admin/gallery', function () {
    return view('admin/gallery');
});

Route::get('/admin/hapus_guru', function () {
    return view('admin/hapus_guru');
});

Route::get('/admin/header', function () {
    return view('admin/header');
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
Route::resource('logn', RegisterController::class);
