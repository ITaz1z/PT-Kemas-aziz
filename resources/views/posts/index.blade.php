@extends('layouts.app')

@section('title', 'Berita')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Berita Terbaru</h1>

    {{-- Form Pencarian --}}
    <form method="GET" action="{{ route('posts.index') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari berita..." value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Cari</button>
        </div>
    </form>

    {{-- Tampilkan jika ada hasil --}}
    @if($posts->count())
    <div class="row g-4">
        @foreach($posts as $post)
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid my-4">
                @endif
                <div class="card-body d-flex flex-column">
                    <small class="text-muted mb-2">{{ $post->category->name ?? 'Tanpa Kategori' }}</small>
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                    <a href="{{ route('posts.show', $post->slug) }}" class="mt-auto btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <p class="text-muted">Tidak ada berita yang ditemukan.</p>
    @endif
</div>
@endsection