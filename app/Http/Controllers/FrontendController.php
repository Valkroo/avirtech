<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('index', [
            'title' => 'Landing Page'
        ]);
    }

    public function about()
    {
        return view('about', [
            "title" => "About Us"
        ]);
    }

    public function contact()
    {
        return view('contact', [
            "title" => "Contact Us" 
        ]);
    }

    public function careers()
    {
        return view('careers', [
            "title" => "Careers"
        ]);
    }

    public function blog()
    {
        return view('blog', [
            "title" => "Blog Post",
            "posts" => Posts::all()
        ]);
    }

    public function post(Posts $posts)
    {
        return view('post', [
            "title" => "Detail Post",
            "post" => $posts
        ]);
    }

    public function dashboard()
    {
        return view('admin.index');
    }
}
