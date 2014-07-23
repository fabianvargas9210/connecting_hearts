@extends('layout')
@section('content')
<div>
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 href="{{ route('tipo', [$contact->tipo->slug, $contact->tipo->id]) }}">{{ $contact->Tipo->name }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <h2>
                <a>
                    {{ $contact->full_name }}
                </a>
            </h2>
            <div class="row">
                <!-- Testimonial -->
                <div class="testimonial col-md-4 col-sm-6">
                    <!-- Author Photo -->
                    <div class="author-photo">
                        <img src="../img/user1.png" alt="Author 1">
                    </div>
                    <div class="testimonial-bubble">
                        <blockquote>
                            <fieldset>
                                <div>
                                    Sitio Web:
                                    <p> {{$contact->website_url}} </p>
                                    Correo Electronico:
                                    <p>{{$contact->email}}</p>
                                    Telefono Principal:
                                    <p>{{$contact->telefono1}}</p>
                                    Telefono Secundario:
                                    <p>{{$contact->telefono2}}</p>
                                </div>
                        </blockquote>
                        <div class="sprite arrow-speech-bubble"></div>
                    </div>
                </div>
                <!-- End Testimonial -->
                <div class="testimonial col-md-4 col-sm-6">
                    <div class="author-photo">
                        <img src="../img/user2.png" alt="Author 2">
                    </div>
                    <div class="testimonial-bubble">
                        <blockquote>
                            <div>
                                Direccion:
                                <p>{{$contact->direccion}}</p>
                                Pais:
                                <p>{{$contact->Lista_pais}}</p>
                                Estado:
                                <p>{{$contact->nombre_estad}}</p>
                                Ciudad:
                                <p>{{$contact->nombre_municipi}}</p>
                                Notas:
                                <p>{{ $contact->notas }}</p>
                            </div>
                        </blockquote>
                        <div class="sprite arrow-speech-bubble"></div>
                    </div>
                </div>
                <div class="testimonial col-md-4 col-sm-6">
                    <div class="author-photo">
                        <img src="../img/user3.png" alt="Author 3">
                    </div>
                    <div class="testimonial-bubble">
                        <blockquote>
                            <div>
                                Categoria:
                                <p>{{$contact->Tipo->name}}</p>
                                Programa CEA:
                                <p>{{ $contact->Contacto_type }}</p>
                                Modulo:
                                <p>{{$contact->Modulo}}</p>
                                Estado actual:
                                <p>{{$contact->estado_actual}}</p>
                            </div>
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