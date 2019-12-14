<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToModulioUzsiemimasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('modulio_uzsiemimas', function(Blueprint $table)
		{
			$table->foreign('fk_Auditorijaid_Auditorija', 'Vyksta')->references('id_Auditorija')->on('auditorija')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_Destytojastabelio_nr', 'desto')->references('tabelio_nr')->on('destytojas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('laikas', 'modulio_uzsiemimas_ibfk_1')->references('id_Paskaitos_laikai')->on('paskaitos_laikai')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tipas', 'modulio_uzsiemimas_ibfk_2')->references('id_Uzsiemimo_tipas')->on('uzsiemimo_tipas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_Moduliskodas', 'sudaro')->references('kodas')->on('modulis')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('modulio_uzsiemimas', function(Blueprint $table)
		{
			$table->dropForeign('Vyksta');
			$table->dropForeign('desto');
			$table->dropForeign('modulio_uzsiemimas_ibfk_1');
			$table->dropForeign('modulio_uzsiemimas_ibfk_2');
			$table->dropForeign('sudaro');
		});
	}

}
