@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
    <div class="page-header">
        <h1 class="text-center text-primary">Ingresa tus Datos</h1>
    </div>
</div>
</div>

<div class="container  well bs-component">
    <div class="form-horizontal">
        <fieldset>
            <legend class="text-info">Un administrador te aceptara</legend>
            {{ Form::open(['route' => 'register', 'method' => 'POST', 'role' => 'form', 'novalidate']) }}
            {{ field::text('full_name', null, array('placeholder'=>'Nombre Completo')) }}
            {{ field::email('email', null, array('placeholder'=>'Correo Electronico')) }}
            {{ field::password('password', ['placeholder' => 'tu contraseña']) }}
            {{ field::password('password_confirmation', ['placeholder' => 'Repite tu contraseña']) }}

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </fieldset>
            {{ Form::close()}}
    </div>
</div>

@endsection
