@extends('layout.main')

@section('content')
    <div class="movies-container">
        @foreach ($movies as $movie )
            <h2 class="text-warning">Titolo: {{ $movie->title }}</h2>
        @endforeach
        <a href="{{ route('home') }}" class="btn btn-warning fw-bold">Home</a>
    </div>
@endsection
