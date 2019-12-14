<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToErasmusPrasymasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('erasmus_prasymas', function(Blueprint $table)
		{
			$table->foreign('fk_Erasmus_Projektaiid_Erasmus_Projektai', 'fk_priklauso')->references('id_Erasmus_Projektai')->on('erasmus_projektai')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_Studentasid', 'fk_teikia')->references('id')->on('studentas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('erasmus_prasymas', function(Blueprint $table)
		{
			$table->dropForeign('fk_priklauso');
			$table->dropForeign('fk_teikia');
		});
	}

}
