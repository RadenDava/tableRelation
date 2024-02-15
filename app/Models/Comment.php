<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * relasi ke table post
     * 
     * @return void
     */
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
