<?php
namespace ConnectingHearts\Repositories;
use ConnectingHearts\Entities\Contact;
use ConnectingHearts\Entities\Tipo;


class TipoRepo extends BaseRepo {

    public function getModel()
    {
        return new Tipo;
    }

    public function getList()
    {
        return Tipo::lists('name', 'id');
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