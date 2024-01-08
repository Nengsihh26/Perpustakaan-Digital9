<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenTable extends Migration
{
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->bigIncrements('NIP')->unsigned();
            $table->string('Nama');
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
        Schema::dropIfExists('dosen');
    }
}
