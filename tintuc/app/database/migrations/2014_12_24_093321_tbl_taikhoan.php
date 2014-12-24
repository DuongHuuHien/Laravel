<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblTaikhoan extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('tbl_taikhoan',function($table){
			$table->increments('id_taikhoan');
			$table->string('matk',100);
			$table->string('ten_tk',100);
			$table->string('quyen',100);
			$table->string('password',100);
			$table->string('email',100);
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
		//Schema::dropIfExists('tbl_taikhoan');
	
	}

}
