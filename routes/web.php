<?php

use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\SewaMobilViewController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DestinasiController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\PaketTourController;
use App\Http\Controllers\Admin\SewaMobilController;
use App\Http\Controllers\GalleryPengunjungController;

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


//Home
Route::get('/', [HomeController::class, 'index']);

//Sewa Mobil
Route::get('/sewa-mobil', [SewaMobilViewController::class, 'index'])->name('pengunjung.sewa-mobil');


//Paket Tour
Route::get('/paket-tour', [HomeController::class, 'paket_tour'])->name('pengunjung.paket-tour');
Route::get('/paket-tour/{slug}', [HomeController::class, 'show'])->name('pengunjung.paket-tour.show');

//gallery
Route::get('/gallery', [GalleryPengunjungController::class, 'index'])->name('pengunjung.gallery');

//Kontak
Route::get('/kontak', [HomeController::class, 'kontak'])->name('pengunjung.kontak');


//Login Admin
Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/proses-login', [LoginController::class, 'prosesLogin'])->name('proses-login');
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('logout');



Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //paket tour
    Route::get('/admin/paket-tour', [PaketTourController::class, 'index'])->name('paket-tour');
    Route::get('/admin/tambah-tour', [PaketTourController::class, 'create'])->name('tambah-tour');
    Route::post('/admin/input-tour', [PaketTourController::class, 'store'])->name('input-tour');
    Route::post('/admin/archived-tour/{id}', [PaketTourController::class, 'archived'])->name('archived-tour');
    Route::get('/admin/edit-tour/{slug}', [PaketTourController::class, 'show'])->name('edit-tour');
    Route::post('/admin/update-tour/{slug}', [PaketTourController::class, 'update'])->name('update-tour');
    Route::get('/admin/hapus-tour/{slug}', [PaketTourController::class, 'destroy'])->name('hapus-tour');

    //gallery
    Route::get('/admin/gallery', [GalleryController::class, 'index'])->name('gallery');
    Route::post('/admin/simpan-gambar', [GalleryController::class, 'store'])->name('simpan-gambar');
    Route::get('/admin/hapus-gambar/{id}', [GalleryController::class, 'destroy'])->name('hapus-gambar');

    //destinasi
    Route::get('/admin/destinasi', [DestinasiController::class, 'index'])->name('destinasi');
    Route::post('/admin/simpan-destinasi', [DestinasiController::class, 'store'])->name('simpan-destinasi');
    Route::post('/admin/update-destinasi/{id}', [DestinasiController::class, 'update'])->name('update-destinasi');
    Route::get('/admin/hapus-destinasi/{id}', [DestinasiController::class, 'destroy'])->name('hapus-destinasi');

    //kategori
    Route::get('/admin/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::post('/admin/simpan-kategori', [KategoriController::class, 'store'])->name('simpan-kategori');
    Route::post('/admin/update-kategori/{id}', [KategoriController::class, 'update'])->name('update-kategori');
    Route::get('/admin/hapus-kategori/{id}', [KategoriController::class, 'destroy'])->name('hapus-kategori');

    //sewa mobil
    Route::get('/admin/sewa-mobil', [SewaMobilController::class, 'index'])->name('sewa-mobil');
    Route::post('/admin/tambah-mobil', [SewaMobilController::class, 'store'])->name('tambah-mobil');
    Route::get('/admin/hapus-mobil/{id}', [SewaMobilController::class, 'destroy'])->name('hapus-mobil');
    Route::post('/admin/update-mobil/{slug}', [SewaMobilController::class, 'update'])->name('update-mobil');

    //Artikel
    Route::get('/admin/artikel', [ArtikelController::class, 'index'])->name('artikel');

    //Invoice
    Route::get('/admin/invoice', [InvoiceController::class, 'index'])->name('invoice');
    Route::post('/admin/invoice-print', [InvoiceController::class, 'print'])->name('invoice-print');
});
