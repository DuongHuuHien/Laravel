<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblMonhoc extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('tbl_monhoc',function($table){
			$table->increments('id_monhoc');
			$table->string('mamon',100);
			$table->string('tenmon',100);
			$table->integer('sodonvihoctrinh');
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
		Schema::dropIfExists('tbl_monhoc');
	}

}
