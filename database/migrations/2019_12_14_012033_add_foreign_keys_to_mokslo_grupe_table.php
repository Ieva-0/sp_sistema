<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMoksloGrupeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mokslo_grupe', function(Blueprint $table)
		{
			$table->foreign('fk_Destytojastabelio_nr', 'vadovauja')->references('tabelio_nr')->on('destytojas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mokslo_grupe', function(Blueprint $table)
		{
			$table->dropForeign('vadovauja');
		});
	}

}
