<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, "index"])->name('index');
Route::get('/create', [MainController::class, "create"])->name('create');
Route::post('/', [MainController::class, "store"])->name("store");

Route::delete('/delete-post', [MainController::class, "destroyPost"])->name('post.delete');
Route::delete('/delete-video', [MainController::class, "destroyVideo"])->name('video.delete');
