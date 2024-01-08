@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Matakuliah</h2>
        <form action="{{ route('matakuliah.update', $matakuliah->Kode_MK) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Kode_MK">Kode Matakuliah:</label>
                <input type="text" class="form-control" id="Kode_MK" name="Kode_MK" value="{{ $matakuliah->Kode_MK }}" readonly  style="background-color: #f8f9fa; cursor: not-allowed;">
            </div>
            <div class="form-group">
                <label for="Nama_MK">Nama Matakuliah:</label>
                <input type="text" class="form-control" id="Nama_MK" name="Nama_MK" value="{{ $matakuliah->Nama_MK }}" required>
            </div>
            <div class="form-group">
                <label for="Dosen_Pengajar">Dosen Pengajar:</label>
                <select class="form-control" id="Dosen_Pengajar" name="Dosen_Pengajar" required>
                    @foreach($dosen as $dosen)
                        <option value="{{ $dosen->NIP }}" {{ $dosen->NIP == $matakuliah->Dosen_Pengajar ? 'selected' : '' }}>
                            {{ $dosen->Nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="Sks">SKS:</label>
                <input type="number" class="form-control" id="Sks" name="Sks" value="{{ $matakuliah->Sks }}" required>
            </div>
            <div class="form-group">
                <label for="Semester">Semester:</label>
                <input type="number" class="form-control" id="Semester" name="Semester" value="{{ $matakuliah->Semester }}" required>
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
