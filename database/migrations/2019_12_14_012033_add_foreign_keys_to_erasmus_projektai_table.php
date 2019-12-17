<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToErasmusProjektaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('erasmus_projektai', function(Blueprint $table)
		{
			$table->foreign('fk_Studiju_Centrasid_Studiju_Centras', 'Rengia')->references('id_Studiju_Centras')->on('studiju_centras')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('semestras', 'erasmus_projektai_ibfk_1')->references('id_Semestro_tipai')->on('semestro_tipai')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('dalyvio_tipas', 'erasmus_projektai_ibfk_2')->references('id_Erasmus_dalyvio_tipas')->on('erasmus_dalyvio_tipas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('erasmus_projektai', function(Blueprint $table)
		{
			$table->dropForeign('Rengia');
			$table->dropForeign('erasmus_projektai_ibfk_1');
			$table->dropForeign('erasmus_projektai_ibfk_2');
		});
	}

}
