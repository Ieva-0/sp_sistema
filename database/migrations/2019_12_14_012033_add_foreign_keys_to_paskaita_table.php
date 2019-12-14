<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPaskaitaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('paskaita', function(Blueprint $table)
		{
			$table->foreign('fk_Darbuotojasid', 'fk_veda')->references('id')->on('darbuotojas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_Auditorijaid_Auditorija', 'fk_vyksta')->references('id_Auditorija')->on('auditorija')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('laikas', 'paskaita_ibfk_1')->references('id_Paskaitos_laikai')->on('paskaitos_laikai')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('mokymo_kalba', 'paskaita_ibfk_2')->references('id_Mokymo_kalbos')->on('mokymo_kalbos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('paskaita', function(Blueprint $table)
		{
			$table->dropForeign('fk_veda');
			$table->dropForeign('fk_vyksta');
			$table->dropForeign('paskaita_ibfk_1');
			$table->dropForeign('paskaita_ibfk_2');
		});
	}

}
