<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


//login atau register
Route::get('login_member', [AuthController::class, 'login_member'])->name('login_member');
Route::post('login_member', [AuthController::class, 'login_member_action'])->name('login_member_action');
Route::get('logout_member', [AuthController::class, 'logout_member'])->name('logout_member');


Route::get('register_member', [AuthController::class, 'register_member']);
Route::post('register_member', [AuthController::class, 'register_member_action']);

//home routes
Route::get('/',[HomeController::class, 'index']);
Route::get('/koleksi',[HomeController::class, 'koleksi']);
Route::get('/produk/{id}', [HomeController::class, 'produk'])->name('produk');
Route::get('/keranjang',[HomeController::class, 'keranjang']);
Route::get('/pembayaran',[HomeController::class, 'pembayaran']);
Route::get('/pesanan',[HomeController::class, 'pesanan']);
Route::get('/tentang',[HomeController::class, 'tentang']);
Route::get('/blog',[HomeController::class, 'blog']);

//profil
Route::get('/profil',[HomeController::class, 'profil']);
Route::put('/update-member', [AuthController::class, 'updateMember'])->name('update_member');
Route::post('/upload-profile-picture', [AuthController::class, 'uploadProfilePicture'])->name('upload_profile_picture');


//blogdashboard routes
Route::get('/dashboard', [BlogController::class, 'index'])->name('dashboard');
Route::put('/dashboard-update/{blog}', [BlogController::class, 'update'])->name('blog.update');
Route::post('/dashboard-create', [BlogController::class, 'store'])->name('blog.create');
Route::delete('/dashboard-delete/{blog}', [BlogController::class, 'destroy'])->name('blog.delete');




Route::post('/tambah_keranjang',[HomeController::class, 'tambah_keranjang']);
Route::get('/hapus_keranjang/{cart}', [HomeController::class, 'hapus_keranjang']);
