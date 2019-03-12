<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubscribedThreadUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subscribed_thread_user', function(Blueprint $table)
		{
			$table->integer('SubscribedThreadID')->primary();
			$table->integer('ThreadID')->index('ThreadID');
			$table->integer('UserID')->index('UserID');
			$table->integer('SubscribedThreadCount');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subscribed_thread_user');
	}

}
