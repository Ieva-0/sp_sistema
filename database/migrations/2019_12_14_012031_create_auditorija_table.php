<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuditorijaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('auditorija', function(Blueprint $table)
		{
			$table->string('kabineto_Nr');
			$table->string('adresas');
			$table->integer('vietu_skaicius');
			$table->integer('id_Auditorija')->primary();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('auditorija');
	}

}
