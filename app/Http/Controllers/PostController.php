<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
        return view('blog', [
            "title" => "Blog Post",
            "posts" => Posts::all()
        ]);
    }

    public function index(Posts $post)
    {
        return view('post', [
            "title" => "Detail Post",
            "post" => $post
        ]);
    }
}
