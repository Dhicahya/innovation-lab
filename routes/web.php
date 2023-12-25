<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/', function(){return view('dashboard');})->name('dashboard');

Route::resource("category", CategoryController::class);
Route::get('category/{category}/delete', [CategoryController::class, 'destroy']);
Route::get('category/{category}/status', [CategoryController::class, 'status']) ->name('category.status'); 

Route::resource("thread", ThreadController::class);
Route::get('thread/{thread}/delete', [ThreadController::class, 'destroy']);
Route::get('thread/{thread}/status', [ThreadController::class, 'status']) ->name('thread.status');

Route::resource("user", UserController::class);
Route::get('user/{user}/delete', [UserController::class, 'destroy']);
Route::get('user/{user}/status', [UserController::class, 'status']) ->name('user.status'); 
