<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCropTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('crop_tag', function(Blueprint $table)
		{
			$table->foreign('CropID', 'crop_tag_ibfk_1')->references('CropID')->on('crop')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('TagID', 'crop_tag_ibfk_2')->references('TagID')->on('tag')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('crop_tag', function(Blueprint $table)
		{
			$table->dropForeign('crop_tag_ibfk_1');
			$table->dropForeign('crop_tag_ibfk_2');
		});
	}

}
