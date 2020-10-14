@extends('layouts.app')
@section('title', 'Agregar peliculas')
@section('content')    

<div class="container">
    <div class="col"><h1>Formulario para registrar nueva pelicula</h1></div>
    <div class="col"></div>
    <div class="col"><a href=" {{route('movies.index') }} ">Cancelar</a></div>


    <div class="jumbotron">
        <form method="post" action="{{ route('movies.store') }}">

            @csrf
            <div>
                <label for="">Pelicula:</label>
                <input class="form-control" placeholder="Ingrese el nombre de la pelicula" type="text" name="name" id="" maxlength="200" minlength="2" required>
            </div>
    
            <div>
                <label for="">Sinopsis</label>
                <textarea class="form-control" placeholder="Agregue la sinopsis" name="synopsis" id="" cols="30" minlength="10" rows="5"></textarea>
            </div>

            <div>
                <label for="">Categoria:</label>

                <select class="form-control" name="category" id="">
                    <option value="">Elija una categoria</option>
                    <option value="Estrenos">Estrenos</option>
                    <option value="Trilogias">Trilogias</option>
                    <option value="Las mas vistas">Las mas vistas</option>
                </select>
            </div>

            <div>
                <label for="">Director:</label>
                <input class="form-control" placeholder="Director" type="text" name="director" required maxlength="100">
            </div>

            <div>
                <label for="">Duracion en horas</label>
                <input class="form-control" type="text" name="duration" id="" required maxlength="30">
            </div>

            <div>
                <label for="">Actores:</label>
                <textarea class="form-control" name="actors" id="" cols="30" required rows="10"></textarea>
            </div>

            <div>
                <label for="">Genero:</label>
                <select class="form-control" name="genre" id="">
                    <option value="">Eliga el genero</option>
                    <option value="Terror">Terror</option>
                    <option value="Accion">Accion</option>
                    <option value="Fantacia">Fantacia</option>
                    <option value="Infatil">Infatil</option>
                    <option value="Ciencia Ficcion">Ciencia Ficcion</option>
                </select>
            </div>
            <br><br>
            <input class="btn btn-primary" type="submit" value="Guardar">

        </form>
    </div>
</div>
@endsection