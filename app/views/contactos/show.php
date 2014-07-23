



<div class="container">
    <h1>{{ $contact->full_name }}</h1>
    <p>
        Categoría:
        <a href="{{ route('tipo', [$contact->tipo->slug, $contact->tipo->id]) }}">
            {{ $contact->Tipo->name }}
        </a>
    </p>

    <p>Programa: {{ $contact->Contacto_type }}</p>

    <p>Correo: {{$contact->email}}</p>

    <p>Telefono de Contato 1: {{$contact->telefono1}}</p>

    <p>Telefono de Contato 2: {{$contact->telefono2}}</p>

    <p>Direccion: {{$contact->direccion}}</p>

    <p>Pais: {{$contact->nombre_pais}}</p>

    <p>Ciudad: {{$contact->ciudad_ciudad}}</p>

    <p>
        Website:
        <a href="{{ $contact->website_url }}">
            {{ $contact->website_url }}
        </a>
    </p>

    <h4>Descripción</h4>
    <p>{{ $contact->notas }}</p>

</div> <!-- /container -->
