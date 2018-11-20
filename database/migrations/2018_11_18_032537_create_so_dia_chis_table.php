<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoDiaChisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('so_dia_chis', function (Blueprint $table) {
            $table->increments('madc');
            $table->integer('makh')->references('makh')->on('khachhang');
            $table->integer('sonha');
            $table->string('phuongxa');
            $table->string('quanhuyen');
            $table->string('thanhpho');
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
        Schema::dropIfExists('so_dia_chis');
    }
}
