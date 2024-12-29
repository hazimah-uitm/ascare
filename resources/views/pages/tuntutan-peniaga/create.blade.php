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
                    <li class="breadcrumb-item active" aria-current="page">Tambah Tuntutan Peniaga</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <h6 class="mb-0 text-uppercase">Tambah Tuntutan Peniaga</h6>
    <hr />

    <div class="card">
        <div class="card-body">
            <form method="POST" action="#">
                <div class="mb-3">
                    <label for="premis" class="form-label">Premis</label>
                    <input type="textr" class="form-control" id="premis" name="premis" value="Dulang Kampung"
                        readonly>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="month" class="form-label">Bulan</label>
                        <select class="form-select" id="month" name="month" required>
                            <option value="">Pilih Bulan</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Mac</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Jun</option>
                            <option value="7">Julai</option>
                            <option value="8">Ogos</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Disember</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="year" class="form-label">Tahun</label>
                        <select class="form-select" id="year" name="year" required>
                            <option value="">Pilih Tahun</option>
                            @for ($i = now()->year; $i >= now()->year - 10; $i--)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="jumlah_pelajar" class="form-label">Jumlah Pelajar Layak</label>
                    <input type="number" class="form-control" id="jumlah_pelajar" name="jumlah_pelajar" value="120"
                        readonly>
                </div>

                <div class="mb-3">
                    <label for="nilai_kupon" class="form-label">Nilai Kupon (RM)</label>
                    <input type="number" class="form-control" id="nilai_kupon" name="nilai_kupon" value="10.00" readonly>
                </div>

                <div class="mb-3">
                    <label for="jumlah_tuntutan" class="form-label">Jumlah Tuntutan Peniaga (RM)</label>
                    <input type="number" class="form-control" id="jumlah_tuntutan" name="jumlah_tuntutan" value="1200.00"
                        readonly>
                </div>

                <a href="{{ route('tuntutan-peniaga') }}" class="btn btn-primary">Hantar</a>
            </form>
        </div>
    </div>

    <!-- End Page Wrapper -->
@endsection
