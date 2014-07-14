<?php
use ConnectingHearts\Entities\User;
use ConnectingHearts\Entities\Contact;

use ConnectingHearts\Managers\RegisterManager;
use ConnectingHearts\Managers\ContactManager;
use ConnectingHearts\Managers\AccountManager;

use ConnectingHearts\Repositories\UserRepo;
use ConnectingHearts\Repositories\ContactRepo;
use ConnectingHearts\Repositories\TipoRepo;
use ConnectingHearts\Repositories\PaisRepo;
use ConnectingHearts\Repositories\EstadosRepo;
use ConnectingHearts\Repositories\MunicipiosRepo;


class UsersController extends BaseController {

    protected $userRepo;
    protected $contactRepo;
    protected $tipoRepo;
    protected $paisRepo;
    protected $estadosRepo;

    public function __construct(UserRepo $userRepo,
                                ContactRepo $contactRepo,
                                TipoRepo $tipoRepo,
                                PaisRepo $paisRepo,
                                EstadosRepo $estadosRepo,
                                MunicipiosRepo $municipiosRepo)
    {
        $this->userRepo    = $userRepo;
        $this->contactRepo = $contactRepo;
        $this->tipoRepo    = $tipoRepo;
        $this->paisRepo    = $paisRepo;
        $this->estadosRepo    = $estadosRepo;
        $this->municipiosRepo    = $municipiosRepo;

    }

    public function signUp()
    {
        return View::make('users/sign-up');
    }

    public function register()
    {
        $user = $this->userRepo->newUser();
        $manager = new RegisterManager($user, Input::all());
        $manager->save();

        return Redirect::route('home');
    }

    public function account()
    {
        $user = Auth::user();
        return View::make('users/account', compact('user'));
    }

    public function updateAccount()
    {
        $user = Auth::user();
        $manager = new AccountManager($user, Input::all());
        $manager->save();
        return Redirect::route('home');
    }


    public function agregar()
    {
        $nombre_municipios = $this->municipiosRepo->getList();
        $nombre_estados = $this->estadosRepo->getList();
        $nombre_pais = $this->paisRepo->getList();
        $tipo_id = $this->tipoRepo->getList();
        $contacto_type = \Lang::get('utils.contacto_type');
        return View::make('contactos/nuevo-contacto', compact('tipo_id', 'contacto_type'));
    //  return View::make('contactos/nuevo-contacto', compact('tipo_id', 'contacto_type','nombre_pais', 'nombre_estados', 'nombre_municipios'));
    }

    public function newContact()
    {
        $contact = $this->contactRepo->nuevoContact();
        $manager = new ContactManager($contact, Input::all());
        dd($contact);
        $manager->save();
        return Redirect::back();

        //return Redirect::route('home');
        /*
        $contact = new Contact;
        $contact -> full_name = Input::get('full_name');
        $contact -> email = Input::get('email');
        $contact -> website_url = Input::get('website_url');
        $contact -> telefono1 = Input::get('telefono1');
        $contact -> telefono2 = Input::get('telefono2');
        $contact -> direccion = Input::get('direccion');
        $contact -> nombre_pais = Input::get('nombre_pais');
        $contact -> ciudad_ciudad = Input::get('ciudad_ciudad');
        $contact -> notas = Input::get('notas');
        $contact -> available = Input::get('available');
        $contact -> contacto_type = Input::get('contacto_type');
        $contact -> tipo_id = Input::get('tipo_id');
        $contact ->save();
        return Redirect::route('home');


        $data = Input::only(['full_name', 'email', 'website_url', 'telefono1', 'telefono2', 'direccion', 'nombre_pais', 'ciudad_ciudad', 'notas', 'available', 'contacto_type', 'tipo_id']);
        $rules = [
            'full_name' => 'required',
            'email' => 'required|email|unique:contacts,email',
            'website_url'          => 'required',
            'telefono1'            => 'required',
            'telefono2'            => 'required',
            'direccion'            => 'required',
            'nombre_pais'          => 'required',
            'ciudad_ciudad'        => 'required',
            'notas'                => 'required',
            'available'            => 'in:1,0',
            'contacto_type'        => 'required|in:Festivalores,Pasando la Antorcha,Pare,Alagran,Conferencia,General',
            'tipo_id'              => 'required|exists:tipo,id'

        ];
        $validation = \Validator::make($data, $rules);

        if($validation->passes())
        {
            Contact::create($data);
            return Redirect::route('home');
        }

        return Redirect::back()->withInput()->withErrors($validation->messages());
        */
    }
}