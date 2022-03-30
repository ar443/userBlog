<?php

use App\Http\Controllers\PostController;
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

Route::get('/',[PostController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('post/create',[PostController::class,'create'])->name('create-post');
Route::POST('post/store',[PostController::class,'store'])->name('store-post')->middleware('auth');
Route::get('post/show/{post}',[PostController::class,'show'])->name('show-post');
Route::get('post/edit/{post}',[PostController::class,'edit'])->name('edit-post')->middleware('auth');
Route::put('post/update/{post}',[PostController::class,'update'])->name('update-post')->middleware('auth');
Route::delete('post/delete/{post}',[PostController::class,'destroy'])->name('delete-post');


