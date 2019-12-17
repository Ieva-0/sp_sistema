<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaskaitaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paskaita', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('data');
			$table->time('trukme');
			$table->string('vieta');
			$table->string('tema')->nullable();
			$table->string('papildoma_informacija')->nullable();
			$table->string('lektorius')->nullable();
			$table->integer('laikas')->index('paskaita_ibfk_1');
			$table->integer('mokymo_kalba')->index('paskaita_ibfk_2');
			$table->integer('fk_Darbuotojasid')->index('fk_veda');
			$table->integer('fk_Auditorijaid_Auditorija')->index('fk_vyksta');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('paskaita');
	}

}
