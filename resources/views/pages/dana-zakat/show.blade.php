@extends('layouts.master')

@section('content')
<!-- Breadcrumb -->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Pengurusan Dana Zakat</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('dana-zakat') }}">Senarai Dana Zakat</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lihat Dana Zakat</li>
            </ol>
        </nav>
    </div>
</div>
<!-- End Breadcrumb -->

<h6 class="mb-0 text-uppercase">Lihat Dana Zakat</h6>
<hr />

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th>Jumlah Dana Zakat (RM)</th>
                        <td>10, 000</td>
                    </tr>
                    <tr>
                        <th>Sumber Dana</th>
                        <td>Yayasan Zakat</td>
                    </tr>
                    <tr>
                        <th>Tarikh Dana Diterima</th>
                        <td>01-01-2024</td>
                    </tr>
                    <tr>
                        <th>Status Dana</th>
                        <td>
                            <span class="badge bg-success">Aktif</span>
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
