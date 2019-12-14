<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToModulisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('modulis', function(Blueprint $table)
		{
			$table->foreign('fk_Destytojastabelio_nr', 'Koordinuoja')->references('tabelio_nr')->on('destytojas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('mokymo_kalba', 'modulis_ibfk_1')->references('id_Mokymo_kalbos')->on('mokymo_kalbos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('gretutines_studijos', 'modulis_ibfk_2')->references('id_Gretutines_studijos')->on('gretutines_studijos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('modulis', function(Blueprint $table)
		{
			$table->dropForeign('Koordinuoja');
			$table->dropForeign('modulis_ibfk_1');
			$table->dropForeign('modulis_ibfk_2');
		});
	}

}
