@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            @if(session('msg'))
                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert" id="success-alert">
                    {{ session('msg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <script>
                    // Menutup alert secara otomatis setelah beberapa detik
                    setTimeout(function(){
                        $('#success-alert').alert('close');
                    }, 3000); // Waktu dalam milidetik (3 detik dalam contoh ini)
                </script>
            @endif
            <h2>Data Mahasiswa</h2>
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-2">Tambah Mahasiswa</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center text-overflow" scope="col">No</th>
                            <th class="text-center text-overflow" scope="col">NIM</th>
                            <th class="text-center text-overflow" scope="col">Nama</th>
                            <th class="text-center text-overflow" scope="col">Program Studi</th>
                            <th class="text-center text-overflow" scope="col">Jenis Kelamin</th>
                            <th class="text-center text-overflow" scope="col">Tanggal Lahir</th>
                            <th class="text-center text-overflow" scope="col">Alamat</th>
                            <th class="text-center text-overflow" scope="col">No. Hp</th>
                            <th class="text-center text-overflow" scope="col">Email</th>
                            <th class="text-center text-overflow" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($mahasiswa as $mhs)
                            <!-- Tambahkan ini untuk debugging -->
                            {{-- {{ $mhs->id }} --}}
                            <tr>
                                <td class="text-center text-overflow">{{ $loop->iteration }}</td>
                                <td class="text-center text-overflow">{{ $mhs->NIM }}</td>
                                <td class="text-center text-overflow">{{ $mhs->Nama }}</td>
                                <td class="text-center text-overflow">{{ $mhs->prodi->Nama_Prodi }}</td>
                                <td class="text-center text-overflow">{{ $mhs->Jenis_Kelamin }}</td>
                                <td class="text-center text-overflow">{{ $mhs->Tanggal_Lahir }}</td>
                                <td class="text-center text-overflow">{{ $mhs->Alamat }}</td>
                                <td class="text-center text-overflow">{{ $mhs->No_HP }}</td>
                                <td class="text-center text-overflow">{{ $mhs->Email }}</td>
                                <td class="text-center text-overflow">
                                    <a href="{{ route('mahasiswa.edit', $mhs->NIM) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('mahasiswa.destroy', $mhs->NIM) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center">Tidak ada data mahasiswa</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<style>
    .text-overflow {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .container {
    padding-bottom: 70px;
    }
    .container {
        padding-bottom: 70px;
    }
</style>
@endsection
