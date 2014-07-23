<?php
namespace ConnectingHearts\Repositories;
use ConnectingHearts\Entities\ListaPaises;
use ConnectingHearts\Entities\Contact;
use ConnectingHearts\Entities\ListaMunicipios;
use ConnectingHearts\Entities\ListaEstados;

class PaisRepo extends BaseRepo {

    public function getModel()
    {
        return new ListaPaises();
    }

    public function getList()
    {
        return ListaPaises::lists('id','pais');
    }

    public function nuevoContact()
    {
        $contact = new Contact();
        $contact->slug = 'full_name';
        return $contact;


        //  $user = new User();
        // $user->type = 'viewer';
        //  return $user;
    }


}