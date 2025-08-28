@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-8">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('posts.index') }}">Berita</a>
                    </li>
                    @if($post->category)
                    <li class="breadcrumb-item">
                        <a href="{{ route('posts.byCategory', $post->category) }}">
                            {{ $post->category->name }}
                        </a>
                    </li>
                    @endif
                    <li class="breadcrumb-item active">{{ Str::limit($post->title, 50) }}</li>
                </ol>
            </nav>

            <!-- Article -->
            <article>
                <header class="mb-4">
                    <h1>{{ $post->title }}</h1>

                    <div class="text-muted mb-3">
                        @if($post->category)
                        <span class="badge bg-primary me-2">{{ $post->category->name }}</span>
                        @endif
                        <i class="fas fa-calendar"></i>
                        {{ $post->created_at->format('d F Y') }}
                        <i class="fas fa-clock ms-2"></i>
                        {{ $post->created_at->format('H:i') }} WIB
                    </div>
                </header>

                @if($post->image)
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $post->image) }}"
                        alt="{{ $post->title }}"
                        class="img-fluid rounded">
                </div>
                @endif

                <div class="post-content">
                    {!! nl2br(e($post->content)) !!}
                </div>

                <!-- Additional Images -->
                @if($post->images->count() > 0)
                <div class="mt-4">
                    <h5>Gambar Lainnya</h5>
                    <div class="row">
                        @foreach($post->images as $image)
                        <div class="col-md-4 mb-3">
                            <img src="{{ asset('storage/' . $image->image) }}"
                                alt="Gambar {{ $loop->iteration }}"
                                class="img-fluid rounded">
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </article>

            <!-- Navigation -->
            <div class="mt-5 pt-4 border-top">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali ke Daftar Berita
                        </a>
                    </div>
                    @if($post->category)
                    <div class="col-md-6 text-end">
                        <a href="{{ route('posts.byCategory', $post->category) }}" class="btn btn-outline-primary">
                            Berita {{ $post->category->name }} Lainnya <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
            <!-- Related Posts -->
            @if($post->category)
            @php
            $relatedPosts = App\Models\Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->published()
            ->latest()
            ->take(5)
            ->get();
            @endphp

            @if($relatedPosts->count() > 0)
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Berita Terkait</h5>
                </div>
                <div class="card-body">
                    @foreach($relatedPosts as $related)
                    <div class="mb-3 pb-2 @if(!$loop->last) border-bottom @endif">
                        <h6>
                            <a href="{{ route('posts.show', $related) }}" class="text-decoration-none">
                                {{ Str::limit($related->title, 60) }}
                            </a>
                        </h6>
                        <small class="text-muted">
                            {{ $related->created_at->format('d M Y') }}
                        </small>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
            @endif

            <!-- Categories -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Kategori</h5>
                </div>
                <div class="card-body">
                    @foreach(App\Models\Category::withCount('posts')->get() as $category)
                    <a href="{{ route('posts.byCategory', $category) }}"
                        class="d-block text-decoration-none mb-2 @if($post->category_id == $category->id) fw-bold @endif">
                        {{ $category->name }}
                        <span class="badge bg-light text-dark">{{ $category->posts_count }}</span>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection