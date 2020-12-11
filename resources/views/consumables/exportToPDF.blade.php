@extends('layout.layout')
@section('content')
<div>
    <h1>Alimentos Registrados</h1>
</div>

<table class="table-container">
    <thead>
        <tr>
            <th>ID </th>
            <th>Articulo </th>
            <th>Precio </th>
            <th>Cantidad </th>
        </tr>
    </thead>
    @foreach ($consumables as $consumable)
    <tbody>
        <tr>
            <th>{{$consumable->id}}</th>
            <th>{{$consumable->name}}</th>
            <th>{{$consumable->price}}</th>
            <th>{{$consumable->quantity}}</th>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection