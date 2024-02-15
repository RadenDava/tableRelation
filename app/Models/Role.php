<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * Relasi ke User lewat 3rd Party user_role
     * 
     * @return void
     */
    public function  user(){
        return $this->belongsToMany(User::class, 'user_roles');
    }
}
