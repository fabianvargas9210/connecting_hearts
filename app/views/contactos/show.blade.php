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
            <h2>Contacto:
                <a>
                    {{ $contact->full_name }}
                </a>
            </h2>
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
                                 <div>
                                     <p>Programa: {{ $contact->Contacto_type }}</p>
                                     <p>Correo: {{$contact->email}}</p>
                                     <p>Telefono de Contato 1: {{$contact->telefono1}}</p>
                                     <p>Telefono de Contato 2: {{$contact->telefono2}}</p>
                                     <p>Direccion: {{$contact->direccion}}</p>
                                     <p>Pais: {{$contact->nombre_pais}}</p>
                                     <p>Ciudad: {{$contact->ciudad_ciudad}}</p>
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
                            <div class="row">
                                <p>
                                    Website:
                                    <a href="{{ $contact->website_url }}">
                                        {{ $contact->website_url }}
                                    </a>
                                </p>
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
                                <h4>Descripción</h4>
                                <p>{{ $contact->notas }}</p>
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