<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatakuliahTable extends Migration
{
    public function up()
    {
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->integer('Kode_MK')->primary();
            $table->string('Nama_MK');
            $table->unsignedBigInteger('Dosen_Pengajar');
            $table->foreign('Dosen_Pengajar')->references('NIP')->on('dosen');
            $table->integer('Sks');
            $table->integer('Semester');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('matakuliah');
    }
}
