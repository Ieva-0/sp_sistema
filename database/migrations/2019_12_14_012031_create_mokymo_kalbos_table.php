<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMokymoKalbosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mokymo_kalbos', function(Blueprint $table)
		{
			$table->integer('id_Mokymo_kalbos')->primary();
			$table->char('name', 8);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mokymo_kalbos');
	}

}
