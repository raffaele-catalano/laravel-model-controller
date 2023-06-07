@extends('layout.main')

@section('content')
        <div class="container py-3">
            <h1 class="py-2">{{ $title }}</h1>
            <p>
                {{ $text }}
            </p>
            <a href="{{ route('movies') }}" class="btn btn-warning fw-bold">Go To Movies List</a>
        </div>
@endsection
