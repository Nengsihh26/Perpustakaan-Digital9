<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'NIP';
    public $timestamps = false;

    protected $fillable = ['NIP', 'Nama', 'Jenis_Kelamin', 'Tanggal_Lahir', 'Alamat', 'No_HP', 'Email'];
}
