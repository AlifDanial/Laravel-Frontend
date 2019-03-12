<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReplyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reply', function(Blueprint $table)
		{
			$table->integer('ReplyID')->primary();
			$table->integer('ReplyAnswerID');
			$table->integer('ReplyUserID');
			$table->string('ReplyContent');
			$table->integer('ReplyDate');
			$table->integer('ReplyVoteCount');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reply');
	}

}
