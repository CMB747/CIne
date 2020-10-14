@extends('layouts.app')


<link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">



@section('content')

    <div class="col-12">
      @include('layouts.carousel')
    </div>

    <div class="row">
        <div class="col-1 bg-info">|</div>
        <div class="col-1 bg-primary">|</div>
        <div class="col-1 bg-info">|</div>
        <div class="col-1 bg-primary">|</div>
        <div class="col-1 bg-info">|</div>
        <div class="col-1 bg-primary">|</div>
        <div class="col-1 bg-info">|</div>
        <div class="col-1 bg-primary">|</div>
        <div class="col-1 bg-info">|</div>
        <div class="col-1 bg-primary">|</div>
        <div class="col-1 bg-info">|</div>
        <div class="col-1 bg-primary">|</div>
    </div>

    <div class="row">
        <div class="col-1"></div>
        <div class="col-md-5">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Bumblebee</h3>
              <div class="mb-1 text-muted">Dic 03</div>
              <p class="card-text mb-auto">En 1987, Charlie, una adolescente, encuentra a Bumblebee, muy herido, en el depósito de chatarra al que había llegado mientras huía. Mientras lo restaura, Charlie percibe que lo que ha hallado no es un Volkswagen amarillo corriente.</p>
              <a href="{{ url('/movies') }}" class="stretched-link">
                <button class="btn btn-info btn-sm">Leer más</button></a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/b.jpg') }}" style="height: 300px">
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Spider-Man: Un nuevo universo</h3>
              <div class="mb-1 text-muted">Dic 01</div>
              <p class="card-text mb-auto">Luego de ser mordido por una araña radioactiva, el joven Miles Morales desarrolla misteriosos poderes que lo transforman en el Hombre Araña. Ahora deberá usar sus nuevas habilidades ante el malvado Kingpin, un enorme demente que puede abrir portales hacia otros universos.</p>
              <a href="{{ url('/movies') }}" class="stretched-link">
                <button class="btn btn-info btn-sm">Leer más</button></a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/s.jpg') }}" style="height: 300px">
            </div>
          </div>
        </div>
        <div class="col-1"></div>
        <div class="col-1"></div>
        <div class="col-md-5">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Tenet</h3>
              <div class="mb-1 text-muted">Jul 23</div>
              <p class="card-text mb-auto">Una acción épica que gira en torno al espionaje internacional, los viajes en el tiempo y la evolución, en la que un agente secreto debe prevenir la Tercera Guerra Mundial.</p>
              <a href="{{ url('/movies') }}" class="stretched-link">
                <button class="btn btn-info btn-sm">Leer más</button></a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/t.jpg') }}" style="height: 300px">
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Mulán</h3>
              <div class="mb-1 text-muted">Mar 01</div>
              <p class="card-text mb-auto">El emperador chino emite un decreto que exige reclutar a un varón de cada familia para luchar con el ejército imperial. Para salvar a su anciano padre de este deber, su única hija Fa Mulán se hace pasar por soldado y toma su lugar.</p>
              <a href="{{ url('/movies') }}" class="stretched-link">
                <button class="btn btn-info btn-sm">Leer más</button></a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/m.jpg') }}" style="height: 300px">
            </div>
          </div>
        </div>
        <div class="col-1"></div>
        <div class="col-1"></div>
        <div class="col-md-5">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Los nuevos mutantes</h3>
              <div class="mb-1 text-muted">Sep 03</div>
              <p class="card-text mb-auto">La historia se centra en los Nuevos Mutantes, un grupo de mutantes formado por los primeros graduados en la escuela de Charles Xavier.</p>
              <a href="{{ url('/movies') }}" class="stretched-link">
                <button class="btn btn-info btn-sm">Leer más</button></a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/n.jpg') }}" style="height: 300px">
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Estación zombie 2: península</h3>
              <div class="mb-1 text-muted">Jul 15</div>
              <p class="card-text mb-auto">Cuatro años después de la epidemia zombi, Corea sigue infestada de monstruos y el soldado Jung-seok, que escapó del país, se ve obligado a regresar a Seúl para recuperar un objeto valioso. Allí descubre que hay, todavía, personas sanas en la ciudad.</p>
              <a href="{{ url('/movies') }}" class="stretched-link">
                <button class="btn btn-info btn-sm">Leer más</button></a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/e.jpg') }}" style="height: 300px">
            </div>
          </div>
        </div>
        <div class="col-1"></div>
    </div>

<!-- Agregar JavaScript -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

@endsection