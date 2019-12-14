<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModulisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modulis', function(Blueprint $table)
		{
			$table->integer('kodas')->primary();
			$table->string('Pavadinimas')->nullable();
			$table->string('Koordinuojantis_destytojas')->nullable();
			$table->integer('Kursas')->nullable();
			$table->string('Fakultetas')->nullable();
			$table->integer('mokymo_kalba')->nullable()->index('mokymo_kalba');
			$table->integer('gretutines_studijos')->nullable()->index('gretutines_studijos');
			$table->integer('fk_Destytojastabelio_nr')->index('Koordinuoja');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('modulis');
	}

}
