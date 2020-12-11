@extends('layouts.app')

@section('title', 'Ver detalles de película')

@section('content')

<br>
        <div class="container">
            <div class="card col-sm bg-light mb-8" style="width: 30rem;">
                <div class="card-body">
                    <h4 class="card-title">{{ $movie->name }}</h4>
                    <h3 class="card-text">{{ $movie->director }}</h3>
                    <p class="card-text">{{ $movie->category }}</p>
                    <p class="card-text">{{ $movie->genre }}</p>
                    <p class="card-text">{{ $movie->synopsis }}</p>
                    <p class="card-text">Actores: {{ $movie->actors }}</p>
                    <p class="card-text text-muted">{{ $movie->duration }}Hrs</p>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
                        <a class="btn btn-info" href="{{ route('movies.index', $movie->id) }}">Volver</a>
                    </form>


                </div>
            </div>
        </div>
        
        <br>

@endsection
