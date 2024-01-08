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
            <h2>Data Program Studi</h2>
            <a href="{{ route('prodi.create') }}" class="btn btn-primary mb-2">Tambah Program Studi</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center text-overflow"  scope="col">No</th>
                            <th class="text-center text-overflow" scope="col">Kode Prodi</th>
                            <th class="text-center text-overflow" scope="col">Nama Prodi</th>
                            <th class="text-center text-overflow" scope="col">Fakultas</th>
                            <th class="text-center text-overflow" scope="col">Ketua Prodi</th>
                            <th class="text-center text-overflow" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($prodi as $item)
                            <!-- Tambahkan ini untuk debugging -->
                            {{ $item->id }}
                            <tr>
                                <td class="text-center text-overflow">{{ $loop->iteration }}</td>
                                <td class="text-center text-overflow">{{ $item->Kode_Prodi }}</td>
                                <td class="text-center text-overflow">{{ $item->Nama_Prodi }}</td>
                                <td class="text-center text-overflow">{{ $item->Fakultas }}</td>
                                <td class="text-center text-overflow">{{ $item->Ketua_Prodi }}</td>
                                <td class="text-center text-overflow">
                                    <a href="{{ route('prodi.edit', $item->Kode_Prodi) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('prodi.destroy', $item->Kode_Prodi) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10" class="text-center">Tidak ada data program studi</td>
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
