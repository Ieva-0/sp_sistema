<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPranesimasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pranesimas', function(Blueprint $table)
		{
			$table->foreign('fk_Imoneid1', 'siuncia_imone_studentui')->references('id')->on('studentas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_Imoneid', 'siuncia_studentas_imonei')->references('id')->on('imones')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pranesimas', function(Blueprint $table)
		{
			$table->dropForeign('siuncia_imone_studentui');
			$table->dropForeign('siuncia_studentas_imonei');
		});
	}

}
