<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('info', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->tinyInteger('id')->primary();
			$table->tinyInteger('type');
			$table->tinyInteger('department_id');
			$table->string('title', 100);
			$table->string('en', 100);
			$table->string('kg', 100);
			$table->string('tr', 100);
			$table->string('ru', 100);
			$table->text('description_en');
			$table->text('description_kg');
			$table->text('description_tr');
			$table->text('description_ru');
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
		Schema::drop('info');
	}

}