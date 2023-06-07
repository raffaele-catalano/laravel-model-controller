@extends('layout.main')

@section('content')
        <div class="container py-3">
            <div class="logo-container mb-3">
                <img src="/moviedb_logo.png" alt="logo">
            </div>
            <h1 class="text-center py-2">{{ $title }}</h1>
            <p class="mb-3">
                {{ $text }}
            </p>
            <a href="{{ route('movies') }}" class="btn btn-movies btn-warning w-25 fw-bold">Go To Movies List</a>
        </div>
@endsection
