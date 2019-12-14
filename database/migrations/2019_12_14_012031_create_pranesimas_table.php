<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePranesimasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pranesimas', function(Blueprint $table)
		{
			$table->date('data')->nullable();
			$table->time('laikas')->nullable();
			$table->string('tekstas')->nullable();
			$table->string('tema')->nullable();
			$table->integer('id_Pranesimas', true);
			$table->integer('fk_Destytojastabelio_nr')->nullable()->index('gauna');
			$table->integer('fk_Imoneid')->nullable()->index('siuncia_studentas_imonei');
			$table->integer('fk_Studiju_Centrasid_Studiju_Centras')->nullable()->index('siuncia');
			$table->integer('fk_Destytojastabelio_nr1')->nullable();
			$table->integer('fk_Studiju_Centrasid_Studiju_Centras1')->nullable();
			$table->integer('fk_Imoneid1')->nullable()->index('siuncia_imone_studentui');
			$table->integer('gavejas')->index('gauna_imone');
			$table->integer('siuntejas');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pranesimas');
	}

}
