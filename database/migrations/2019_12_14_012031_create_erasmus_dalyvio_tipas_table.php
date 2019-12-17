<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateErasmusDalyvioTipasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('erasmus_dalyvio_tipas', function(Blueprint $table)
		{
			$table->integer('id_Erasmus_dalyvio_tipas')->primary();
			$table->char('name', 10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('erasmus_dalyvio_tipas');
	}

}
