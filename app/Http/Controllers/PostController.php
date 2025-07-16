<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
    public function csr()
    {
        return view('posts.csr'); // Buat file ini di folder posts
    }

    public function donasi()
    {
        return view('posts.donasi');
    }

    public function family()
    {
        return view('posts.family');
    }

    public function pelatihan()
    {
        return view('posts.pelatihan');
    }
    public function filterByCategory($id)
    {
        $posts = Post::where('category_id', $id)->get();
        return view('posts.index', compact('posts'));
    }
    public function byCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = Post::where('category_id', $category->id)->get();

        return view('posts.index', [
            'posts' => $posts,
            'category' => $category,
        ]);
    }
}
