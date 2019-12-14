<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imones', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('pavadinimas');
			$table->string('sritis');
			$table->string('prisijungimo_vardas');
			$table->string('slaptazodis');
			$table->string('el_pastas');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('imones');
	}

}
