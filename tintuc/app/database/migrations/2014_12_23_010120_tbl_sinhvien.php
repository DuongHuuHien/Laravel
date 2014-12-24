<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblSinhvien extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('tbl_sinhvien',function($table){
			$table->increments('id_sinhvien');
			$table->string('masv',100);
			$table->string('hodem_sv',100);
			$table->string('ten_sv',100);
			$table->dateTime('ngaysinh_sv',100);
			$table->char('gioitinh_sv',4);
			$table->string('diachi_sv',100);
			$table->integer('sodienthoai_sv');
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
		Schema::dropIfExists('tbl_sinhvien');
	}

}
