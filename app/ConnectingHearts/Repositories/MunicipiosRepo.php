<?php
namespace ConnectingHearts\Repositories;
use ConnectingHearts\Entities\ListaPaises;
use ConnectingHearts\Entities\ListaMunicipios;
use ConnectingHearts\Entities\ListaEstados;

class MunicipiosRepo extends BaseRepo {

    public function getModel()
    {
        return new ListaMunicipios();
    }

    public function getList()
    {
        return ListaMunicipios::lists('municipio','id_pais', 'id_estado');
    }


}