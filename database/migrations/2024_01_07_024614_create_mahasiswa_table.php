<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('NIM')->unique();
            $table->string('Nama');
            $table->unsignedBigInteger('Prodi_id');
            $table->foreign('Prodi_id')->references('Kode_Prodi')->on('prodi');
            $table->string('Jenis_Kelamin');
            $table->date('Tanggal_Lahir');
            $table->string('Alamat');
            $table->string('No_HP');
            $table->string('Email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
