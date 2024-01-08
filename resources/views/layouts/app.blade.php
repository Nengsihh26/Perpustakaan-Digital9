<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD Perkuliahan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>@yield('title')</title>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Other styles or scripts -->
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding-top: 56px; /* Sesuaikan tinggi navbar agar tidak tumpang tindih dengan konten */
            margin: 0; /* Hilangkan margin default pada body */
        }
        #app {
            flex: 1;
        }
        footer {
            background-color: #343a40; /* Warna background footer */
            color: white; /* Warna teks footer */
            padding: 15px 0; /* Sesuaikan padding sesuai kebutuhan */
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Aplikasi CRUD Perkuliahan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('prodi.index') }}">Program Studi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dosen.index') }}">Dosen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('matakuliah.index') }}">Matakuliah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mahasiswa.index') }}">Mahasiswa</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-4 mb-5">
            @yield('content')
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-2">
        <p>&copy; 2024 Aplikasi CRUD Perkuliahan</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
