<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContacsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('contacts', function(Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('email');
            $table->string('website_url');
            $table->string('telefono1');
            $table->string('telefono2');
            $table->string('direccion');
            $table->string('nombre_pais');
            $table->string('ciudad_ciudad');
            $table->text('notas');
            $table->enum('Contacto_type', ['Festivalores', 'Pasando la Antorcha', 'Pare', 'Alagran', 'Conferencia', 'General']);
            $table->integer('tipo_id')->unsigned();
            $table->boolean('available');
            $table->string('slug');
            $table->foreign('tipo_id')->references('id')->on('tipos');


            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
