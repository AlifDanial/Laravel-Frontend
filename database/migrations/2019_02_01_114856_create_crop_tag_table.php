<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCropTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crop_tag', function(Blueprint $table)
		{
			$table->integer('CropTagID')->primary();
			$table->integer('CropID')->index('CropID');
			$table->integer('TagID')->index('TagID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crop_tag');
	}

}
