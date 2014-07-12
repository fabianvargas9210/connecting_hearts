<?php
namespace ConnectingHearts\Repositories;
use ConnectingHearts\Entities\Contact;
use ConnectingHearts\Managers\BaseManager;
use ConnectingHearts\Managers\RegisterManager;

class ContactRepo extends BaseRepo {


    public function getModel()
    {
        return new Contact;
    }

    public function nuevoContact()
    {
       $contact = new Contact();
       return $contact;
    }


}