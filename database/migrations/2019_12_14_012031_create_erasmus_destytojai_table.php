<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateErasmusDestytojaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('erasmus_destytojai', function(Blueprint $table)
		{
			$table->integer('id_Erasmus_destytojai')->primary();
			$table->integer('fk_Erasmus_Projektaiid_Erasmus_Projektai')->index('turi');
			$table->integer('fk_Destytojastabelio_nr')->index('priklauso');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('erasmus_destytojai');
	}

}
