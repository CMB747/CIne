@extends('layouts.app')
@section('title', 'Peliculas')
@section('content')
    
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Duración</th>
            <th scope="col">Sinopsis</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
            <br>
        @forelse ($movies as $movie)
          <tr>
            <th scope="row">{{$movie->name}} </th>
            <td>{{$movie->duration}}</td>
            <td>{{$movie->synopsis}} </td>
            <td>
                <div class="btn-group btn-grup-sm" role="group" aria-label="Basic example">
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
                        <a class="btn btn-info" href="{{ route('movies.show', $movie->id) }}">Ver</a>
                        <a class="btn btn-secondary" href="{{ route('movies.edit', $movie->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                  </div>
            </td>
          </tr>
          @empty  
            <h3>No hay datos</h3>
          @endforelse
        </tbody>
      </table>
@endsection