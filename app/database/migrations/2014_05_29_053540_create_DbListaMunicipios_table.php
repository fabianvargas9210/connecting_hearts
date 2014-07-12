<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDbListaMunicipiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::create('lista_municipios', function(Blueprint $table){
            $table->increments('id');
            $table->string('municipio');
            $table->integer('id_pais');
            $table->integer('id_estado');
        });
    }


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	//	Schema::drop('DbListaMunicipios');
	}

}
