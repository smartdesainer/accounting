<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelPenjualan extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('penjualan', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('pelanggan', 10)->references('kode')->on('pelanggan');
			$table->string('barang', 10)->references('kode')->on('barang');
			$table->integer('jumlah');
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
		Schema::drop('penjualan');
	}

}