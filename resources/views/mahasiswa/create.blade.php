@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Mahasiswa</h2>
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="NIM">NIM:</label>
                <input type="text" class="form-control" id="NIM" name="NIM" placeholder="nim" required>
            </div>
            <div class="form-group">
                <label for="Nama">Nama:</label>
                <input type="text" class="form-control" id="Nama" name="Nama" placeholder="nama" required>
            </div>
            <div class="form-group">
                <label for="Prodi_id">Program Studi:</label>
                <select class="form-control" id="Prodi_id" name="Prodi_id" required>
                    <option value="" disabled selected>-- Program Studi --</option>
                    @foreach($prodi as $prodi)
                        <option value="{{ $prodi->Kode_Prodi }}">{{ $prodi->Nama_Prodi }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="Jenis_Kelamin">Jenis Kelamin:</label>
                <select class="form-control" id="Jenis_Kelamin" name="Jenis_Kelamin" required>
                    <option value="" disabled selected>-- Jenis Kelamin --</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Tanggal_Lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="Tanggal_Lahir" name="Tanggal_Lahir" required>
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat:</label>
                <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="alamat" required>
            </div>
            <div class="form-group">
                <label for="No_HP">No. HP:</label>
                <input type="text" class="form-control" id="No_HP" name="No_HP" placeholder="no.hp" required>
            </div>
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="text" class="form-control" id="Email" name="Email" placeholder="email" required>
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
