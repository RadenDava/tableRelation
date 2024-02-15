<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * relasi ke table comment
     * 
     * @return void
     */
    public function comments(){
        return $this->hasMany((Comment::class));
    }
}
