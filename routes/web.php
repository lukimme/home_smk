<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataController;
use App\Http\Controllers\pdfController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\SimpanController;
use App\Http\Controllers\searchController;
use GuzzleHttp\Client;
use Barryvdh\DomPDF\PDF;


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
// jurusan
Route::get('jurusan-sija', function () {
    return view('Jurusan');
});

// Halaman Utama
Route::get('/', [UtamaController::class, 'terbaru']);

// Halaman Guru
Route::get('guru', [BeritaController::class, 'guru']);
Route::get('detail/{url}',[BeritaController::class, 'detail']);
Route::get('profil', function () {
    return view('profil');
});
// prestasi
// Route::get('prestasi', function () {
//     return view('prestasi');
// });
Route::get('prestasi', [UtamaController::class, 'prestasi']);
// kegiatan
Route::get('kegiatan', function () {
    return view('kegiatan');
});

// ppdb
Route::get('ppdb', function () {
    return view('ppdb');
});
Route::get('daftar', function () {
    return view('form');
});
Route::get('form-sukses', function () {
    return view('formsukses');
});

Route::get('formulir', function () {
    return view('formulir');
});


// untuk menyimpan data dan menangkap respon dari API
Route::post('/simpan', [SimpanController::class, 'simpan'])->name('pendaftaran.store');
Route::get('/getSiswaTerbaru/{id}/{y}','App\Http\Controllers\simpanController@getTerbaru');

// Route::get('/download-pdf/{id}', 'App\Http\Controllers\pdfController@pdf');
Route::get('downloadpdf/{x}', [pdfController::class,'pdf']);
Route::get('/download-pdf/{id}', [pdfController::class,'pdf2']);









//  Halaman berita /blog
Route::get('blog', [BeritaController::class, 'berita']);
Route::get('/search', [searchController::class, 'sea']);
// Jangan biarkan route catch-all menangkap file static seperti favicon, css atau js.
Route::get('favicon.ico', function () {
    $path = public_path('favicon.ico');
    if (file_exists($path)) {
        return response()->file($path);
    }
    abort(404);
});

// Batasi catch-all supaya tidak menangkap request yang mengandung titik (ekstensi file)
// Letakkan catch-all di akhir file agar route spesifik seperti /formulir ditangani lebih dulu.
Route::get('{url}', [BeritaController::class, 'isiberita'])->where('url', '^[^.]+$');