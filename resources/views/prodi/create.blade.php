@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Program Studi</h2>
        <form action="{{ route('prodi.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Kode_Prodi">Kode Prodi:</label>
                <input type="text" class="form-control" id="Kode_Prodi" name="Kode_Prodi" placeholder="kode prodi" required>
            </div>
            <div class="form-group">
                <label for="Nama_Prodi">Nama Prodi:</label>
                <input type="text" class="form-control" id="Nama_Prodi" name="Nama_Prodi" placeholder="nama prodi" required>
            </div>
            <div class="form-group">
                <label for="Fakultas">Fakultas:</label>
                <input type="text" class="form-control" id="Fakultas" name="Fakultas" placeholder="fakultas" required>
            </div>
            <div class="form-group">
                <label for="Ketua_Prodi">Ketua Prodi:</label>
                <input type="text" class="form-control" id="Ketua_Prodi" name="Ketua_Prodi" placeholder="ketua prodi" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <style>
        .container {
        padding-bottom: 70px;
        }
        .container {
            padding-bottom: 70px;
        }
    </style>
@endsection
