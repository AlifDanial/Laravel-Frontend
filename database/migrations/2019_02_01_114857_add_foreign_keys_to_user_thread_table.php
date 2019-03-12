<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserThreadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_thread', function(Blueprint $table)
		{
			$table->foreign('UserID', 'user_thread_ibfk_1')->references('UserID')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ThreadID', 'user_thread_ibfk_2')->references('ThreadID')->on('thread')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_thread', function(Blueprint $table)
		{
			$table->dropForeign('user_thread_ibfk_1');
			$table->dropForeign('user_thread_ibfk_2');
		});
	}

}
