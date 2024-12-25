<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'create'])->name('post#home');

Route::get('customer/createPage', [PostController::class, 'create'])->name('post#createPage');

Route::post('customer/insertPage', [PostController::class, 'insert'])->name('post#insertPage');

Route::get('/customer/deletePage/{id}', [PostController::class, 'delete'])->name('post#delete');

Route::get('/customer/readMorePage/{id}', [PostController::class, 'readMore'])->name('post#readMorePage');

Route::get('customer/editPage/{id}', [PostController::class, 'edit'])->name('post#editPage');

Route::post('customer/updatePage', [PostController::class, 'update'])->name('post#updatePage');
