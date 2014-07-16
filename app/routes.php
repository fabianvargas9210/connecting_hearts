<?php
use ConnectingHearts\Entities\ListaPaises;
use ConnectingHearts\Entities\ListaEstados;
use ConnectingHearts\Entities\ListaMunicipios;

Route::get('/', ['as'=> 'home', 'uses' => 'HomeController@index']);

//candidates/Alcaldia/1
Route::get('tipo/{slug}/{id}', ['as'=> 'tipo', 'uses' => 'TiposController@tipo']);

//Jair-celis/1
Route::get('{slug}/{id}', ['as'=> 'contact', 'uses' => 'TiposController@show']);

//login
Route::post('panel', ['as' =>'login', 'uses'=> 'AuthController@login'] );
Route::get('logout', ['as' =>'logout', 'uses'=> 'AuthController@logout'] );

//Paneles
Route::get('panel', ['as'=> 'panel', 'uses' => 'PanelController@panelhome']);
Route::get('panel-contactos', ['as'=> 'panel-contactos', 'uses' => 'PanelController@panelcontactos']);

//agregando un contactos
Route::get('nuevo-contacto', ['as'=> 'nuevo-contacto', 'uses' =>'UsersController@agregar']);
Route::post('newContact', ['as'=> 'newContact', 'uses' =>'UsersController@newContact']);


//grabar un usuario
Route::get('sign-up', ['as'=> 'sign_up', 'uses' =>'UsersController@signUp']);
Route::post('sign-up', ['as'=> 'register', 'uses' =>'UsersController@register']);

//Formularios
Route::get('account', ['as' => 'account', 'uses' => 'UsersController@account' ]);
Route::put('account', ['as' => 'update_account', 'uses' => 'UsersController@updateAccount' ]);

//Editar contacto
Route::get('editar/{slug}/{id}', ['as' => 'editar', 'uses' => 'TiposController@edit' ]);
Route::put('editado', ['as' => 'update_contacto', 'uses' => 'TiposController@updateContacto' ]);

//RUTAS LISTAS DEPENDIENTES FORMULARIOS PAIS ESTADO CIUDAD
//Ruta para consultar todos los paises
Route::get('paises', function(){
    if(Request::ajax()){
        return ListaPaises::all()->toJson();
    }
});

//Ruta en la cual retornamos los estados relaccionados con el id del pais
Route::POST('estados', function(){
    if(Request::ajax()){
        $id_pais = e(Input::get('pais'));
        return ListaEstados::where('id_pais','=', $id_pais)->get();
    }
});

//Ruta en la cual retornamos los municipios relaccionados con el id del estado
Route::POST('municipios', function(){
    if(Request::ajax()){
        $id_estado = e(Input::get('estado'));
        return ListaMunicipios::where('id_estado','=', $id_estado)->get();
    }
});