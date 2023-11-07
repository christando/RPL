<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasiTable extends Migration
{
    public function up()
    {
        Schema::create('lokasi', function (Blueprint $table) {
            $table->increments('id_lokasi');
            $table->string('alamat', 255);
            $table->string('kota', 255);
            $table->string('kode_pos', 10);
            $table->string('koordinat', 255);
            $table->text('deskripsi');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lokasi');
    }
}