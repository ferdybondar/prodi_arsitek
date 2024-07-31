<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminBannerController;
// use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminKurikulumController;
use App\Http\Controllers\AdminDosenController;
use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminPesanController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminDatasiswaController;
use App\Http\Controllers\AdminKelasController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AdminDatasiswaController;
use App\Http\Controllers\HomeBlogController;
use App\Http\Controllers\HomeContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
// Route::get('/services', [HomeController::class, 'service']);
Route::get('/dosen',[HomeController::class, 'dosen']);
Route::get('/kurikulum',[HomeController::class, 'kurikulum']);

Route::get('/blog', [HomeBlogController::class, 'index']);
Route::get('/blog/show/{id}', [HomeBlogController::class, 'show']);
Route::get('/contact', [HomeContactController::class,'index']);
Route::post('/contact/send', [HomeContactController::class,'send']);

Route::get('/login', [AdminAuthController::class, 'index' ])->name('login')->middleware('guest');
Route::post('/login/do', [AdminAuthController::class, 'doLogin' ]);

// admin //

Route::prefix('/admin')->middleware('auth','ceklevel:admin')->group(function(){
// Route::group(['middleware' => ['auth','ceklevel:Admin']], function(){
  Route::get('/logout', [AdminAuthController::class, 'logout']);
  Route::get('/dashboard', [AdminDashboardController::class, 'index']);

  Route::resource('/user', AdminUserController::class);
  Route::resource('/banner', AdminBannerController::class);
  // Route::resource('/service', AdminServiceController::class);
  Route::resource('/dosen', AdminDosenController::class);
  Route::resource('/kurikulum', AdminKurikulumController::class);

  Route::get('/datasiswa', [AdminDatasiswaController::class, 'index']);
  Route::get('/datasiswa/search', [AdminDatasiswaController::class, 'search']);
  Route::get('/datasiswa/search/cetak', [AdminDatasiswaController::class, 'cetak']);
  Route::get('/datasiswa/cetak',[AdminDatasiswaController::class, 'cetak']);

  Route::resource('/kelas', AdminKelasController::class);
  
  Route::get('/about', [AdminAboutController::class, 'index']);
  Route::put('/about/update', [AdminAboutController::class,'update']);

  Route::resource('/posts/blog', AdminBlogController::class);
  Route::resource('/posts/kategori', AdminKategoriController::class);

  Route::resource('/pesan', AdminPesanController::class);
});

Route::prefix('/admin')->middleware('auth','ceklevel:admin,user')->group(function(){
  Route::get('/logout', [AdminAuthController::class, 'logout']);
  Route::get('/dashboard', [AdminDashboardController::class, 'index']);
 
  Route::resource('/dosen', AdminDosenController::class);
  Route::resource('/kurikulum', AdminKurikulumController::class);
  Route::get('/datasiswa', [AdminDatasiswaController::class, 'index']);
  Route::get('/datasiswa/search', [AdminDatasiswaController::class, 'search']);
  Route::resource('/kelas', AdminKelasController::class);
});


