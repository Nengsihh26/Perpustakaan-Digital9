<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with('prodi')->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        $prodi = Prodi::all();
        return view('mahasiswa.create', compact('prodi'));
    }

    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('msg', 'Data Berhasil disimpan.');
    }

    public function edit($NIM)
    {
        $mahasiswa = Mahasiswa::find($NIM);
        $prodi = Prodi::all();
        return view('mahasiswa.edit', compact('mahasiswa', 'prodi'));
    }

    public function update(Request $request, $NIM)
    {
        Mahasiswa::find($NIM)->update($request->all());
        return redirect()->route('mahasiswa.index')->with('msg', 'Data Berhasil diupdate.');
    }

    public function destroy($NIM)
    {
        Mahasiswa::find($NIM)->delete();
        return redirect()->route('mahasiswa.index')->with('msg', 'Data Berhasil dihapus.');
    }
}
