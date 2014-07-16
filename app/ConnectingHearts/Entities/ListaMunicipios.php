<?php namespace ConnectingHearts\Entities;

class ListaMunicipios extends \Eloquent {
	protected $fillable = ['id', 'municipio', 'id_pais', 'id_estado'];
}