<?php

namespace App\Http\Controllers\adminControllers;
use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DashboardPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.post.index', [
            'posts' => Posts::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:225',
            'slug' => 'required|unique:posts',
            'body' => 'required'
        ]);

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');
        Posts::create($validatedData);

        return redirect('/dashboard/post')->with('success', 'New Post Has Been Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $post)
    {
        return view('admin.post.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $post)
    {
        return view('admin.post.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posts $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required'
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData= $request->validate($rules);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');

        Posts::where('id', $post->id)
                ->update($validatedData);

        return redirect('/dashboard/post')->with('success', 'New Post Has Been Updated!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $post)
    {
        Posts::destroy($post->id);

        return redirect('/dashboard/post')->with('success', 'Post Has Been Deleted');
    }

    public function Slug(Request $request)
    {
        $slug = SlugService::createSlug(Posts::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
