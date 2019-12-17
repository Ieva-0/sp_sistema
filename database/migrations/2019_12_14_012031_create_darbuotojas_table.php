<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDarbuotojasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('darbuotojas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('vardas');
			$table->string('pavarde');
			$table->string('pareigos');
			$table->integer('fk_Imoneid')->index('dirba');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('darbuotojas');
	}

}
