<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCropThreadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('crop_thread', function(Blueprint $table)
		{
			$table->foreign('CropID', 'crop_thread_ibfk_1')->references('CropID')->on('crop')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ThreadID', 'crop_thread_ibfk_2')->references('ThreadID')->on('thread')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('crop_thread', function(Blueprint $table)
		{
			$table->dropForeign('crop_thread_ibfk_1');
			$table->dropForeign('crop_thread_ibfk_2');
		});
	}

}
