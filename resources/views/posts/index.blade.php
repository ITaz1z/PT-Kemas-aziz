@extends('layouts.app')

@section('title', 'Daftar Berita')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-8">
            <h1 class="mb-4">Daftar Berita</h1>

            <!-- Search Form -->
            <form method="GET" class="mb-4">
                <div class="input-group">
                    <input type="text" name="search" class="form-control"
                        placeholder="Cari berita..." value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit">
                        <i class="fas fa-search"></i> Cari
                    </button>
                    @if(request('search'))
                    <a href="{{ route('posts.index') }}" class="btn btn-outline-danger">
                        <i class="fas fa-times"></i>
                    </a>
                    @endif
                </div>
            </form>

            @if(request('search'))
            <p class="text-muted mb-3">
                Hasil pencarian untuk: <strong>"{{ request('search') }}"</strong>
                ({{ $posts->total() }} hasil)
            </p>
            @endif

            <!-- Posts List -->
            @forelse ($posts as $post)
            <article class="mb-4 pb-3 border-bottom">
                <div class="row">
                    @if($post->image)
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $post->image) }}"
                            alt="{{ $post->title }}"
                            class="img-fluid rounded">
                    </div>
                    <div class="col-md-8">
                        @else
                        <div class="col-12">
                            @endif
                            <h3>
                                <a href="{{ route('posts.show', $post) }}" class="text-decoration-none">
                                    {{ $post->title }}
                                </a>
                            </h3>

                            <div class="text-muted mb-2 small">
                                @if($post->category)
                                <span class="badge bg-secondary me-2">
                                    <a href="{{ route('posts.byCategory', $post->category) }}"
                                        class="text-white text-decoration-none">
                                        {{ $post->category->name }}
                                    </a>
                                </span>
                                @endif
                                <i class="fas fa-calendar"></i>
                                {{ $post->created_at->format('d M Y') }}
                                <i class="fas fa-clock ms-2"></i>
                                {{ $post->created_at->format('H:i') }}
                            </div>

                            <p class="text-muted">{{ $post->excerpt }}</p>

                            <a href="{{ route('posts.show', $post) }}" class="btn btn-primary btn-sm">
                                Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
            </article>
            @empty
            <div class="text-center py-5">
                <i class="fas fa-newspaper fa-5x text-muted mb-3"></i>
                <h4>Tidak ada berita ditemukan</h4>
                @if(request('search'))
                <p class="text-muted">Coba kata kunci lain atau</p>
                <a href="{{ route('posts.index') }}" class="btn btn-primary">
                    Lihat Semua Berita
                </a>
                @else
                <p class="text-muted">Belum ada berita yang dipublikasikan.</p>
                @endif
            </div>
            @endforelse

            <!-- Pagination -->
            @if($posts->hasPages())
            <div class="d-flex justify-content-center">
                {{ $posts->appends(request()->query())->links() }}
            </div>
            @endif
        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Kategori</h5>
                </div>
                <div class="card-body">
                    @forelse(App\Models\Category::withCount('posts')->get() as $category)
                    <a href="{{ route('posts.byCategory', $category) }}"
                        class="d-block text-decoration-none mb-2">
                        {{ $category->name }}
                        <span class="badge bg-light text-dark">{{ $category->posts_count }}</span>
                    </a>
                    @empty
                    <p class="text-muted mb-0">Belum ada kategori.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection