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
            $table->integer('nombre_pais')->unsigned();
            $table->integer('nombre_estado')->unsigned();
            $table->integer('nombre_municipio')->unsigned();
            $table->text('notas');
            $table->enum('Contacto_type', ['Festivalores', 'Pasando la Antorcha', 'Pare', 'Alagran', 'Conferencia', 'General']);
            $table->integer('tipo_id')->unsigned();
            $table->boolean('available');
            $table->string('slug');
            $table->timestamps();
            $table->foreign('tipo_id')->references('id')->on('tipos');

        });

        Schema::table('contacts', function($table) {

            $table->foreign('nombre_pais')->references('id')->on('lista_paises');
            $table->foreign('nombre_estado')->references('id')->on('lista_estados');
            $table->foreign('nombre_municipio')->references('id')->on('lista_municipios');
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
