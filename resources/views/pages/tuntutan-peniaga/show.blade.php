@extends('layouts.master')

@section('content')
    <!-- Breadcrumb -->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Pengurusan Tuntutan Peniaga</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('tuntutan-peniaga') }}">Senarai Tuntutan Peniaga</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Lihat Tuntutan Peniaga</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <h6 class="mb-0 text-uppercase">Lihat Tuntutan Peniaga</h6>
    <hr />

    <!-- First Info Card with Coupon Distribution Details -->
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="mb-3 text-uppercase">Maklumat Tuntutan Peniaga</h6>
                    <hr />
                    <table class="table table-borderless">
                        <tr>
                            <th>Premis</th>
                            <td>Dulang Kampung</td>
                        </tr>
                        <tr>
                            <th>Tarikh</th>
                            <td>17-12-2024</td>
                        </tr>
                        <tr>
                            <th>Bulan</th>
                            <td>11</td>
                        </tr>
                        <tr>
                            <th>Tahun</th>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th>Jumlah Pelajar</th>
                            <td>120</td>
                        </tr>
                        <tr>
                            <th>Nilai Kupon (RM)</th>
                            <td>10.00</td>
                        </tr>
                        <tr>
                            <th>Jumlah Tuntutan Peniaga (RM)</th>
                            <td>1200.00</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><span class="badge bg-warning">Sedang Diproses</span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Students Table -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-3 text-uppercase">Senarai Pelajar Yang Menggunakan Kupon di Premis Dulang Kampung</h6>
                    <hr />
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>No. Pelajar</th>
                                <th>Kampus</th>
                                <th class="text-end">Jumlah (RM)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>2024111111</td>
                                <td>Samarahan 2</td>
                                <td class="text-end">12.00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Harizah</td>
                                <td>2024222222</td>
                                <td>Samarahan 2</td>
                                <td class="text-end">15.00</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="text-end"><strong>Jumlah Keseluruhan (RM):</strong></td>
                                <td class="text-end">
                                    <strong>
                                        27.00
                                    </strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Wrapper -->
@endsection
