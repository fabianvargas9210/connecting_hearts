@extends('layout')
@section('content')
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    Connecting Hearst contactos {{ $tipo->name }}
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <!-- blog entry -->
            <h1>
                <a href="#">{{ $tipo->name }}</a>
                <p class="lead">De <a href="index.php">Corazones En Acción Colombia</a> </p>
            </h1>
            <hr>

            <table class="table table-striped">
                <tr>
                    <th>Nombre</th>
                    <th>Programa</th>
                    <th>Descripción</th>
                    <th>Aciones</th>
                </tr>

                @foreach ($tipo->paginate_contacts as $contact)
                <tr>
                    <td><a class="href" href="">{{ $contact->full_name }}</a></td>
                    <td>{{ $contact->Contacto_type }}</td>
                    <td>{{ $contact->notas }}</td>
                    <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Acciones <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('contact', [$contact->slug, $contact->id]) }}">Ver</a></li>
                            <li><a href="{{ route('editar',[$contact->slug, $contact->id]) }}">Editar</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Eliminar</a></li>
                        </ul>
                    </div>
                    </td>
                </tr>
                @endforeach
            </table>

            {{ $tipo->paginate_contacts->links() }}

        </div>

        <div class="col-lg-4">
            <div class="well" id="formularios-CH">
                <h4>Buscar Contacto</h4>
                    <select id="searchbox" name="q" placeholder="Search products or categories..." class="form-control"></select>
                <script>
                    $(document).ready(function(){
                        $('#searchbox').selectize();
                    });
                </script>

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
            <div class="well" id="formularios-CH" >
                <h4>Categorias De Contactos</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('tipo', ['general', '1']) }}">General</a>
                            </li>
                            <li><a href="{{ route('tipo', ['equipo', '3']) }}">Equipo Corazones</a>
                            </li>
                            <li><a href="{{ route('tipo', ['gobierno', '4']) }}">Gobierno</a>
                            </li>
                            <li><a href="{{ route('tipo', ['iglesia', '5']) }}">Ministerios</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('tipo', ['colegio', '2']) }}">Instituciones Educativas</a>
                            </li>
                            <li><a href="{{ route('tipo', ['empresa', '6']) }}">Empresas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /well -->
            <div class="well" id="formularios-CH">
                <h4>Contacto</h4>
                <p>Recuerda completar todos los campos disponibles esto servira para tener una base de datos confiable! Gracias</p>
                <p>
                    <a href="{{ route('nuevo-contacto') }}" class="btn btn-primary btn-lg" role="button">
                        Agregar Contacto &raquo;</a>
                </p>
            </div>

            </div>
            <!-- /well -->
        </div>
    </div>
    <hr>

</div>
@endsection

