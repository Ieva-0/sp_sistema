<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDarbuotojasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('darbuotojas', function(Blueprint $table)
		{
			$table->foreign('fk_Imoneid', 'dirba')->references('id')->on('imones')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('darbuotojas', function(Blueprint $table)
		{
			$table->dropForeign('dirba');
		});
	}

}
