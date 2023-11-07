<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankSampahTable extends Migration
{
    public function up()
    {
        Schema::create('bank_sampah', function (Blueprint $table) {
            $table->increments('id_bank');
            $table->integer('id_lokasi')->unsigned();
            $table->foreign('id_lokasi')->references('id_lokasi')->on('lokasi');
            $table->string('nama_bank', 255);
            $table->string('no_telp', 20);
            $table->string('email', 255);
            $table->string('password', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('bank_sampah');
    }
}