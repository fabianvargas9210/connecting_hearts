<?php
use ConnectingHearts\Entities\Tipo;
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
class TipoTableSeeder extends Seeder {

	public function run()
	{
        Tipo::create([
           'id'   => 1,
           'name' => 'General',
           'slug' => 'general'

        ]);

        Tipo::create([
            'id'   => 2,
            'name' => 'Instituciones Educativas - Rectores - Docentes',
            'slug' => 'colegios'

        ]);

        Tipo::create([
            'id'   => 3,
            'name' => 'Equipo Corazones - Facilitadores - Misioneros',
            'slug' => 'equipo'

        ]);

        Tipo::create([
            'id'   => 4,
            'name' => 'Gobierno - Empleados Publicos - Organizaciones Gubernamentales',
            'slug' => 'gobierno'

        ]);

        Tipo::create([
            'id'   => 5,
            'name' => 'Ministerios - Lideres - Pastores - Iglesias',
            'slug' => 'iglesia'

        ]);

        Tipo::create([
            'id'   => 6,
            'name' => 'Empresas - Proveedores - Donadores',
            'slug' => 'empresa'

        ]);
	}
}