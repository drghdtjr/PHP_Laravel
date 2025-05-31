<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    public function rules() // 유효성 검사
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ];
    }
}
