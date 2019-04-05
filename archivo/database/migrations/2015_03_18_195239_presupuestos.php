<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Presupuestos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		  Schema::create('presupuestos', function(Blueprint $table){

       		$table->increments('id');
       		$table->date('fecha');
			$table->string('nombre');
			$table->string('telefono');
			$table->string('email');
			$table->string('celular');
			$table->string('direccion');
			$table->string('zona');
			$table->string('barrio');
			$table->string('instalador');
			$table->date('fechadeenvio');
			$table->string('observaciones');
			$table->string('origen');
			$table->string('respuesta');
			$table->string('estado');
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
