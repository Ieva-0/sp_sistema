<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUzsiemimoTipasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uzsiemimo_tipas', function(Blueprint $table)
		{
			$table->integer('id_Uzsiemimo_tipas')->primary();
			$table->char('name', 21);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('uzsiemimo_tipas');
	}

}
