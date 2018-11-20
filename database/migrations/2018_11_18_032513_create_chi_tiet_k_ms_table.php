<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietKMsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_k_ms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mactkm')->references('mactkm')->on('chuongtrinhkm');
            $table->integer('masp')->references('masp')->on('sanpham');
            $table->integer('giatrikm');
            $table->integer('trangthai');
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
        Schema::dropIfExists('chi_tiet_k_ms');
    }
}
