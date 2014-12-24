<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblLoaimonhoc extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('tbl_loaimonhoc',function($table){
			$table->increments('id_loaimonhoc');
			$table->string('maloaimonhoc',100);
			$table->string('tenloaimonhoc',100);
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
		Schema::dropIfExists('tbl_loaimonhoc');
	}

}
