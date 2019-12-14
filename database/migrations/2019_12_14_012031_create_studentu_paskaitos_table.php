<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentuPaskaitosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('studentu_paskaitos', function(Blueprint $table)
		{
			$table->integer('id_Studentu_paskaitos', true);
			$table->integer('fk_Paskaitaid')->index('turi_fk');
			$table->integer('fk_Studentasid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('studentu_paskaitos');
	}

}
