<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCropThreadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crop_thread', function(Blueprint $table)
		{
			$table->integer('CropThreadID', true);
			$table->integer('CropID')->index('CropID_2');
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
		Schema::drop('crop_thread');
	}

}
