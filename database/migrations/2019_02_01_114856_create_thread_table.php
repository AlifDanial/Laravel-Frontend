<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThreadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thread', function(Blueprint $table)
		{
			$table->increments('ThreadID');
			$table->integer('ThreadModeratorID');
			$table->integer('ThreadUserID');
			$table->string('ThreadSubject');
			$table->string('ThreadDescription', 500);
			$table->integer('ThreadVoteCount');
			$table->integer('ThreadSubscribedUserID');
			$table->integer('ThreadSubscribeduserCount');
			$table->integer('ThreadViewsCount');
			$table->integer('ThreadAnswersCount');
			$table->timestamp('ThreadCreatedDate')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('thread');
	}

}
