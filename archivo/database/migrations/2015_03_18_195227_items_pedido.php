<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemsPedido extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items_pedido', function(Blueprint $table){

       		$table->increments('id');
			$table->date('fecha');
			$table->integer('idpedido');
			$table->integer('idproducto');
			$table->integer('cantidad');
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
