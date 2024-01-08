<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', compact('dosen'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        Dosen::create($request->all());
        return redirect()->route('dosen.index')->with('msg', 'Data Berhasil disimpan.');
    }

    public function edit($NIP)
    {
        $dosen = Dosen::find($NIP);
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $NIP)
    {
        Dosen::find($NIP)->update($request->all());
        return redirect()->route('dosen.index')->with('msg', 'Data Berhasil diupdate.');
    }

    public function destroy($NIP)
    {
        Dosen::find($NIP)->delete();
        return redirect()->route('dosen.index')->with('msg', 'Data Berhasil dihapus.');
    }
}
