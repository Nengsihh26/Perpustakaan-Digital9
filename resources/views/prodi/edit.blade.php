@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Program Studi</h2>
        <form action="{{ route('prodi.update', $prodi->Kode_Prodi) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Kode_Prodi">Kode Prodi:</label>
                <input type="text" class="form-control" id="Kode_Prodi" name="Kode_Prodi" value="{{ $prodi->Kode_Prodi }}" readonly  style="background-color: #f8f9fa; cursor: not-allowed;">
            </div>
            <div class="form-group">
                <label for="Nama_Prodi">Nama Prodi:</label>
                <input type="text" class="form-control" id="Nama_Prodi" name="Nama_Prodi" value="{{ $prodi->Nama_Prodi }}" required>
            </div>
            <div class="form-group">
                <label for="Fakultas">Fakultas:</label>
                <input type="text" class="form-control" id="Fakultas" name="Fakultas" value="{{ $prodi->Fakultas }}" required>
            </div>
            <div class="form-group">
                <label for="Ketua_Prodi">Ketua Prodi:</label>
                <input type="text" class="form-control" id="Ketua_Prodi" name="Ketua_Prodi" value="{{ $prodi->Ketua_Prodi }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
