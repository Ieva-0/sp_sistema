<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMentorystesPrasymasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mentorystes_prasymas', function(Blueprint $table)
		{
			$table->foreign('fk_Studentasid', 'teikia')->references('id')->on('studentas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mentorystes_prasymas', function(Blueprint $table)
		{
			$table->dropForeign('teikia');
		});
	}

}
