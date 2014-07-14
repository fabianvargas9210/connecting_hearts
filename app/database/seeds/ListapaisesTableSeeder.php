<?php
use ConnectingHearts\Entities\ListaPaises;
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ListapaisesTableSeeder extends Seeder {

	public function run()
	{
        DB::table('lista_paises')->insert(array(
            'pais' => 'Colombia'
        ));

        DB::table('lista_paises')->insert(array(
            'pais' => 'Guatemala'
        ));

        DB::table('lista_paises')->insert(array(
            'pais' => 'Peru'
        ));

        DB::table('lista_paises')->insert(array(
            'pais' => 'Mexico'
        ));

        DB::table('lista_paises')->insert(array(
            'pais' => 'E.U.U'
        ));
    }

}