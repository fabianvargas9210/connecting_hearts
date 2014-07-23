@extends('layout')
@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1 class="text-center text-primary">Editar Datos de {{ $contact->full_name }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="basic-login">
                    <div class="form-horizontal">
                        <fieldset>
                            <legend class="text-info">Datos Basicos del contacto </legend>
                            {{ Form::model($contact, ['route' => 'update_contacto', 'method' => 'PUT', 'role' => 'form', 'novalidate']) }}

                            {{ field::email('email', null, array('placeholder'=>'Correo Electronico')) }}
                            {{ field::url('website_url', null, array('placeholder'=>'Dirección Web')) }}
                            {{ field::text('telefono1', null, array('placeholder'=>'Telefono #1')) }}
                            {{ field::text('telefono2', null, array('placeholder'=>'telefono #2')) }}
                            {{ field::text('direccion', null, array('placeholder'=>'Dirección')) }}
                            {{ field::text('nombre_pais', null, array('placeholder'=>'pais')) }}
                            {{ field::text('ciudad_ciudad', null, array('placeholder'=>'ciudad')) }}
                            {{ field::textarea('notas') }}
                            {{ field::select('Programa', $contacto_type) }}
                            {{ field::select('tipo', $tipo_id) }}
                            {{ field::checkbox('available') }}

                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary">Editar</button>
                                </div>
                            </div>
                        </fieldset>
                        {{ Form::close()}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="basic-login">
                    <div class="form-horizontal">
                        <fieldset>
                            <legend class="text-info">Datos Corazones en Acción </legend>


                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary">Actualizar Perfil</button>
                                </div>
                            </div>
                        </fieldset>
                        {{ Form::close()}}
                        </fieldset>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection