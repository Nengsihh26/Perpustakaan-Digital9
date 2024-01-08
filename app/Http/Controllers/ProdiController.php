<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $prodi = Prodi::all();
        return view('prodi.index', compact('prodi'));
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function store(Request $request)
    {
        Prodi::create($request->all());
        return redirect()->route('prodi.index')->with('msg', 'Data Berhasil disimpan.');
    }

    public function edit($Kode_Prodi)
    {
        $prodi = Prodi::find($Kode_Prodi);
        return view('prodi.edit', compact('prodi'));
    }

    public function update(Request $request, $Kode_Prodi)
    {
        Prodi::find($Kode_Prodi)->update($request->all());
        return redirect()->route('prodi.index')->with('msg', 'Data Berhasil diupdate.');
    }

    public function destroy($Kode_Prodi)
    {
        Prodi::find($Kode_Prodi)->delete();
        return redirect()->route('prodi.index')->with('msg', 'Data Berhasil dihapus.');
    }
}
