@extends('layout')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-lg-8">

            <!-- blog entry -->
            <h1><a href="#">Instituciones Educativas- Rectores y Docentes</a>
            </h1>
            <p class="lead">CEA <a href="index.php">Colombia</a>
            </p>
            <hr>
            <p>
                <span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
            <hr>

            <div class="container">
                <h1>{{ $tipo->name }}</h1>

                <table class="table table-striped">
                    <tr>
                        <th>Nombre</th>
                        <th>Contacto</th>
                        <th>Descripción</th>s
                        <th>Ver</th>
                    </tr>


                    @foreach ($tipo->contacts as $contact)
                    <tr>
                        <td>{{ $contact->full_name }}</td>
                        <td>{{ $contact->Contacto_type }}</td>
                        <td>{{ $contact->notas }}</td>
                        <td width="50">
                            <a href="{{ route('contact', [$contact->slug, $contact->id]) }}" class="btn btn-info">
                                Ver
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </table>

            </div> <!-- /container -->




            <!-- pager -->
            <ul class="pager">
                <li class="previous"><a href="#">&larr; Older</a>
                </li>
                <li class="next"><a href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>

        <div class="col-lg-4">
            <div class="well">
                <h4>Buscar contacto</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                </div>
                <!-- /input-group -->
            </div>
            <!-- /well -->
            <div class="well">
                <h4>Otras Categorias</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#dinosaurs">Dinosaurs</a>
                            </li>
                            <li><a href="#spaceships">Spaceships</a>
                            </li>
                            <li><a href="#fried-foods">Fried Foods</a>
                            </li>
                            <li><a href="#wild-animals">Wild Animals</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#alien-abductions">Alien Abductions</a>
                            </li>
                            <li><a href="#business-casual">Business Casual</a>
                            </li>
                            <li><a href="#robots">Robots</a>
                            </li>
                            <li><a href="#fireworks">Fireworks</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /well -->
            <div class="well">
                <h4>Agregar Contacto</h4>
                <p>Bootstrap's default wells work great for side widgets! What is a widget anyways...?</p>
            </div>
            <!-- /well -->
        </div>
    </div>

    <hr>

</div>
@stop