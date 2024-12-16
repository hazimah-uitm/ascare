@extends('layouts.master')

@section('content')
<!-- Breadcrumb -->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Pengurusan Peniaga</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('peniaga') }}">Senarai Peniaga</a></li>
                <li class="breadcrumb-item active" aria-current="page">Maklumat Unihaus</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <a href="{{ route('peniaga.edit') }}">
            <button type="button" class="btn btn-primary mt-2 mt-lg-0">Kemaskini Maklumat</button>
        </a>
    </div>
</div>
<!-- End Breadcrumb -->

<h6 class="mb-0 text-uppercase">Maklumat Unihaus</h6>
<hr />

<!-- Campus Information Table -->
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th>Nama Syarikat</th>
                        <td>Unihaus</td>
                    </tr>
                    <tr>
                        <th>Nama Pemilik</th>
                        <td>Ernie Zakri</td>
                    </tr>
                    <tr>
                        <th>ID Peniaga</th>
                        <td>333333</td>
                    </tr>
                    <tr>
                        <th>Alamat Emel</th>
                        <td>ernie@gmail.com</td>
                    </tr>
                    <tr>
                        <th>No. Telefon</th>
                        <td>0121111111</td>
                    </tr>
                    <tr>
                        <th>Kampus</th>
                        <td>Samarahan 2</td>
                    </tr>
                    <tr>
                        <th>Peranan</th>
                        <td>Peniaga</td>
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