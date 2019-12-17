<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateErasmusProjektaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('erasmus_projektai', function(Blueprint $table)
		{
			$table->string('salis');
			$table->date('pradzios_data')->nullable();
			$table->date('pabaigos_data')->nullable();
			$table->string('mokymo_istaiga')->nullable();
			$table->integer('dalyviu_skaicius')->nullable();
			$table->string('metai')->nullable();
			$table->integer('dalyvio_tipas')->nullable()->index('dalyvio_tipas');
			$table->integer('semestras')->nullable()->index('semestras');
			$table->integer('id_Erasmus_Projektai')->primary();
			$table->integer('fk_Studiju_Centrasid_Studiju_Centras')->index('Rengia');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('erasmus_projektai');
	}

}
