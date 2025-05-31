<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    protected $table = 'users';  // 명시 안 해도 기본적으로 모델 이름 복수형 테이블과 연결됨

    protected $fillable = ['name', 'email', 'password'];  // 대량 할당 허용 컬럼

    public function posts()
    {
        return $this->hasMany(Post::class);  // User가 여러 Post를 가짐
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
