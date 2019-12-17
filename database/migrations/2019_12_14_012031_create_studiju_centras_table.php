<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudijuCentrasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('studiju_centras', function(Blueprint $table)
		{
			$table->string('prisijungimo_vardas');
			$table->string('slaptazodis');
			$table->string('el_pastas');
			$table->integer('id_Studiju_Centras')->primary();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('studiju_centras');
	}

}
