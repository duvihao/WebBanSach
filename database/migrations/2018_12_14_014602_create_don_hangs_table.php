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
            $table->integer('makh')->unsigned();
            $table->foreign('makh')->references('id')->on('khach_hangs');
            $table->integer('tongtien');
            $table->integer('hinhthucthanhtoan')->unsigned();
            $table->foreign('hinhthucthanhtoan')->references('mahttt')->on('hinh_thuc_thanh_toans');
            $table->integer('phiship');
            $table->integer('diachigiaohang')->unsigned();
            $table->foreign('diachigiaohang')->references('madc')->on('so_dia_chis');
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
