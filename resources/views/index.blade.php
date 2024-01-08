@extends('layouts.app')

@section('title', 'Laravel 8 - CRUD Perkuliahan')

@section('content')
    <div class="container">
        <div class="jumbotron text-center rounded p-5" style="background: linear-gradient(135deg, #3498db, #2ecc71); color: #fff;">
            <h1 class="display-4">Selamat Datang!</h1>
            <p class="lead text-justify">
                Selamat datang di aplikasi CRUD Perkuliahan menggunakan Laravel 8.
                Di sini Anda dapat dengan mudah mengelola data program studi, dosen, matakuliah, dan mahasiswa.
            </p>
            <hr class="my-4" style="background-color: #fff;">
            <span style="background-color: #e6f7ff; padding: 3px 8px; border-radius: 5px; color: #333;">
                Nikmati kemudahan fitur CRUD (Create, Read, Update, Delete) yang dirancang sederhana dan efisien.
            </span>
        </div>
    </div>
@endsection
