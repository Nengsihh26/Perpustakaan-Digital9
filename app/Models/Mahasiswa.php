<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'NIM';
    public $timestamps = false;

    protected $fillable = ['NIM', 'Nama', 'Prodi_id', 'Jenis_Kelamin', 'Tanggal_Lahir', 'Alamat', 'No_HP', 'Email'];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'Prodi_id', 'Kode_Prodi');
    }
}
