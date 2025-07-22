<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    // Tampilkan semua berita (dengan fitur pencarian)
    public function index(Request $request)
    {
        $query = Post::with('category')->latest();

        // Fitur pencarian
        if ($search = $request->query('search')) {
            $query->where('title', 'like', "%{$search}%")
                ->orWhere('content', 'like', "%{$search}%");
        }

        $posts = $query->paginate(6);

        return view('posts.index', compact('posts'));
    }

    // Detail berita berdasarkan slug
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->with('category')->firstOrFail();
        return view('posts.show', compact('post'));
    }

    // Tampilkan berita berdasarkan kategori
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

        // Upload gambar jika ada
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('posts', 'public');
        }

        // Generate slug unik
        $data['slug'] = Post::generateUniqueSlug($request->title);

        // Simpan ke database
        Post::create($data);

        return redirect()->route('posts.index')->with('success', 'Berita berhasil ditambahkan.');
    }
}
