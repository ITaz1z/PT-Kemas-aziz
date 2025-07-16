@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Tim Kami</h1>
    <div class="row">
        @foreach($teams as $team)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                @if($team->photo)
                <img src="{{ asset('images/' . $team->photo) }}" class="card-img-top" alt="{{ $team->name }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $team->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $team->position }}</h6>
                    <p class="card-text">{{ $team->bio }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection