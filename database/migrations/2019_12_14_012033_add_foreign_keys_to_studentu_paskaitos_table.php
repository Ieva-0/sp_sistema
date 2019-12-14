<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentuPaskaitosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('studentu_paskaitos', function(Blueprint $table)
		{
			$table->foreign('fk_Paskaitaid', 'turi_fk')->references('id')->on('paskaita')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('studentu_paskaitos', function(Blueprint $table)
		{
			$table->dropForeign('turi_fk');
		});
	}

}
