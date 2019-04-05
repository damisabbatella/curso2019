<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Instaladores extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
       Schema::create('instaladores', function(Blueprint $table){

       		$table->increments('id');
			$table->string('nombre');
			$table->string('telefono');
			$table->string('celular');
			$table->string('direccion');
			$table->integer('status');
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
