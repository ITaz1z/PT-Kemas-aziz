@extends('layouts.app')

@section('title', 'Layanan Kami')

@section('content')
<h1 class="mb-4">Layanan Kami</h1>
<div class="row">
    @foreach($services as $service)
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $service->title }}</h5>
                <p class="card-text">{{ $service->description }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection