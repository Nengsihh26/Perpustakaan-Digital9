@extends('layouts.app')

@section('content')
    <div id="app" class="container">
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
            <h2>Data Matakuliah</h2>
            <a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb-2">Tambah Matakuliah</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center text-overflow"  scope="col">No</th>
                            <th class="text-center text-overflow"  scope="col">Kode Matakuliah</th>
                            <th class="text-center text-overflow"  scope="col">Nama Matakuliah</th>
                            <th class="text-center text-overflow"  scope="col">Dosen Pengajar</th>
                            <th class="text-center text-overflow"  scope="col">Sks</th>
                            <th class="text-center text-overflow"  scope="col">Semester</th>
                            <th class="text-center text-overflow"  scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($matakuliah as $matakuliah)
                            <!-- Tambahkan ini untuk debugging -->
                            {{ $matakuliah->id }}
                            <tr>
                                <td class="text-center text-overflow">{{ $loop->iteration }}</td>
                                <td class="text-center text-overflow">{{ $matakuliah->Kode_MK }}</td>
                                <td class="text-center text-overflow">{{ $matakuliah->Nama_MK }}</td>
                                <td class="text-center text-overflow">{{ $matakuliah->dosen->Nama }}</td>
                                <td class="text-center text-overflow">{{ $matakuliah->Sks }}</td>
                                <td class="text-center text-overflow">{{ $matakuliah->Semester }}</td>
                                <td class="text-center text-overflow">
                                    <a href="{{ route('matakuliah.edit', $matakuliah->Kode_MK) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('matakuliah.destroy', $matakuliah->Kode_MK) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center">Tidak ada data matakuliah</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-2 fixed-bottom">
        <p>&copy; 2024 Aplikasi CRUD Perkuliahan</p>
    </footer>

    <script>
        // Menambahkan kelas 'elemen-setelah-footer' jika diperlukan
        $(document).ready(function() {
            $('.container').addClass('elemen-setelah-footer');
        });
    </script>

    <style>
        .text-overflow {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .elemen-setelah-footer {
            margin-top: 20px;
        }
    </style>
@endsection
