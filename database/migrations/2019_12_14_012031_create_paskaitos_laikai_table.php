<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaskaitosLaikaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paskaitos_laikai', function(Blueprint $table)
		{
			$table->integer('id_Paskaitos_laikai')->primary();
			$table->char('name', 13);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('paskaitos_laikai');
	}

}
