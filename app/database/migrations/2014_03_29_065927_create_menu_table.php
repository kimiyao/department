<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menu', function(Blueprint $table)
		{
			$table->engine = 'InndoDB';
			$table->tinyInteger('id')->primary();
			$table->tinyInteger('parent_id');
			$table->string('kg', 100);
			$table->string('ru', 100);
			$table->string('en', 100);
			$table->string('tr', 100);
			$table->string('url', 100);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('menu');
	}

}