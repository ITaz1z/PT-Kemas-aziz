@extends('layouts.app')

@section('title', 'Kategori: ' . $category->name)

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Kategori: {{ $category->name }}</h2>

    <div class="row">
        @forelse($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid my-4">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text small text-muted">
                        {{ $post->created_at ? $post->created_at->format('d M Y') : 'Tanggal tidak tersedia' }}
                    </p>
                    <a href="{{ route('posts.show', $post->slug) }}" class="btn btn-sm btn-outline-primary mt-2">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center">
            <p class="text-muted">Belum ada berita di kategori ini.</p>
        </div>
        @endforelse
    </div>

    <div class="mt-4">
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">← Kembali ke Semua Berita</a>
    </div>
</div>
<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>
@endsection