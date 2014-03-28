<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('adress', function(Blueprint $table)
		{
			$table->engine = 'InndoDB';
			$table->tinyInteger('id')->primary();
			$table->tinyInteger('department_id');
			$table->string('kg', 250);
			$table->string('ru', 250);
			$table->string('en', 250);
			$table->string('tr', 250);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('adress');
	}

}