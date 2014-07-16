<?php namespace ConnectingHearts\Entities;

class Contact extends \Eloquent {

    protected $table = 'contacts';
    protected $perPage = 5;
    protected $fillable = array('full_name', 'email', 'website_url', 'telefono1', 'telefono2', 'direccion', 'nombre_pais', 'nombre_estado', 'nombre_municipio', 'Contacto_type', 'notas', 'tipo_id', 'available', 'slug');

    public function tipo()
    {
            return $this->belongsTo('ConnectingHearts\Entities\Tipo');
    }

    public function ListaPaises()
    {
        return $this->belongsTo('ConnectingHearts\Entities\ListaPaises');
    }

    public function ListaMunicipios()
    {
        return $this->belongsTo('ConnectingHearts\Entities\ListaMunicipios');
    }

    public function ListaEstados()
    {
        return $this->belongsTo('ConnectingHearts\Entities\ListaEstados');
    }


    public function getContacto_typeTitleAttribute()
    {
        return \Lang::get('utils.contacto_type.' . $this->contacto_type);
    }
}