<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReplyUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reply_user', function(Blueprint $table)
		{
			$table->integer('ReplyUserID')->primary();
			$table->integer('ReplyID')->index('ReplyID');
			$table->integer('UserID')->index('UserID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reply_user');
	}

}
