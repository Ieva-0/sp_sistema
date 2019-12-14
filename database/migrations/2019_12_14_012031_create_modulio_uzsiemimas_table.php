<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModulioUzsiemimasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modulio_uzsiemimas', function(Blueprint $table)
		{
			$table->string('vieta')->nullable();
			$table->string('destytojas')->nullable();
			$table->integer('laikas')->nullable()->index('laikas');
			$table->integer('tipas')->nullable()->index('tipas');
			$table->integer('id_Modulio_uzsiemimas')->primary();
			$table->integer('fk_Destytojastabelio_nr')->index('desto');
			$table->integer('fk_Auditorijaid_Auditorija')->index('Vyksta');
			$table->integer('fk_Moduliskodas')->index('sudaro');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('modulio_uzsiemimas');
	}

}
