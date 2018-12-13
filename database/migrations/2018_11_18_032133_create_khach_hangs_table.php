<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->increments('makh');
            $table->string('ten');
            $table->string('diachi');
            $table->string('sdt');
            $table->date('ngaysinh');
            $table->integer('gioitinh');
            $table->string('email');
            $table->string('password');
            $table->integer('xu')->nullable();
            $table->integer('trangthai');
            $table->rememberToken();
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
        Schema::dropIfExists('khach_hangs');
    }
}
