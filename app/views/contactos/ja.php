<fieldset>
    {{ Form::open(['route' => 'newContact', 'method' => 'POST', 'role' => 'form', 'novalidate']) }}                    {{ field::text('full_name', null, array('placeholder'=>'Nombre Completo')) }}
    {{ field::email('email', null, array('placeholder'=>'Correo Electronico')) }}
    {{ field::url('website_url', null, array('placeholder'=>'Dirección Web')) }}
    {{ field::text('telefono1', null, array('placeholder'=>'Telefono #1')) }}
    {{ field::text('telefono2', null, array('placeholder'=>'telefono #2')) }}
    {{ field::text('direccion', null, array('placeholder'=>'Dirección')) }}
    {{ field::text('nombre_pais', null, array('placeholder'=>'pais')) }}
    {{ field::text('ciudad_ciudad', null, array('placeholder'=>'ciudad')) }}
    {{ field::textarea('notas') }}
    {{ field::select('contacto_type', $contacto_type) }}
    {{ field::select('tipo_id', $tipo_id) }}
    {{ field::checkbox('available') }}
    <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
    {{ Form::close()}}
</fieldset>


{{ field::text('nombre_pais', null, array('placeholder'=>'pais')) }}
{{ field::text('ciudad_ciudad', null, array('placeholder'=>'ciudad')) }}



@{{ field::select('nombre_estados', $nombre_estados) }}
@{{ field::select('ciudad_ciudad', $nombre_municipios) }}