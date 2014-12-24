<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblHocky extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('tbl_hocky',function($table){
			$table->increments('id_hocky');
			$table->string('mahk',100);
			$table->string('ten_hocky',100);
			$table->integer('sotinchi');
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
		Schema::create('tbl_hocky');
	}

}
