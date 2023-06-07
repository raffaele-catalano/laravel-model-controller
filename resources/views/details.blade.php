@extends('layout.main')

@section('content')
    <div class="card bg-dark text-light p-3">
        <div class="card-details-img">
            <img src="{{ $movies->img_path }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h4 class="card-title">{{ $movies->title }}</h4>
            <h5 class="card-title">Titolo Originale: {{ $movies->original_title }}</h5>
            <p class="card-title">Nazionalità: {{ $movies->nationality }}</p>
            <p class="card-title">Data di Uscita: {{ $movies->date }}</p>
            <p class="card-title">Voto: {{ $movies->vote }}</p>
        </div>
        <a href="{{ route('movies') }}" class="btn btn-movies-details btn-warning w-50">Go To Movies List</a>
    </div>
@endsection
