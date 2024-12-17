@extends('layouts.master')

@section('content')
<!-- Breadcrumb -->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Pengurusan Kupon Zakat</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('kupon-zakat') }}">Senarai Kupon Zakat</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lihat Kupon Zakat</li>
            </ol>
        </nav>
    </div>
</div>
<!-- End Breadcrumb -->

<h6 class="mb-0 text-uppercase">Lihat Kupon Zakat</h6>
<hr />

<!-- First Info Card with Coupon Distribution Details -->
<div class="row mb-2">
    <div class="col-md-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="mb-3 text-uppercase">Maklumat Agihan Kupon</h6>
                <hr />
                <table class="table table-borderless">
                    <tr>
                        <th>Tarikh Agihan</th>
                        <td>17-12-2024</td>
                    </tr>
                    <tr>
                        <th>Jumlah Dana Zakat (RM)</th>
                        <td>10000.00</td>
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
                        <th>Jumlah Agihan Kupon (RM)</th>
                        <td>1200.00</td>
                    </tr>
                    <tr>
                        <th>Baki Dana (RM)</th>
                        <td>8800.00</td>
                    </tr>
                    <tr>
                        <th>Tarikh Luput</th>
                        <td>01-12-2024</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><span class="badge bg-success">Aktif</span></td>
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
                <h6 class="mb-3 text-uppercase">Senarai Pelajar Yang Mendapat Kupon</h6>
                <hr />
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>No. Pelajar</th>
                            <th>Kampus</th>
                            <th>Semester</th>
                            <th>Status</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>2024111111</td>
                            <td>Samarahan 2</td>
                            <td>Semester 2/2024</td>
                            <td>Aktif</td>
                            <td>
                                <a href="{{ route('student.show')}}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Papar">
                                    <i class="bx bx-show"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Harizah</td>
                            <td>2024222222</td>
                            <td>Samarahan 2</td>
                            <td>Semester 2/2024</td>
                            <td>Aktif</td>
                            <td>
                                <a href="{{ route('student.show')}}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Papar">
                                    <i class="bx bx-show"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Page Wrapper -->
@endsection