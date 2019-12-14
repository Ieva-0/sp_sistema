<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPraktikosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('praktikos', function(Blueprint $table)
		{
			$table->foreign('fk_Imoneid', 'Suteikia')->references('id')->on('imones')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('laikas', 'praktikos_ibfk_1')->references('id_Paskaitos_laikai')->on('paskaitos_laikai')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('praktikos', function(Blueprint $table)
		{
			$table->dropForeign('Suteikia');
			$table->dropForeign('praktikos_ibfk_1');
		});
	}

}
