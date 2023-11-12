<?php

use App\Http\Controllers\Post\IndexController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group([], function() {
    Route::get('/posts', IndexController::class)->name('posts.index');
    Route::get('/posts/create', \App\Http\Controllers\Post\CreateController::class)->name('posts.create');
    Route::post('/posts', \App\Http\Controllers\Post\StoreController::class)->name('posts.store');
    Route::get('/posts/{post}', \App\Http\Controllers\Post\ShowController::class)->name('posts.show');
    Route::get('/posts/{post}/edit', \App\Http\Controllers\Post\EditController::class)->name('posts.edit');
    Route::patch('/posts/{post}', \App\Http\Controllers\Post\UpdateController::class)->name('posts.update');
    Route::delete('/posts/{post}', \App\Http\Controllers\Post\DestroyController::class)->name('posts.destroy');
});
