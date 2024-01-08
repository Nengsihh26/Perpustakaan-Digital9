<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $primaryKey = 'Kode_MK';
    public $timestamps = false;

    protected $fillable = ['Kode_MK', 'Nama_MK', 'Dosen_Pengajar', 'Sks', 'Semester'];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'Dosen_Pengajar', 'NIP');
    }
}
