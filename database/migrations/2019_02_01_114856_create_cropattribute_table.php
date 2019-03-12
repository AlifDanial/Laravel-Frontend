<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCropattributeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cropattribute', function(Blueprint $table)
		{
			$table->integer('CropAttributeID')->primary();
			$table->integer('CropID');
			$table->integer('CropAttributeTagID');
			$table->string('CropAttributeName');
			$table->string('CropAttributeData');
			$table->integer('CropAttributeAddedDate');
			$table->integer('CropAttributeEditedData');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cropattribute');
	}

}
