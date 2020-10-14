<div>
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>    
    
    <div id="myCarousel" class="carousel slide carousel-fade col-12" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/1.jpg') }}" style="height: 768px">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Avengers ENDGAME</h1>
                        <p>Los Vengadores restantes deben encontrar una manera de recuperar a sus aliados para un enfrentamiento épico con Thanos, el malvado que diezmó el planeta y el universo.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Compra tu entrada</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/2.jpg') }}" alt="" style="height: 768px">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Dragon ball super broly</h1>
                        <p>Goku y Vegeta encuentran a Broly, un guerrero Saiyajin. Pero, ¿cómo sobrevivió a la destrucción de su planeta y dónde estuvo todo ese tiempo?
                            La situación empeora todavía más cuando Freezer vuelve al mundo de los vivos desde el infierno.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/3.jpg') }}" style="height: 768px">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Bumblebee</h1>
                        <p>En 1987, Charlie, una adolescente, encuentra a Bumblebee, muy herido, en el depósito de chatarra al que había llegado mientras huía.
                            Mientras lo restaura, Charlie percibe que lo que ha hallado no es un Volkswagen amarillo corriente.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>