@extends('layouts.app')
@section('title', 'Peliculas')
@section('content')   
 
<div class="text-right"><a href=" {{route('movies.create') }} "> 
    <button class="btn btn-primary">Agregar</button></a>
</div>

<div class="container">

    <div class="text-center">
        <h1>Peliculas Registradas</h1>
    </div>
    <div class="col"></div>

    @forelse ($movies as $movie)
    <div class="row">
        <div class="card col-sm text-white bg-primary mb-3" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $movie->name }}</h5>
            <p class="card-text"> {{$movie->director}} </p>
            <p class="card-text">{{ $movie->synopsis }}</p>
            <p class="card-text text-warning">{{$movie->duration}}Hrs</p>
            <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
                <a class="btn btn-info" href="{{ route('movies.show', $movie->id) }}">Ver</a>
                <a class="btn btn-secondary" href="{{ route('movies.edit', $movie->id) }}">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
      </div>
    </div>

    @empty

        <h1>No hay peliculas registradas en este momento</h1>
        
    @endforelse

    {{$movies->links()}}

</div>   

@endsection