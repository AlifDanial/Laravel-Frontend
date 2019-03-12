<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserThreadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_thread', function(Blueprint $table)
		{
			$table->integer('UserThreadID', true);
			$table->integer('UserID')->unique('UserID');
			$table->integer('ThreadID')->index('ThreadID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_thread');
	}

}
