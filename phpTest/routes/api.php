<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/user', UserController::class);
//Route::get('/post', PostController::class);
//Route::get('/comment', CommentController::class);
Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);

