@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
<h1 class="mb-4">Galeri</h1>
<div class="row">
    @foreach($galleries as $gallery)
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="{{ asset('images/' . $gallery->image) }}" class="card-img-top" alt="{{ $gallery->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $gallery->title }}</h5>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection