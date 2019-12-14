<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToErasmusDestytojaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('erasmus_destytojai', function(Blueprint $table)
		{
			$table->foreign('fk_Destytojastabelio_nr', 'priklauso')->references('tabelio_nr')->on('destytojas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_Erasmus_Projektaiid_Erasmus_Projektai', 'turi')->references('id_Erasmus_Projektai')->on('erasmus_projektai')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('erasmus_destytojai', function(Blueprint $table)
		{
			$table->dropForeign('priklauso');
			$table->dropForeign('turi');
		});
	}

}
