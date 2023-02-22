<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CartController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\GoogleController;

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
    return view('index', [
        "title" => "Home"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->middleware('auth');

// Route::get('/category/{category:slug}', [CategoryController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'hapus']);

Route::get('/authors/{author:username}', [AuthorController::class, 'show']);

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Kopriyanto",
        "email" => "kopriyan003@gmail.com",
        "image" => "kopriyanto.jpg"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);

// Route::get('/user/edit', [UserController::class, 'index'])->middleware('auth');
// Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::middleware('auth')->group(function() {
    Route::post('/daftar', [DaftarController::class, "tambah"]);
    Route::get('/favorite/tambah/{post:slug}',[FavoriteController::class, 'tambah'])->middleware('auth');
    Route::delete('/favorite/hapus/{favorite:id}',[FavoriteController::class, 'hapus'])->middleware('auth');
    Route::get('/beranda', [BerandaController::class, 'index'])->middleware('auth');
});

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

Route::post('/user/{user:username}', [UserController::class, 'updateRole'])->middleware('auth');

// Route::get('/dashboard/categories', [AdminController::class, 'index']);

Route::middleware('superUser')->group(function(){
    Route::resource('/dashboard/categories', AdminController::class);
    Route::post('/dashboard/categories/tambah', [CategoryController::class, 'tambah']);
    Route::delete('/categories/hapus/{category:slug}', [CategoryController::class, 'hapus']);
});

Route::middleware('admin')->group(function() {
    Route::resource('/dashboard/posts', DashboardPostController::class);
    Route::get('/dashboard/download', [DashboardController::class, 'export']);
    Route::put('/dashborad/status', [DashboardController::class, 'status']);
    Route::put('/dashboard/posts/{post:slug}', [DashboardPostController::class, 'update_status']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
});
