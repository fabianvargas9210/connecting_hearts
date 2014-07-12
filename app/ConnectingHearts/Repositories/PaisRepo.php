<?php
namespace ConnectingHearts\Repositories;
use ConnectingHearts\Entities\ListaPaises;
use ConnectingHearts\Entities\ListaMunicipios;
use ConnectingHearts\Entities\ListaEstados;

class PaisRepo extends BaseRepo {

    public function getModel()
    {
        return new ListaPaises();
    }

    public function getList()
    {
        return ListaPaises::lists('pais', 'id');
    }


}