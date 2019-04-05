<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fotos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('fotos', function(Blueprint $table){

       		$table->increments('id');
			$table->integer('idpedido');
			$table->string('archivo');
			$table->integer('principal');
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
