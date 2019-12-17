<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePraktikosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('praktikos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->time('trukme');
			$table->integer('dalyviu_Skaicius');
			$table->string('projekto_Tema');
			$table->integer('laikas')->index('praktikos_ibfk_1');
			$table->integer('fk_Imoneid')->index('Suteikia');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('praktikos');
	}

}
