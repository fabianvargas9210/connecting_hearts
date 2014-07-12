<?php
namespace ConnectingHearts\Repositories;
use ConnectingHearts\Entities\ListaPaises;
use ConnectingHearts\Entities\ListaMunicipios;
use ConnectingHearts\Entities\ListaEstados;

class EstadosRepo extends BaseRepo {

    public function getModel()
    {
        return new ListaEstados();
    }

    public function getList()
    {
        return ListaEstados::lists('estados','id', 'id_pais');
    }


}