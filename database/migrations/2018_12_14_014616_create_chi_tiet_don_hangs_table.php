<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietDonHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_don_hangs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('madh')->unsigned();
            $table->foreign('madh')->references('madh')->on('don_hangs');
            $table->integer('masp')->unsigned();
            $table->foreign('masp')->references('masp')->on('san_phams');
            $table->integer('soluong');
            $table->integer('dongia');
            $table->integer('thanhtien');
            $table->integer('giamgia');
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
        Schema::dropIfExists('chi_tiet_don_hangs');
    }
}
