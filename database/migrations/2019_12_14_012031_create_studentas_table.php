<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('studentas', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('Vardas')->nullable();
			$table->string('Pavarde')->nullable();
			$table->string('Prisijungimo_vardas');
			$table->string('Slaptazodis');
			$table->string('El_Pastas');
			$table->string('Akademine_grupe')->nullable();
			$table->integer('Stojimo_metai')->nullable();
			$table->integer('Kursas')->nullable();
			$table->string('Studiju_programa')->nullable();
			$table->date('Gimimo_data')->nullable();
			$table->integer('gretutines_studijos')->nullable();
			$table->integer('fk_stringid_string')->unique('fk_stringid_string');
			$table->integer('fk_Praktikaid')->nullable()->index('dalyvauja');
			$table->integer('fk_Destytojastabelio_nr')->nullable()->unique('fk_Destytojastabelio_nr');
			$table->integer('fk_Mokslo_grupeid_Mokslo_grupe')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('studentas');
	}

}
