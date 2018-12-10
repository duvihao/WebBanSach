<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->increments('masp');
            $table->string('tensp');
            $table->string('hinhanh');
            $table->integer('soluong');
            $table->integer('matl')->references('matl')->on('theloai');
            $table->integer('sotrang');
            $table->integer('manxb')->references('manxb')->on('nxb');
            $table->date('ngayxb');
            $table->integer('matg')->references('matg')->on('tacgia');
            $table->integer('taiban');
            $table->string('mota');
            $table->string('loaibia');
            $table->string('kichthuoc');
            $table->integer('gia');
            $table->string('alias');
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
        Schema::dropIfExists('san_phams');
    }
}
