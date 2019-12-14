<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToErasmusStudentaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('erasmus_studentai', function(Blueprint $table)
		{
			$table->foreign('fk_Erasmus_Projektaiid_Erasmus_Projektai', 'fk_turi')->references('id_Erasmus_Projektai')->on('erasmus_projektai')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_Studentasid', 'fkk_priklauso')->references('id')->on('studentas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('erasmus_studentai', function(Blueprint $table)
		{
			$table->dropForeign('fk_turi');
			$table->dropForeign('fkk_priklauso');
		});
	}

}
