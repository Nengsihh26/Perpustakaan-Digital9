@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Matakuliah</h2>
        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Kode_MK">Kode Matakuliah:</label>
                <input type="text" class="form-control" id="Kode_MK" name="Kode_MK" placeholder="kode mk" required>
            </div>
            <div class="form-group">
                <label for="Nama_MK">Nama Matakuliah:</label>
                <input type="text" class="form-control" id="Nama_MK" name="Nama_MK" placeholder="nama mk" required>
            </div>
            <div class="form-group">
                <label for="Dosen_Pengajar">Dosen Pengajar:</label>
                <select class="form-control" id="Dosen_Pengajar" name="Dosen_Pengajar" required>
                    <option value="" disabled selected>-- Dosen Pengajar--</option>
                    @foreach($dosen as $dosen)
                        <option value="{{ $dosen->NIP }}">{{ $dosen->Nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="Sks">SKS:</label>
                <input type="number" class="form-control" id="Sks" name="Sks" placeholder="sks" required>
            </div>
            <div class="form-group">
                <label for="Semester">Semester:</label>
                <input type="number" class="form-control" id="Semester" name="Semester" placeholder="semester" required>
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
