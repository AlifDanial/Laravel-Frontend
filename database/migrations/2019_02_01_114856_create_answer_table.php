<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnswerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('answer', function(Blueprint $table)
		{
			$table->integer('AnswerID')->primary();
			$table->integer('AnswerContent');
			$table->integer('AnswerDate');
			$table->integer('AnswerVoteCount');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('answer');
	}

}
