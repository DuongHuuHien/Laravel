<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblGiangvien extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('tbl_giangvien',function($table){
			$table->increments('id_giangvien');
			$table->string('magv',100);
			$table->string('hodem_gv',100);
			$table->string('ten_gv',100);
			$table->dateTime('ngaysinh_gv',100);
			$table->char('gioitinh_gv',4);
			$table->string('diachi_gv',100);
			$table->integer('sodienthoai_gv');
			$table->string('email_gv',100);
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
		Schema::dropIfExists('tbl_giangvien');
	}

}
