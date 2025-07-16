{{-- resources/views/posts/index.blade.php --}}
@extends('layouts.app')

@section('content')

@if(isset($category))
<h2 class="mb-4">Kategori: {{ $category->name }}</h2>
@endif

<div class="container mt-5">
    <h1 class="mb-4">Berita Terbaru</h1>

    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow">
                @if($post->image)
                <img src="{{ asset('images/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ \Illuminate\Support\Str::limit($post->content, 100) }}</p>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection