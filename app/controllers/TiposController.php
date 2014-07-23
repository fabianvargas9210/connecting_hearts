<?php

use ConnectingHearts\Repositories\ContactRepo;
use ConnectingHearts\Repositories\TipoRepo;
use ConnectingHearts\Managers\ContactManager;
use ConnectingHearts\Repositories\PaisRepo;
use ConnectingHearts\Repositories\EstadosRepo;
use ConnectingHearts\Repositories\MunicipiosRepo;




class TiposController extends BaseController {

    protected $tipoRepo;
    protected $contactRepo;
    protected $paisRepo;
    protected $estadosRepo;
    protected $municipiosRepo;

    public function  __construct(TipoRepo $tipoRepo,
                                 ContactRepo $contactRepo,
                                 PaisRepo $paisRepo,
                                 EstadosRepo $estadosRepo,
                                 MunicipiosRepo $municipiosRepo)
    {
        $this->tipoRepo = $tipoRepo;
        $this->contactRepo = $contactRepo;
        $this->paisRepo    = $paisRepo;
        $this->estadosRepo    = $estadosRepo;
        $this->municipiosRepo    = $municipiosRepo;
    }

// PANEL Y VER CONTACTOS
    public function tipo($slug, $id)
    {
       $tipo =$this->tipoRepo->find($id);

        return View::make('contactos/tipo', compact('tipo'));
    }

    public function ver($slug, $id)
    {
        $nombre_municipios = $this->municipiosRepo->getList();
        $nombre_estados = $this->estadosRepo->getList();
        //$nombre_pais = $this->paisRepo->getList();
        $contact = $this->contactRepo->find($id);
        return View::make('contactos/ver', compact('contact', 'nombre_municipios', 'nombre_estados'));

      //return View::make('contactos/ver', compact('contact', 'nombre_municipios', 'nombre_estados', 'nombre_pais'));
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
        $nombre_municipios = $this->municipiosRepo->getList();
        $nombre_estados = $this->estadosRepo->getList();
        $nombre_pais = $this->paisRepo->getList();
        $tipo_id = $this->tipoRepo->getList();

        $contacto_type = \Lang::get('utils.contacto_type');
        $estado_actual = \Lang::get('utils.estado_actual');
        $Modulo = \Lang::get('utils.Modulo');

        $contact = $this->contactRepo->find($id);
        $manager = new ContactManager($contact, Input::all());
        $manager->save();
        return View::make('contactos/nuevo-contacto', compact('tipo_id', 'contacto_type','nombre_pais', 'nombre_estados', 'nombre_municipios', 'estado_actual', 'Modulo'));
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