<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->increments('id_pesanan');
            $table->date('tgl');
            $table->decimal('tot_harga', 10, 2);
            $table->string('status', 20);
            $table->string('metode_bayar', 255);
            $table->integer('id_rumahan')->unsigned();
            $table->foreign('id_rumahan')->references('id_rumahan')->on('pemilik_rumahan');
            $table->integer('id_pengambil')->unsigned();
            $table->foreign('id_pengambil')->references('id_pengambil')->on('pengambil_sampah');
            $table->integer('id_bank')->unsigned();
            $table->foreign('id_bank')->references('id_bank')->on('bank_sampah');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}