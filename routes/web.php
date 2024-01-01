<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function(){return view('pages.admin.dashboard');})->name('dashboard');

Route::get('/', function(){return view('pages.home');})->name('home');

Route::resource("category", CategoryController::class);
Route::get('category/{category}/delete', [CategoryController::class, 'destroy']);
Route::get('category/{category}/status', [CategoryController::class, 'status']) ->name('category.status'); 

Route::resource("thread", ThreadController::class);
Route::get('thread/{thread}/delete', [ThreadController::class, 'destroy']);
Route::get('thread/{thread}/status', [ThreadController::class, 'status']) ->name('thread.status');

Route::resource("user", UserController::class);
Route::get('user/{user}/delete', [UserController::class, 'destroy']);
Route::get('user/{user}/status', [UserController::class, 'status']) ->name('user.status'); 

Route::resource("comment", CommentController::class);
Route::get('comment/{comment}/delete', [CommentController::class, 'destroy']);
Route::get('comment/{comment}/status', [CommentController::class, 'status']) ->name('comment.status');

Route::get("forum", function(){return view('pages.forum');})->name('forum');

Route::get("profil", function(){return view('pages.profil');})->name('profil');


Route::get("login", [AuthController::class, 'login'])->name('login');
Route::post("login", [AuthController::class, 'loginStore'])->name('loginStore');
Route::get("logout", [AuthController::class, 'logout'])->name('logout');
Route::get("register", [AuthController::class, 'register'])->name('register');
Route::post("register", [AuthController::class, 'registerStore'])->name('registerStore');


