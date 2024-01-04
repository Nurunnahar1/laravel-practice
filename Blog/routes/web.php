<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route; 
 

Route::get('/',  [PostController::class,'postPage']);
Route::post('/post-store',  [PostController::class,'postStore'])->name('post.store');
Route::get('/post-update/{id}', [PostController::class, 'postUpdatePage'])->name('post.update');
Route::post('/post-edit/{id}', [PostController::class, 'postEdit'])->name('post.edit');
