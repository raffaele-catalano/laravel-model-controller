@extends('layout.main')

@section('content')
    <div class="movies-container">
        <h2 class="text-center fw-bold">Movies</h2>
        <div class="row row-cols-5 gy-2 mb-3">
            @foreach ($movies as $movie)
                <div class="card bg-dark text-light p-3">
                    <img src="{{ $movie->img_path }}" class="card-img-top mb-4" alt="...">
                    <a href="{{ route('details', ['slug' => $movie->slug]) }}" class="btn btn-details btn-warning w-50">Dettagli</a>
                </div>
            @endforeach
        </div>
        <a href="{{ route('home') }}" class="btn btn-home btn-danger fw-bold my-3">Home</a>
    </div>
@endsection
