<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblChuong extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('tbl_chuong',function($table){
			$table->increments('id_chuong');
			$table->string('machuong',100);
			$table->string('tenchuong',100);
			$table->string('tomtat',100);
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
		Schema::dropIfExists('tbl_chuong');
	}

}
