<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Post
Route::get('/posts', [PostController::class, 'index']);
Route::post('/post/store', [PostController::class, 'store']);
Route::get('/post/{id}', [PostController::class, 'show']);
Route::put('/post/{id}', [PostController::class, 'update']);
Route::delete('/post/{id}', [PostController::class, 'destroy']);