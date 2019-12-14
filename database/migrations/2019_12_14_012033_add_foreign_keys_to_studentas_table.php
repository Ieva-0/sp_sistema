<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('studentas', function(Blueprint $table)
		{
			$table->foreign('fk_Praktikaid', 'dalyvauja')->references('id')->on('praktikos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_Destytojastabelio_nr', 'mentoriauja')->references('tabelio_nr')->on('destytojas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('studentas', function(Blueprint $table)
		{
			$table->dropForeign('dalyvauja');
			$table->dropForeign('mentoriauja');
		});
	}

}
