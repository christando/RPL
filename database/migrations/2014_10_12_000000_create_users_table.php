<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id_user');
            $table->integer('id_lokasi')->unsigned();
            $table->foreign('id_lokasi')->references('id_lokasi')->on('lokasi');
            $table->string('nama_user', 255);
            $table->string('no_telp', 20);
            $table->string('email', 255);
            $table->string('password', 255);
	        $table->string('jenis_user', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
