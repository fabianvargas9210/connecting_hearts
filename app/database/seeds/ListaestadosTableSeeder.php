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
    }

}