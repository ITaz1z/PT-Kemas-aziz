@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">PT Kemas</h1>

    <h5><strong>Deskripsi:</strong></h5>
    <p>{{ $company->description }}</p>

    <h5><strong>Visi:</strong></h5>
    <p>{{ $company->vision }}</p>

    <h5><strong>Misi:</strong></h5>
    <p>{{ $company->mission }}</p>

    <h5><strong>Kontak:</strong></h5>
    <p>Alamat: {{ $company->address }}</p>
    <p>Telepon: {{ $company->phone }}</p>
    <p>Email: {{ $company->email }}</p>
</div>
@endsection