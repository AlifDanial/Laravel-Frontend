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
			$table->string('UserEmail');
			$table->string('UserPassword');
			$table->string('UserOccupation');
			$table->string('UserCountry');
			$table->dateTime('UserDateJoined')->default('CURRENT_TIMESTAMP(6)');
			$table->dateTime('UserLastLogin')->default('CURRENT_TIMESTAMP(6)');
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
