<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\Dosen;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::with('dosen')->get();
        return view('matakuliah.index', compact('matakuliah'));
    }

    public function create()
    {
        $dosen = Dosen::all();
        return view('matakuliah.create', compact('dosen'));
    }

    public function store(Request $request)
    {
        Matakuliah::create($request->all());
        return redirect()->route('matakuliah.index')->with('msg', 'Data Berhasil disimpan.');
    }

    public function edit($Kode_MK)
    {
        $matakuliah = Matakuliah::find($Kode_MK);
        $dosen = Dosen::all();
        return view('matakuliah.edit', compact('matakuliah', 'dosen'));
    }

    public function update(Request $request, $Kode_MK)
    {
        Matakuliah::find($Kode_MK)->update($request->all());
        return redirect()->route('matakuliah.index')->with('msg', 'Data Berhasil diupdate.');
    }

    public function destroy($Kode_MK)
    {
        Matakuliah::find($Kode_MK)->delete();
        return redirect()->route('matakuliah.index')->with('msg', 'Data Berhasil dihapus.');
    }
}
