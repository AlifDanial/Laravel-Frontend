<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('UserID', true);
			$table->string('UserFirstName');
			$table->string('UserLastName');
			$table->string('email');
			$table->string('password');
			$table->string('UserOccupation');
			$table->string('UserCountry');
			$table->dateTime('UserDateJoined')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('UserLastLogin')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
			$table->integer('UserEditProfileDate');
			$table->integer('UserAnswerCount');
			$table->integer('UserSubscribedThreadsCount');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
