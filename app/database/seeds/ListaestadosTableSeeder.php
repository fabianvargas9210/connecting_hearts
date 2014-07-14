<?php
use ConnectingHearts\Entities\ListaEstados;
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ListaestadosTableSeeder extends Seeder {

	public function run()
	{
        DB::table('lista_estados')->insert(array(
            'estados' => 'ANTIOQUIA',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'AMAZONAS',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'ARAUCA',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'ATLANTICO',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'BOGOTA',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'BOLIVAR',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'BOYACA',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'CALDAS',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'CAQUETA',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'CASANARE',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'CAUCA',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'CESAR',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'CHOCO',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'CORDOBA',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'CUNDINAMARCA',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'GUAINIA',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'GUAVIARE',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'HUILA',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'LA GUAJIRA',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'MAGDALENA',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'META',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'NORTE DE SANTANDER',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'NARIÑO',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'PUTUMAYO',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'QUINDIO',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'RISARALDA',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'SAN ANDRES',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'SANTANDER',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'SUCRE',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'TOLIMA',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'VALLE DEL CAUCA',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'VAUPES',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'VICHADA',
            'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'ALTA VERAPAZ',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'BAJA VERAPAZ',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'CHIMALTENANGO',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'CHIQUIMULA',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'PETÉN',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'EL PROGRESO',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'QUICHÉ',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'ESCUINTLA',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'GUATEMALA',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'HUEHUETENANGO',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'IZABAL',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'JALAPA',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'JUTIAPA',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'QUETZALTENANGO',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'RETALHULEU',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'SACATEPÉQUEZ',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'SAN MARCOS',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'SANTA ROSA',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'SOLOLÁ',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'SUCHITEPÉQUEZ',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'TOTONICAPÁN',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'ZACAPA',
            'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'LIMA',
            'id_pais' => '3'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' => 'Mexico DF',
            'id_pais' => '4'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'ALABAMA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'ARIZONA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'ARKANSAS',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'CALIFORNIA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'COLORADO',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'COLUMBIA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'CONNECTICUT',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'DELAWARE',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'FLORIDA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'GEORGIA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'HAWAII',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'IDAHO',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'ILLINOIS',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'INDIANA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'IOWA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'KANSAS',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'KENTUCKY',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'LOUISIANA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'MAINE',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'MARYLAND',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'MASSACHUSETTS',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'MICHIGAN',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'MINNESOTA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'MISSISSIPPI',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'MISSOURI',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'MONTANA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'NEBRASKA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'NEVADA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'NEW HAMPSHIRE',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'NEW JERSEY',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'NEW MEXICO',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'NEW YORK',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'NORTH CAROLINA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'NORTH DAKOTA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'OHIO',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'OKLAHOMA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'OREGON',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'PENNSYLVANIA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'RHODE ISLAND',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'SOUTH CAROLINA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'SOUTH DAKOTA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'TENNESSEE',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'TEXAS',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'UTAH',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'VERMONT',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'VIRGINIA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'WASHINGTON',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'WEST VIRGINIA',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'WISCONSIN',
            'id_pais' => '5'
        ));

        DB::table('lista_estados')->insert(array(
            'estados' =>  'WYOMING',
            'id_pais' => '5'
        ));

     }
}