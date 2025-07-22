<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    // Tampilkan semua berita (dengan fitur pencarian)
    public function index(Request $request)
    {
        $query = Post::with('category')->latest();

        if ($search = $request->query('search')) {
            $query->where('title', 'like', "%{$search}%")
                ->orWhere('content', 'like', "%{$search}%");
        }

        $posts = $query->paginate(6);

        return view('posts.index', compact('posts'));
    }

    // Tampilkan detail berita berdasarkan slug
    public function show(Post $post)
    {
        $post->loadMissing(['images', 'category']); // Pastikan eager loading kalau belum
        return view('posts.show', compact('post'));
    }

    // Berita berdasarkan kategori
    public function byCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->latest()->paginate(6);

        return view('posts.by-category', compact('category', 'posts'));
    }

    // Simpan berita baru
    public function store(StorePostRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('posts', 'public');
        }

        $data['slug'] = Post::generateUniqueSlug($request->title);

        $post = Post::create($data);

        return redirect()->route('posts.index')->with('success', 'Berita berhasil ditambahkan.');
    }
}
