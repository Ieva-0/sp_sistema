<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateErasmusPrasymasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('erasmus_prasymas', function(Blueprint $table)
		{
			$table->string('motyvacinis_tekstas');
			$table->date('data');
			$table->integer('id_Erasmus_prasymas')->primary();
			$table->integer('fk_Erasmus_Projektaiid_Erasmus_Projektai')->index('fk_priklauso');
			$table->integer('fk_Studentasid')->index('fk_teikia');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('erasmus_prasymas');
	}

}
