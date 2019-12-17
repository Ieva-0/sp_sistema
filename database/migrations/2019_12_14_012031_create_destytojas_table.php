<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDestytojasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('destytojas', function(Blueprint $table)
		{
			$table->integer('tabelio_nr')->primary();
			$table->string('vardas')->nullable();
			$table->string('pavarde')->nullable();
			$table->string('prisijungimo_vardas');
			$table->string('slaptazodis');
			$table->string('el_pastas');
			$table->boolean('laisvas_karjeros_mentorius')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('destytojas');
	}

}
