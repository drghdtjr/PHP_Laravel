<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['user_id', 'title', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);  // Post는 한 명의 User 소유
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
