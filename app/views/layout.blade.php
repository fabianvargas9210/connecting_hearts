<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Connecting Hearts</title>

    <link href="{{ url('vendor/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet">
    <script type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js'></script>
    <script type="text/javascript" src='{{ url("vendor/selectize/js/standalone/selectize.min.js") }}'></script>

    <!-- CSS
    <link href="{{ asset('/estilos/purpose/css/bootstrap.min.css') }}" rel="stylesheet">

    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link href="{{ asset('/estilos/original/css/bootstrap.css') }}" rel="stylesheet">
        <!-- CSS Purpose -->

    <link href="{{ asset('/estilos/purpose/css/icomoon-social.css') }}" rel="stylesheet">
    <link href="{{ asset('/estilos/purpose/css/leaflet.css') }}" rel="stylesheet">
    <link href="{{ asset('/estilos/purpose/css/main.css') }}" rel="stylesheet">
    <script src="{{ asset('/estilos/purpose/js/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>


    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">

            <img class="navbar-brand-logo" src="../public/img/logo.png">
            <a class="navbar-brand" href="{{ route('home') }}">Connecting Hearts</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
        @if (Auth::check())
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="icon icon-wh i-profile"></span> {{ Auth::user()->full_name }}  <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('account') }}">Editar Usuario</a></li>
                        <li><a href="{{ route('logout') }}">Salir</a></li>
                    </ul>
                </li>
            </ul>
        @else
            {{ Form::open(['route' => 'login', 'method' => 'POST', 'role' => 'form', 'class' => 'navbar-form navbar-right']) }}
                @if (Session::has('login_error'))
                    <span class="label label-danger">Credenciales no válidas</span>
                @endif
                <div class="form-group">
                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail']) }}
                </div>
                <div class="form-group">
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'password']) }}
                </div>
                <div class="checkbox">
                    <label class="checkbox-me">
                        {{ Form::checkbox('remember') }} Recordarme
                    </label>
                </div>
                <button type="submit" class="btn btn-success">Ingresar</button>
            {{ Form::close() }}
        @endif
        </div><!--/.navbar-collapse -->
    </div>
</div>

@yield('content')
 <div class="container">
    <hr>
    <footer>
        <p>&copy;Corazones en Acción Colombia 2014°</p>
    </footer>
</div> <!-- /container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('/estilos/purpose/js/bootstrap.min.js') }}"></script>

<!-- Plantilla purpose-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
<script src="/estilos/purpose/js/jquery.fitvids.js"></script>
<script src="/estilos/purpose/js/jquery.sequence-min.js"></script>
<script src="/estilos/purpose/js/jquery.bxslider.js"></script>
<script src="/estilos/purpose/js/main-menu.js"></script>
<script src="/estilos/purpose/js/template.js"></script>

{{ HTML::script('js/jquery-2.0.3.min.js') }}
<script "type/javascript">
    jQuery(document).ready(function() {
     //Al iniciar mandamos consultar todos los paises que se mantienen en nuestra base de datos atravez de la ruta paises
     $.ajax({
        url: 'nombre_pais',
        type: 'GET',
        dataType: 'json',
        success: function(nombre_pais){
            $('select#nombre_pais').html('');
            $('select#nombre_pais').append($('<option></option>').text('Seleccione un pais').val(''));
            //recorremos con el metodo each el objetos
            $.each(nombre_pais, function(i) {
                //Con los parametros que recibimos en nuestro objeto pais creamos las opciones
                $('select#nombre_pais').append("<option value=\""+nombre_pais[i].id+"\">"+nombre_pais[i].pais+"<\/option>");
            });
        }
    })
    //El metodo Change nos permite realizar una acción al momento que estamos interactuando con el elemento
     $("#nombre_pais").change(function(event) {
     var id_pais = $("#nombre_pais option:selected").val();  //obtenemos el id del pais que se mantiene seleccionado
        //Por medio de AJAX consultamos la ruta creada en laravel llamada estados la cual recibe el id del país
        $.ajax({
            url: 'nombre_estado',
            type: 'POST',
            data: 'nombre_pais='+id_pais, //enviamos el id
            dataType: 'json',
            success: function(nombre_estado){
                $('select#nombre_estado').html('');
                $('select#nombre_estado').append($('<option></option>').text('Seleccione un estado').val(''));
                //recorremos con el metodo each el objeto
                $.each(nombre_estado, function(i) {
                    //Con los parametros que recibimos en nuestro objeto estado creamos las opciones
                    $('select#nombre_estado').append("<option value=\""+nombre_estado[i].id+"\">"+nombre_estado[i].estados+"<\/option>");
                    // estado[i].id = Contiene el id del estado
                    // estado[i].estados = Contiene el nombre del estado
                    });
                }
            })
        });

        //El metodo Change nos permite realizar una acción al momento que estamos interactuando con el elemento
     $("#nombre_estado").change(function(event) {
     var id_estado = $("#nombre_estado option:selected").val();  //obtenemos el id del pais que se mantiene seleccionado
        //Por medio de AJAX consultamos la ruta creada en laravel llamada estados la cual recibe el id del país
        $.ajax({
            url: 'nombre_municipio',
            type: 'POST',
            data: 'nombre_estado='+id_estado, //enviamos el id
            dataType: 'json',
            success: function(nombre_municipio){
                $('select#nombre_municipio').html('');
                $('select#nombre_municipio').append($('<option></option>').text('Seleccione un municipio').val(''));
                //recorremos con el metodo each el objeto
                $.each(nombre_municipio, function(i) {
                    //Con los parametros que recibimos en nuestro objeto estado creamos las opciones
                    $('select#nombre_municipio').append("<option value=\""+nombre_municipio[i].id+"\">"+nombre_municipio[i].municipio+"<\/option>");
                    // estado[i].id = Contiene el id del Municipio
                    // estado[i].estados = Contiene el nombre del Municipio
                    });
                }
            })
        });
    
    });
</script>
</body>
</html>