<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodi';
    protected $primaryKey = 'Kode_Prodi';
    public $incrementing = false;

    protected $fillable = ['Kode_Prodi', 'Nama_Prodi', 'Fakultas', 'Ketua_Prodi'];
}
