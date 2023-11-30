<?php

use App\Http\Controllers\CategoryController;
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

Route::resource("category", CategoryController::class);
Route::get('category/{category}/delete', [CategoryController::class, 'destroy']);
Route::get('category/{category}/status', [CategoryController::class, 'status']) ->name('category.status'); 
