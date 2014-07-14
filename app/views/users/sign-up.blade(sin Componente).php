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
            {{ Form::text('full_name', null, ['class'=>'form-control', 'placeholder'=>'Nombre Completo']) }}
            <div class="form-group">
                    {{ Form::label('email', 'correo', array("class"=>"col-lg-2 control-label")) }}
                    <div class="col-lg-10">
                        {{ Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Correo Electronico']) }}
                        {{ $errors->first('email', '<p class="error_message">:message</p>') }}
                    </div>
            </div>
            <div class="form-group">
                    {{ Form::label('password', 'Contraseña', array("class"=>"col-lg-2 control-label")) }}
                    <div class="col-lg-10">
                        {{ Form::password('password', ['class'=>'form-control', 'placeholder'=>'Contraseña']) }}
                        {{ $errors->first('password', '<p class="error_message">:message</p>') }}
                    </div>
                </div>
            <div class="form-group">
                    {{ Form::label('password_confirmation', 'Repite tu contraseña',array("class"=>"col-lg-2 control-label")) }}
                    <div class="col-lg-10">
                        {{ Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Repite tu contraseña']) }}
                        {{ $errors->first('password_confirmation', '<p class="error_message">:message</p>') }}
                    </div>
                </div>
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
