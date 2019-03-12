<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCropattributeTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cropattribute_tag', function(Blueprint $table)
		{
			$table->integer('CropAttributeTagID')->primary();
			$table->integer('TagID');
			$table->integer('CropAttributeID');
			$table->integer('CropAttributeCropID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cropattribute_tag');
	}

}
