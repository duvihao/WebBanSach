<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('don_hangs', function (Blueprint $table) {
            $table->increments('madh');
            $table->integer('makh')->references('makh')->on('khachhang');
            $table->integer('tongtien');
            $table->integer('hinhthucthanhtoan')->references('mahtttt')->on('hinhthucthanhtoan');
            $table->integer('xusudung');
            $table->integer('giamgia');
            $table->integer('phiship');
            $table->integer('diachigiaohang')->references('madc')->on('sodiachi');
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
        Schema::dropIfExists('don_hangs');
    }
}
