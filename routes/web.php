<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DashboardPostController;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/update', function () {
    return view('update');
});

Route::get('/view', function () {
    return view('view');
});

Route::get('/', [DivisionController::class, 'index']);
Route::get('/add', [DivisionController::class, 'add']);

// Route::resource('/dashboard', DashboardPostController::class);
Route::resource('/dashboard/posts', DashboardPostController::class);



Route::get('/login', function () {
    return view('login');
});


// Route::get('posts', [PostController::class, 'index']);

// Route::get('posts/{slug}', [PostController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Article

Route::get('/article', [ArticlesController::class, 'index'])->name('article');
Route::get('/article/add', [ArticlesController::class, 'create'])->name('article_add');
Route::post('/article/store', [ArticlesController::class, 'store'])->name('article_store');
Route::get('/article/edit/{id}', [ArticlesController::class, 'edit'])->name('article_edit');
Route::post('/article/update', [ArticlesController::class, 'update'])->name('article_update');
Route::get('/article/destroy/{id}', [ArticlesController::class, 'destroy'])->name('article_destroy');
