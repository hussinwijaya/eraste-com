<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesans', function (Blueprint $table) {
            $table->bigIncrements('id_pesan');
            $table->foreign('id_pesan')->references('id_produk')->on('produk')->onDelete('cascade')->onUpdate('cascade');
            $table->string('order_no');
            $table->string('customer_name');
            $table->string('phone');
            $table->integer('qty');
            $table->double('total');
            $table->text('address');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesans');
    }
}
