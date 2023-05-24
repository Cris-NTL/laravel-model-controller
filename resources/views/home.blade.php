@extends('layouts.app')

@section('content')
    <div class="row row-cols-5 g-3">
        @foreach ($movies as $movie)
            <div class="col">
                <div class="card border-0 mb-3">
                    <div class="img">
                        <img src="{{ $movie->image }}" alt="poster">
                    </div>
                    <div class="card-body p-0">
                        <p>{{ $movie->title }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
