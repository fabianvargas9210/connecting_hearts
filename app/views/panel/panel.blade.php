@extends('layout')

@section('content')

<div class="row">

    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Connecting Hearst
                        <small> Panel de Aplicaciones:</small>
                    </h1>
                </div>
            </div>
        </div>
    </div>
<div class="section">
    <div class="container">
        <div class="row">
        <div class="col-lg-7 col-md-7">
            <a href="{{ route('panel-contactos') }}">
                <img class="img-responsive" src="../public/estilos/purpose/img/panel/ceacol-contac.png" alt="">
            </a>
        </div>

        <div class="col-lg-5 col-md-5">
            <h3>Contactos Cea Colombia</h3>
            <h4>En Pruebas!</h4>
            <p>Encontrar un contacto nunca fue tan facil, utiliza esta aplicacción si tienes dudas o quieres hacer algun reporte de un error solo debes escribir un correo jair.celis@heartsinaction.org.</p>
                <a class="btn btn-primary" href="{{ route('panel-contactos') }}">Contactos <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>

    </div>
        <hr>
        <div class="row">

        <div class="col-lg-7 col-md-7">
            <a href="#">
                <img class="img-responsive" src="../public/estilos/purpose/img/panel/construccion.png" alt="">
            </a>
        </div>

        <div class="col-lg-5 col-md-5">
            <h3>Cronogramas Cea Colombia</h3>
            <h4>Subheading</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
            <a class="btn btn-primary" href="#">Cronogramas<span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>

    </div>
        <hr>
        <div class="row">

        <div class="col-lg-7 col-md-7">
            <a href="#">
                <img class="img-responsive" src="../public/estilos/purpose/img/panel/construccion.png" alt="">
            </a>
        </div>

        <div class="col-lg-5 col-md-5">
            <h3>Agendas Cea Colombia</h3>
            <h4>Subheading</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
            <a class="btn btn-primary" href="#">Agendas<span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>

    </div>
        <hr>
        <div class="row">

        <div class="col-lg-7 col-md-7">
            <a href="#">
                <img class="img-responsive" src="../public/estilos/purpose/img/panel/construccion.png" alt="">
            </a>
        </div>

        <div class="col-lg-5 col-md-5">
            <h3>Alcances Cea Colombia</h3>
            <h4>Subheading</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
            <a class="btn btn-primary" href="#">Alcances<span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>

    </div>
    </div>
</div>

@stop