@extends('layouts.app')
@section('title', 'Funciones')
@section('content')    

<div class="container">
    <div class="col"><h1>Formulario para registrar funciones</h1></div>
    <div class="col"></div>
    <div class="col"><a href=" {{route('premieres.index') }} ">Cancelar</a></div>

    <div class="jumbotron">
        <form method="post" action="{{ route('premieres.store') }}">

            @csrf
            <div class="col-4">
                <label for="">Inicio de función:</label>
                <input class="form-control" type="datetime-local" name="start" id="" required>
            </div>

            <div class="col-4">
                <label for="">Final de función:</label>
                <input class="form-control" type="datetime-local" name="end" id="" required>
            </div>
    
            <div class="col-4">
                <label for="">Disponible:</label>
                <select class="form-control" name="available" id="">
                    <option value="">Elija una opción</option>
                    <option value="Disponible">Disponible</option>
                    <option value="No disponible">No disponble</option>
                </select>
            </div>

            <div class="col-4">
                <label for="">Turno:</label>
                <select class="form-control" name="type" id="">
                    <option value="">Elija un turno</option>
                    <option value="Mañana">Mañana</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noche">Noche</option>
                </select>
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