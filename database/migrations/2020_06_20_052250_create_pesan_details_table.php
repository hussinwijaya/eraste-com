<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('barang_id');
            $table->integer('pesanan_id');
            $table->integer('jumlah');
            $table->integer('jumlah_harga');
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
        Schema::dropIfExists('pesan_details');
    }
}
