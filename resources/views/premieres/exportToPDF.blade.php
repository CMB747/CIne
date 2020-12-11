@extends('layout.layout')
@section('content')
<div>
    <h1>Funciones Registradas</h1>
</div>

<table class="table-container">
    <thead>
        <tr>
            <th>ID </th>
            <th>Inicio </th>
            <th>Final </th>
            <th>Disponible </th>
            <th>Turno </th>
        </tr>
    </thead>
    @foreach ($premieres as $premiere)
    <tbody>
        <tr>
            <th>{{$premiere->id}}</th>
            <th>{{$premiere->start}}</th>
            <th>{{$premiere->end}}</th>
            <th>{{$premiere->available}}</th>
            <th>{{$premiere->type}}</th>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection