<?php

use ConnectingHearts\Repositories\ContactRepo;
use ConnectingHearts\Repositories\TipoRepo;
use ConnectingHearts\Managers\ContactManager;


class TiposController extends BaseController {

    protected $tipoRepo;
    protected $contactRepo;

    public function  __construct(TipoRepo $tipoRepo,
                                 ContactRepo $contactRepo)
    {
        $this->tipoRepo = $tipoRepo;
        $this->contactRepo = $contactRepo;
    }

// PANEL Y VER CONTACTOS
    public function tipo($slug, $id)
    {
       $tipo =$this->tipoRepo->find($id);
        return View::make('contactos/tipo', compact('tipo'));
    }

        public function show($slug, $id)
    {
        $contact = $this->contactRepo->find($id);
       return View::make('contactos/show', compact('contact'));
    }


// Editar Contacto
    public function edit($slug, $id)
    {
        $tipo_id   = $this->tipoRepo->getList();
        $contact = $this->contactRepo->find($id);
        $contacto_type = \Lang::get('utils.contacto_type');
        return View::make('contactos/edit', compact('contact', 'tipo_id', 'contacto_type'));
    }

    public function updateContacto($id)
    {
        $contact = $this->contactRepo->find($id);
        $manager = new ContactManager($contact, Input::all());
        $manager->save();
        return Redirect::route('home');
    }

//Agregar contacto nuevo
    public function agregar()
    {
        $tipos = $this->tipoRepo->getList();
        $contacto_type = \Lang::get('utils.contacto_type');
        return View::make('contactos/nuevo-contacto', compact('tipos', 'contacto_type'));
    }

    public function newContact()
    {
        $contact = $this->contactRepo->nuevoContact();
        $manager = new ContactManager($contact, Input::all());
        dd($contact);
        $manager->save();
        return Redirect::route('home');
    }
}