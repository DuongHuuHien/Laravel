<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblTacgia extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('tbl_tacgia',function($table){
			$table->increments('id_tacgia');
			$table->string('matg',100);
			$table->string('tentacgia',100);
			$table->integer('namsanxuat');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::dropIfExists('tbl_tacgia');
	}

}
