<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReplyUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reply_user', function(Blueprint $table)
		{
			$table->foreign('ReplyID', 'reply_user_ibfk_1')->references('ReplyID')->on('reply')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('UserID', 'reply_user_ibfk_2')->references('UserID')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reply_user', function(Blueprint $table)
		{
			$table->dropForeign('reply_user_ibfk_1');
			$table->dropForeign('reply_user_ibfk_2');
		});
	}

}
