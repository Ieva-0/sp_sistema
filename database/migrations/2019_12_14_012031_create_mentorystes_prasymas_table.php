<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMentorystesPrasymasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mentorystes_prasymas', function(Blueprint $table)
		{
			$table->string('motyvacinis_tekstas')->nullable();
			$table->date('data')->nullable();
			$table->integer('id_Mentorystes_prasymas')->primary();
			$table->integer('fk_Studentasid')->unique('fk_Studentasid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mentorystes_prasymas');
	}

}
