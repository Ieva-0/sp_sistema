<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentaiModuliaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('studentai_moduliai', function(Blueprint $table)
		{
			$table->integer('id_Studentai_moduliai')->primary();
			$table->integer('fk_Studentasid')->index('fk_fk_turi');
			$table->integer('fk_Moduliskodas');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('studentai_moduliai');
	}

}
