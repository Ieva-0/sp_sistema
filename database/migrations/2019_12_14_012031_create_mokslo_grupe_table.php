<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoksloGrupeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mokslo_grupe', function(Blueprint $table)
		{
			$table->string('Pavadinimas');
			$table->integer('Nariu_kiekis');
			$table->integer('Laisvos_vietos');
			$table->string('Fakultetas');
			$table->string('Aprasymas')->nullable();
			$table->integer('id_Mokslo_grupe')->primary();
			$table->integer('fk_Destytojastabelio_nr')->unique('fk_Destytojastabelio_nr');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mokslo_grupe');
	}

}
