<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIvertinimasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ivertinimas', function(Blueprint $table)
		{
			$table->foreign('fk_Studentasid', 'fk_Pateikia')->references('id')->on('studentas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_Moduliskodas', 'fk_t_turi')->references('kodas')->on('modulis')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ivertinimas', function(Blueprint $table)
		{
			$table->dropForeign('fk_Pateikia');
			$table->dropForeign('fk_t_turi');
		});
	}

}
