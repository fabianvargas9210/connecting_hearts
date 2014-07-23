@extends('layout')
@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <section id="slider">
        <div class="container">
            <div class="banner">
                <div class="heading-group">
                    <h2>Connecting Hearts</h2>

                    <h3>Fundación Corazones En Acción</h3>

                </div>
                <a href="{{ route('sign_up') }}" class="play-bttn"></a>
            </div>
        </div>
    </section>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        @if (Auth::check())
        <div class="col-md-4">
            <h2>Solicitar Acceso</h2>
            <p>Este es un sistema de información administrativa de la Fundación Corazones En Acción Colombia, Si usted llego a este sitio y no tiene usuario y contraseña solicitelo en el siguiente link Gracias!. </p>
            <p>
                <a href="{{ route('panel') }}" class="btn btn-primary btn-lg" role="button">
                    Panel de Control &raquo;</a>
            </p>
        </div>
        @else

        <div class="row">
            <div class="col-md-4">
                <h2>Solicitar Acceso</h2>
                <p>Este es un sistema de información administrativa de la Fundación Corazones En Acción Colombia, Si usted llego a este sitio y no tiene usuario y contraseña solicitelo en el siguiente link Gracias!. </p>
                <p>
                    <a href="{{ route('sign_up') }}" class="btn btn-primary btn-lg" role="button">
                        Solicitar Acceso &raquo;</a>
                </p>
            </div>
        @endif

        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>
</div>

@stop