@extends('layout.layout')
@section('content')
<div>
    <h1>Salas Registradas</h1>
</div>

<table class="table-container">
    <thead>
        <tr>
            <th>ID </th>
            <th>Num: Sillas </th>
            <th>Ubicacion </th>
            <th>Capacidad </th>
        </tr>
    </thead>
    @foreach ($rooms as $room)
    <tbody>
        <tr>
            <th>{{$room->id}}</th>
            <th>{{$room->chairs}}</th>
            <th>{{$room->location}}</th>
            <th>{{$room->capacity}}</th>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection