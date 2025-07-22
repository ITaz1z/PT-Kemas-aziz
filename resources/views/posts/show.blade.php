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
                Kategori:
                <a href="{{ route('posts.byCategory', $post->category->slug) }}" class="text-decoration-none">
                    {{ $post->category->name ?? '-' }}
                </a>
                • Diterbitkan:
                {{ $post->created_at ? $post->created_at->format('d M Y') : '-' }}
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

            {{-- Tombol kembali --}}
            <div class="mt-4">
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">← Kembali ke Berita</a>
            </div>

        </div>
    </div>
</div>
@endsection