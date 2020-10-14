@extends('layouts.app')
@section('title', 'Entradas')
@section('content')    

<div class="container">
    <div class="col"><h1>Formulario para registrar nueva entrada</h1></div>
    <div class="col"></div>
    <div class="col"><a href=" {{route('entrances.index') }} ">Cancelar</a></div>

    <div class="jumbotron">
        <form method="post" action="{{ route('entrances.store') }}">

            @csrf
            <div class="col-4">
                <label for="">Precio:</label>
                <input class="form-control" placeholder="Ingrese el pricio de la entrada" type="text" name="price" id="" required>
            </div>

            <div class="col-4">
                <label for="">Hora de entrada:</label>
                <input class="form-control" placeholder="Hora de entrada" type="text" name="hourEntrance" required>
            </div>
    
            <div class="col-4">
                <label for="">Fecha:</label>
                <input class="form-control" type="date" name="date" required>
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