@extends('layouts.app')
@section('title', 'Salas')
@section('content')    

<div class="container">
    <div class="col"><h1>Formulario para registrar nueva sala</h1></div>
    <div class="col"></div>
    <div class="col"><a href=" {{route('rooms.index') }} ">Cancelar</a></div>

    <div class="jumbotron">
        <form method="post" action="{{ route('rooms.store') }}">

            @csrf
            <div class="col-4">
                <label for="">Num. Sillas:</label>
                <input value="{{ $room->chairs }}" class="form-control" type="number" name="chairs" id="" required>
            </div>

            <div class="col-4">
                <label for="">Ubicacion:</label>
                <input value="{{ $room->location }}" class="form-control" placeholder="Ubicacion" type="text" name="location" required>
            </div>
    
            <div class="col-4">
                <label for="">Capacidad:</label>
                <input value="{{ $room->capacity }}" class="form-control" type="number" name="capacity" id="" required>
            </div>

            <br><br>
            <div class="text-center">
                <input class="btn btn-info" type="reset" value="Restablecer">
                <input class="btn btn-primary" type="submit" value="Guardar">
            </div>

        </form>
    </div>
</div>
@endsection