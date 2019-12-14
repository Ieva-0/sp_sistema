<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateErasmusStudentaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('erasmus_studentai', function(Blueprint $table)
		{
			$table->integer('id_Erasmus_studentai')->primary();
			$table->integer('fk_Studentasid')->index('fkk_priklauso');
			$table->integer('fk_Erasmus_Projektaiid_Erasmus_Projektai')->index('fk_turi');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('erasmus_studentai');
	}

}
