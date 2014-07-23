<?php namespace ConnectingHearts\Managers;
use ConnectingHearts\Managers\BaseManager;

class ContactManager extends BaseManager {
    public function getRules()
    {
        $rules = [
            'full_name' => 'required',
            'email' => 'required|email|unique:contacts,email',
            'website_url'          => 'required|min:2',
            'telefono1'            => 'required|min:2',
            'telefono2'            => 'required|min:2',
            'direccion'            => 'required|min:2',
            'nombre_pais'          => 'required|exists:lista_paises,id',
            'nombre_estado'        => 'required|exists:lista_estados,id',
            'nombre_municipio'     => 'required|exists:lista_municipios,id',
            'notas'                => 'required|max:100',
            'contacto_type'        => 'required|in:Festivalores,Pasando la Antorcha,Pare,Alagran,Conferencia,General',
            'tipo_id'              => 'required|exists:tipos,id',
            'estado_actual'        => 'required|in:Activo', 'en curso', 'Informado', 'Pendiente', 'Cancelado', 'Finalizado',
            'modulo'               => 'required|in:No.1', 'No.2', 'No.3', 'No.4'
        ];

        return $rules;
    }

    public function prepareData($data)
    {
        if ( ! isset ($data['available']))
        {
            $data['available'] = 0;
        }

        $this->entity->slug = \Str::slug($this->entity->Contact->full_name);

        return $data;
    }
}