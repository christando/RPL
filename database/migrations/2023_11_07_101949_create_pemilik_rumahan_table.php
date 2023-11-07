<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemilikRumahanTable extends Migration
{
    public function up()
    {
        Schema::create('pemilik_rumahan', function (Blueprint $table) {
            $table->increments('id_rumahan');
            $table->integer('id_lokasi')->unsigned();
            $table->foreign('id_lokasi')->references('id_lokasi')->on('lokasi');
            $table->string('nama_rumahan', 255);
            $table->string('no_telp', 20);
            $table->string('email', 255);
            $table->string('password', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemilik_rumahan');
    }
}