@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-3">{{ $post->title }}</h1>

    @if($post->image)
    <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid mb-4">
    @endif

    <p>{{ $post->content }}</p>

    <a href="{{ route('posts') }}" class="btn btn-secondary mt-3">← Kembali ke Berita</a>
</div>
@endsection