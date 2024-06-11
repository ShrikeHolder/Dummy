<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Besar Framework</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <style>
        body {
            background-color: #f3cbbf;
        }

        .login-container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 35%;
            height: 60vh;
        }

        .login-box h2 {
            margin-bottom: 30px;
            font-weight: bold;
        }

        .form-control {
            background: #f9e4dc;
            border: none;
            border-radius: 10px;
            margin-bottom: 20px;
            width: 100%;
        }

        .btn-custom {
            background-color: #5d3a61;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            width: 40%;
        }

        .btn-section {
            background-color: #5d3a61;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            width: 20%;
            margin: 5%
        }
    </style>
    {{-- <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #644961">
        <div class="container-fluid" style="background-color: #644961">
            <a class="navbar-brand" href="#"><img src="{{ Vite::asset('resources/images/logo.png') }}"
                    width="40" height="33">Breadship</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="#">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div> --}}
    {{-- </nav> --}}


    @extends('layouts.app')

    @section('content')
        {{-- HERO PART 1 --}}
        <div class="container-fluid text-center" style=" background-color:#F4CDB0">
            <div class="row justify-content-center">
                <div class="col-4">
                    <h1 class="display-2 fw-bold lh-1 my-5" style="color: #D28468">Selamat Datang di Dapur
                    </h1>
                    <p class="text-center fw-bold display-1 my-5" style="color: #644961">BREADSHIP</p>
                </div>
                <div class="col-4">
                    <img src="{{ Vite::asset('resources/images/3.png') }}" class="d-block mx-lg-auto img-fluid"
                        width="700" height="500" loading="lazy">
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row mb-0">
                <div class="col-lg-9 col-xl-10">
                    <h4 class="mb-3" style="color: #644961">Daftar Produk</h4>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <div class="d-grid gap-2">
                        <a href="{{ route('barang.create') }}" class="btn btn-warning" style="background-color: #5d3a61 color: white">Create Barang</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive border p-3 rounded-3">
                <table class="table table-bordered table-hover table-striped mb-0 bg-white" style="color: #5d3a61">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga Barang</th>
                            <th>Deskripsi Barang</th>
                            <th>Satuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        @endsection
</body>

</html>
