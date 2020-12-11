@extends('layout.layout')
@section('content')
<div>
    <h1>Entradas Registradas</h1>
</div>

<table class="table-container">
    <thead>
        <tr>
            <th>ID </th>
            <th>Hora de entrada </th>
            <th>Precio </th>
            <th>Fecha </th>
        </tr>
    </thead>
    @foreach ($entrances as $entrance)
    <tbody>
        <tr>
            <th>{{$entrance->id}}</th>
            <th>{{$entrance->hourEntrance}}</th>
            <th>{{$entrance->price}}</th>
            <th>{{$entrance->date}}</th>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection