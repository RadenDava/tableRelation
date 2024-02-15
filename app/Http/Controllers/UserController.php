<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * menampilkan ke view
     * 
     * @return void
     */
    public function index(){
        $users = User::latest()->get();

        return view('users', compact('users'));
    }
}
