@extends('layout')
@section('content')
<div>
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Agregar Nuevo Contacto</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <h2>Recuerda Completar todos los campos</h2>
            <div class="row">
                <!-- Testimonial -->
                <div class="testimonial col-md-4 col-sm-6">
                    <!-- Author Photo -->
                    <div class="author-photo">
                        <img src="img/user1.png" alt="Author 1">
                    </div>
                    <div class="testimonial-bubble">
                        <blockquote>
                            <fieldset>
                                {{ Form::open(['route' => 'newContact', 'method' => 'POST', 'role' => 'form', 'novalidate']) }}

                                <div>
                                    {{ field::text('full_name', null, array('placeholder'=>'Nombre Completo')) }}
                                    {{ field::email('email', null, array('placeholder'=>'Correo Electronico')) }}
                                    {{ field::url('website_url', null, array('placeholder'=>'Dirección Web')) }}
                                    {{ field::text('telefono1', null, array('placeholder'=>'Telefono #1')) }}
                                    {{ field::text('telefono2', null, array('placeholder'=>'telefono #2')) }}
                                </div>
                        </blockquote>
                        <div class="sprite arrow-speech-bubble"></div>
                    </div>
                </div>
                <!-- End Testimonial -->
                <div class="testimonial col-md-4 col-sm-6">
                    <div class="author-photo">
                        <img src="img/user2.png" alt="Author 2">
                    </div>
                    <div class="testimonial-bubble">
                        <blockquote>
                            <div>
                                {{ field::text('direccion', null, array('placeholder'=>'Dirección')) }}
                                <label class="control-label">Datos de Geograficos</label>
                                <select class="form-control" id="pais" name="pais"></select>
                                <select class="form-control" id="estado" name="estado">
                                    <option value="">Es necesario seleccionar un Pais</option>
                                </select>
                                <select class="form-control" id="municipio" name="municipio">
                                    <option value="">Es necesario seleccionar un estado</option>
                                </select>
                            </div>
                        </blockquote>
                        <div class="sprite arrow-speech-bubble"></div>
                    </div>
                </div>
                <div class="testimonial col-md-4 col-sm-6">
                    <div class="author-photo">
                        <img src="img/user3.png" alt="Author 3">
                    </div>
                    <div class="testimonial-bubble">
                        <blockquote>
                            <div>
                                {{ field::textarea('notas') }}
                            </div>

                            <div>
                                {{ field::select('tipo_id', $tipo_id) }}
                                {{ field::select('contacto_type', $contacto_type) }}
                                {{ field::checkbox('available') }}
                            </div>

                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                            {{ Form::close()}}
                            </fieldset>

                        </blockquote>
                        <div class="sprite arrow-speech-bubble"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection