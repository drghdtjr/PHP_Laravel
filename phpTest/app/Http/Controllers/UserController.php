<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Users",
 *     description="User management API"
 * )
 */
class UserController extends Controller
{
    /**
     * @OA\Post(
     *     path="/users",
     *     tags={"Users"},
     *     summary="회원가입",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name","email","password"},
     *             @OA\Property(property="name", type="string", example="홍길동"),
     *             @OA\Property(property="email", type="string", format="email", example="test@example.com"),
     *             @OA\Property(property="password", type="string", format="password", example="password123")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="회원가입 성공",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="회원가입 성공"),
     *             @OA\Property(property="user", type="integer", example=1)
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="잘못된 요청",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="입력값 오류")
     *         )
     *     )
     * )
     */
    public function signUp(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return response()->json(['message' => '회원가입 성공', 'user' => $user->id], 201);

    }
    /**
     * @OA\Get(
     *     path="/users",
     *     tags={"Users"},
     *     summary="유저 전체 조회",
     *     description="가입된 모든 유저의 id, 이름, 이메일, 생성일자 조회",
     *     @OA\Response(
     *         response=200,
     *         description="유저 리스트 반환",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(
     *                 type="object",
     *                 @OA\Property(property="id", type="integer", example=1),
     *                 @OA\Property(property="name", type="string", example="홍길동"),
     *                 @OA\Property(property="email", type="string", example="test@example.com"),
     *                 @OA\Property(property="created_at", type="string", format="date-time", example="2025-05-31T12:00:00Z")
     *             )
     *         )
     *     )
     * )
     */
    public function getAllUsers()
    {
        $users = User::all(['id', 'name', 'email', 'created_at']);
        return response()->json($users);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


//Route::prefix('users')->group(function () {
//    Route::post('/', [UserController::class, 'store']);               // 회원가입
//    Route::get('/', [UserController::class, 'index']);                // 전체 사용자 조회
//    Route::get('/{id}', [UserController::class, 'show']);             // 단일 사용자 조회
//    Route::put('/{id}', [UserController::class, 'update']);           // 정보 수정
//    Route::patch('/{id}/password', [UserController::class, 'updatePassword']); // 비밀번호 수정
//    Route::delete('/{id}', [UserController::class, 'destroy']);       // 사용자 삭제
//});
