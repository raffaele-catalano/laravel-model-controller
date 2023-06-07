@extends('layout.main')

@section('content')
    <div class="movies-container">
        <h2 class="text-warning text-center fw-bold">Movies</h2>
        <div class="row row-cols-5 gy-2 mb-3">
            @foreach ($movies as $movie)
                <div class="card bg-dark text-light p-3">
                    <img src="{{ $movie->img_path }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-title">Titolo Originale: {{ $movie->original_title }}</h6>
                        <p class="card-title">Nazionalità: {{ $movie->nationality }}</p>
                        <p class="card-title">Data di Uscita: {{ $movie->date }}</p>
                        <p class="card-title">Voto: {{ $movie->vote }}</p>
                    </div>
                    <a href="#" class="btn btn-details btn-warning w-50">Dettagli</a>
                </div>
            @endforeach
        </div>
        <a href="{{ route('home') }}" class="btn btn-home btn-danger fw-bold my-3">Home</a>
    </div>
@endsection
