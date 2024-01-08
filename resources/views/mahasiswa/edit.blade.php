@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Mahasiswa</h2>
        <form action="{{ route('mahasiswa.update', $mahasiswa->NIM) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="NIM">NIM:</label>
                <input type="text" class="form-control" id="NIM" name="NIM" value="{{ $mahasiswa->NIM }}" readonly  style="background-color: #f8f9fa; cursor: not-allowed;">
            </div>
            <div class="form-group">
                <label for="Nama">Nama:</label>
                <input type="text" class="form-control" id="Nama" name="Nama" value="{{ $mahasiswa->Nama }}" required>
            </div>
            <div class="form-group">
                <label for="Prodi_id">Program Studi:</label>
                <select class="form-control" id="Prodi_id" name="Prodi_id" required>
                    @foreach($prodi as $prodi)
                        <option value="{{ $prodi->Kode_Prodi }}" {{ $prodi->Kode_Prodi == $mahasiswa->Prodi_id ? 'selected' : '' }}>
                            {{ $prodi->Nama_Prodi }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="Jenis_Kelamin">Jenis Kelamin:</label>
                <select class="form-control" id="Jenis_Kelamin" name="Jenis_Kelamin" required>
                    <option value="" disabled>-- Jenis Kelamin --</option>
                    <option value="Laki-Laki" @if($mahasiswa->Jenis_Kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                    <option value="Perempuan" @if($mahasiswa->Jenis_Kelamin == 'Perempuan') selected @endif>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Tanggal_Lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="Tanggal_Lahir" name="Tanggal_Lahir" value="{{ $mahasiswa->Tanggal_Lahir }}" required>
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat:</label>
                <input type="text" class="form-control" id="Alamat" name="Alamat" value="{{ $mahasiswa->Alamat }}" required>
            </div>
            <div class="form-group">
                <label for="No_HP">No. Hp:</label>
                <input type="text" class="form-control" id="No_HP" name="No_HP" value="{{ $mahasiswa->No_HP }}" required>
            </div>
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="text" class="form-control" id="Email" name="Email" value="{{ $mahasiswa->Email }}" required>
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
