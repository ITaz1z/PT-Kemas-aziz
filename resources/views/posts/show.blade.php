@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            {{-- Judul --}}
            <h1 class="mb-3">{{ $post->title }}</h1>

            {{-- Info kategori & tanggal --}}
            <p class="text-muted">
                @if ($post->category)
                Kategori:
                <a href="{{ route('posts.byCategory', $post->category->slug) }}" class="text-decoration-none">
                    {{ $post->category->name }}
                </a>
                @else
                Kategori: -
                @endif
                • {{ $post->created_at->format('d M Y') }}
            </p>

            {{-- Gambar thumbnail --}}
            @if ($post->image)
            <div class="text-center">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                    class="img-fluid mb-4 rounded shadow"
                    style="max-width: 900px; width: 100%; height: auto;">
            </div>
            @endif

            {{-- Isi konten --}}
            <article class="fs-5" style="line-height: 1.7;">
                {!! nl2br(e($post->content)) !!}
            </article>

            {{-- Galeri Tambahan --}}
            @if ($post->images->count())
            <h5 class="mt-5">Galeri Tambahan:</h5>
            <div class="gallery-grid">
                @foreach ($post->images as $image)
                <div class="gallery-grid-item">
                    <img src="{{ asset('storage/' . $image->image) }}" alt="Foto tambahan" class="img-fluid">
                </div>
                @endforeach
            </div>
            @endif
            {{-- Tombol kembali --}}
            <div class="mt-4">
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">← Kembali ke Berita</a>
            </div>

        </div>
    </div>
</div>
@endsection