@extends('layouts.master')

@section('content')
<!-- Breadcrumb -->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Pengurusan Pengguna</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('student') }}">Senarai Pengguna</a></li>
                <li class="breadcrumb-item active" aria-current="page">Maklumat John Doe</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <a href="{{ route('student.edit') }}">
            <button type="button" class="btn btn-primary mt-2 mt-lg-0">Kemaskini Maklumat</button>
        </a>
    </div>
</div>
<!-- End Breadcrumb -->

<h6 class="mb-0 text-uppercase">Maklumat John Doe</h6>
<hr />

<!-- Campus Information Table -->
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th>Nama Penuh</th>
                        <td>John Doe</td>
                    </tr>
                    <tr>
                        <th>ID Pelajar</th>
                        <td>20221231896</td>
                    </tr>
                    <tr>
                        <th>Fakulti</th>
                        <td>FSKTM</td>
                    </tr>
                    <tr>
                        <th>Alamat Emel</th>
                        <td>2022212345@uitm.edu.my</td>
                    </tr>
                    <tr>
                        <th>No. Telefon</th>
                        <td>01111111111</td>
                    </tr>
                    <tr>
                        <th>Kampus</th>
                        <td>Samarahan</td>
                    </tr>
                    <tr>
                        <th>Peranan</th>
                        <td>Pelajar</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>Aktif</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Campus Information Table -->
<!-- End Page Wrapper -->
@endsection