<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table){

       		$table->increments('id');
			$table->string('titulo');
			$table->string('descripcion');
			$table->integer('preciomay');
			$table->integer('preciomin');
			$table->integer('placasxmetro');
			$table->string('foto');
			$table->integer('stock');
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
