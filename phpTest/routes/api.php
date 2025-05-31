<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix('users')->group(function () {     // 회원가입
    Route::get('/', [UserController::class, 'index']);                // 전체 사용자 조회
    Route::get('/{id}', [UserController::class, 'show']);             // 단일 사용자 조회
    Route::put('/{id}', [UserController::class, 'update']);           // 정보 수정
    Route::patch('/{id}/password', [UserController::class, 'updatePassword']); // 비밀번호 수정
    Route::delete('/{id}', [UserController::class, 'destroy']);       // 사용자 삭제
});
Route::post('/users', [UserController::class, 'signUp']);
Route::get('/users', [UserController::class, 'getAllUsers']);
Route::get('/posts', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/comments', [App\Http\Controllers\UserController::class, 'index']);

