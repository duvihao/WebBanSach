<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhiShipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phi_ships', function (Blueprint $table) {
            $table->increments('maps');
            $table->string('thanhpho');
            $table->string('phuongxa');
            $table->string('quanhuyen');
            $table->string('loaigiaohang');
            $table->integer('sotien');
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
        Schema::dropIfExists('phi_ships');
    }
}
