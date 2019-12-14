<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGretutinesStudijosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gretutines_studijos', function(Blueprint $table)
		{
			$table->integer('id_Gretutines_studijos')->primary();
			$table->char('name', 12);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gretutines_studijos');
	}

}
