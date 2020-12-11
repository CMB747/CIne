@extends('layout.layout')
@section('content')
    <div>
        <h1>Peliculas Registradas</h1>
    </div>

    <table class="table-container">
        <thead>
            <tr>
                <th>ID </th>
                <th>NOMBRE </th>
                <th>CATEGORIA </th>
                <th>DIRECTOR </th>
                <th>DURACION </th>
                <th>ACTORES </th>
                <th>GENEROS </th>
            </tr>
        </thead>
        @foreach ($movies as $movie)
        <tbody>
            <tr>
                <th>{{$movie->id}}</th>
                <th>{{$movie->name}}</th>
                <th>{{$movie->category}}</th>
                <th>{{$movie->director}}</th>
                <th>{{$movie->duration}}</th>
                <th>{{$movie->actors}}</th>
                <th>{{$movie->genre}}</th>
            </tr>
        </tbody>
        @endforeach
    </table>

@endsection