<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentaiModuliaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('studentai_moduliai', function(Blueprint $table)
		{
			$table->foreign('fk_Studentasid', 'fk_fk_turi')->references('id')->on('studentas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('studentai_moduliai', function(Blueprint $table)
		{
			$table->dropForeign('fk_fk_turi');
		});
	}

}
