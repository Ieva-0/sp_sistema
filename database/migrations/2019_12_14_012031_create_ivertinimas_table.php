<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIvertinimasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ivertinimas', function(Blueprint $table)
		{
			$table->integer('Modulio_id')->nullable();
			$table->integer('ivertinimas');
			$table->integer('id_Ivertinimas')->primary();
			$table->integer('fk_Studentasid')->index('fk_Pateikia');
			$table->integer('fk_Moduliskodas')->index('fk_t_turi');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ivertinimas');
	}

}
