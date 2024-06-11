
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
                    <h4 class="mb-3">{{ $pageTitle }}</h4>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <div class="d-grid gap-2">
                        <a href="{{ route('barang.create') }}" class="btn btn-primary">Create Barang</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="table-responsive border p-3 rounded-3">
                <table class="table table-bordered table-hover table-striped mb-0 bg-white">
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
                    <tbody>
                        @foreach ($barangs as $barang)
                            <tr>
                                <td>{{ $barang->kode_barang }}</td>
                                <td>{{ $barang->nama_barang }}</td>
                                <td>{{ $barang->harga_barang }}</td>
                                <td>{{ $barang->deskripsi_barang }}</td>
                                <td>{{ $barang->satuan->nama_satuan}}</td>
                                <td>@include('barang.actions')</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection

</body>

</html>
