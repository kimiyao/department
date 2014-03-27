<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('researches', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->tinyInteger('id')->primary();
			$table->tinyInteger('type');
			$table->tinyInteger('department_id');
			$table->string('title', 100);
			$table->text('description');
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
		Schema::drop('researches');
	}

}