<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index(){
        //* variable posts bikinan kita adalah data Post yg sudah di urutkan dari yg Latest
        $posts = Post::latest()->get();

        //* stlah get data Post yg sdh di ambil berdasarkan Latest, dan skarang tersimpan di wadah variable posts
        //* kite lanjut tembakin variable posts ke view
        return view('posts', compact( 'posts'));

    }
}
