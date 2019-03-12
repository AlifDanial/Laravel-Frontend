<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSubscribedThreadUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('subscribed_thread_user', function(Blueprint $table)
		{
			$table->foreign('ThreadID', 'subscribed_thread_user_ibfk_1')->references('ThreadID')->on('thread')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('UserID', 'subscribed_thread_user_ibfk_2')->references('UserID')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('subscribed_thread_user', function(Blueprint $table)
		{
			$table->dropForeign('subscribed_thread_user_ibfk_1');
			$table->dropForeign('subscribed_thread_user_ibfk_2');
		});
	}

}
