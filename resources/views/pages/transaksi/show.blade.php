@extends('layouts.master')

@section('content')
<!-- Breadcrumb -->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Pengurusan Transaksi</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('transaksi') }}">Senarai Transaksi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lihat Transaksi</li>
            </ol>
        </nav>
    </div>
</div>
<!-- End Breadcrumb -->

<h6 class="mb-0 text-uppercase">Lihat Transaksi</h6>
<hr />

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th>Tarikh Agihan</th>
                        <td>17-12-2024</td>
                    </tr>
                    <tr>
                        <th>ID Pelajar</th>
                        <td>2024111111</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>John Doe</td>
                    </tr>
                    <tr>
                        <th>Kampus</th>
                        <td>Samarahan</td>
                    </tr>
                    <tr>
                        <th>Nilai Kupon (RM)</th>
                        <td>10.00</td>
                    </tr>
                    <tr>
                        <th>Tarikh Luput</th>
                        <td>01-12-2025</td>
                    </tr>
                    <tr>
                        <th>Premis</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <span class="badge bg-warning">Belum Diguna</span>
                            <!-- Change to bg-danger for Tidak Aktif -->
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- End Page Wrapper -->
@endsection
