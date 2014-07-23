<?php

use ConnectingHearts\Entities\Contact;
use ConnectingHearts\Entities\User;

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ContactTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 80) as $index)
		{
            $fullName = $faker->name;
            $user = User::create([
                'full_name' => $fullName,
                'email'    => $faker->email,
                'password' => '123456',
                'type'     => $faker->randomElement(['admin','Presidente', 'Lider', 'Colaborador', 'Invitado', 'Pendiente']),
                'sede'     => $faker->randomElement(['Colombia','Peru', 'Guatemala', 'Mexico'])
            ]);

			Contact::create([
                'full_name'            => $fullName,
                'email'                => $faker->email,
                'website_url'          => $faker->url,
                'telefono1'            => $faker->phoneNumber,
                'telefono2'            => $faker->phoneNumber,
                'direccion'            => $faker->address,
                'nombre_pais'          => $faker->randomElement([1, 2]),
                'nombre_estado'        => $faker->randomElement([1, 2, 3, 4, 5, 6]),
                'nombre_municipio'     => $faker->randomElement([1, 2, 3, 4, 5, 6]),
                'notas'                => $faker->text($maxNbChars = 200),
                'Contacto_type'        => $faker->randomElement(['Festivalores', 'Pasando la Antorcha', 'Pare', 'Alagran', 'Conferencia', 'General']),
                'Modulo'               => $faker->randomElement(['No.1', 'No.2', 'No.3', 'No.4']),
                'estado_actual'        => $faker->randomElement(['Activo', 'en curso', 'Informado', 'Pendiente', 'Cancelado', 'Finalizado']),
                'tipo_id'              => $faker->randomElement([1, 2, 3, 4, 5, 6]),
                'slug'                 => \Str::slug($fullName)
            ]);
        }
	}
}