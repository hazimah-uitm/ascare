@extends('layouts.master')
@section('content')
<div class="container-fluid mb-3">
    <!-- Filters Section -->
    <div class="row justify-content-end mb-4">
        <!-- Filter Section -->
        <div class="col-auto">
            <form class="d-flex gap-2">
                <!-- Filter by Kampus -->
                <select class="form-select" name="kampus">
                    <option selected disabled>Kampus</option>
                    <option value="mukah">Mukah</option>
                    <option value="samarahan">Samarahan</option>
                    <option value="samarahan2">Samarahan 2</option>
                </select>
                <!-- Filter by Month -->
                <select class="form-select" name="month">
                    <option selected disabled>Bulan</option>
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Mac</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Jun</option>
                    <option value="07">Julai</option>
                    <option value="08">Ogos</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Disember</option>
                </select>
                <!-- Filter by Year -->
                <select class="form-select" name="year">
                    <option selected disabled>Tahun</option>
                    @for ($year = now()->year; $year >= now()->year - 5; $year--)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endfor
                </select>
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Tapis</button>
            </form>
        </div>
    </div>

    <!-- Gambaran Keseluruhan Zakat -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
        <!-- Jumlah Dana Zakat -->
        <div class="col mb-2">
            <div class="card radius-10 bg-primary">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-white">Jumlah Dana Zakat</p>
                            <h4 class="my-1 text-white">RM 50,000.00</h4>
                        </div>
                        <div class="text-white ms-auto font-35">
                            <i class="bx bx-wallet"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jumlah Zakat Telah Diedarkan -->
        <div class="col mb-2">
            <div class="card radius-10 bg-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-white">Zakat Telah Diedarkan</p>
                            <h4 class="my-1 text-white">RM 20,000.00</h4>
                        </div>
                        <div class="text-white ms-auto font-35">
                            <i class="bx bx-share"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Baki Dana Zakat -->
        <div class="col mb-2">
            <div class="card radius-10 bg-danger">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-white">Baki Dana Zakat</p>
                            <h4 class="my-1 text-white">RM 30,000.00</h4>
                        </div>
                        <div class="text-white ms-auto font-35">
                            <i class="bx bx-pie-chart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bilangan Penerima Faedah -->
        <div class="col mb-2">
            <div class="card radius-10 bg-dark">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-white">Bilangan Penerima</p>
                            <h4 class="my-1 text-white">800 Pelajar</h4>
                        </div>
                        <div class="text-white ms-auto font-35">
                            <i class="bx bx-user-check"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Cards -->
    <div class="row">
        <!-- Kad Agihan Zakat Terkini -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-primary">Agihan Zakat Terkini</h5>
                    <hr />
                    <p class="card-text"><strong>Agihan Terakhir:</strong> 17-12-2024</p>
                    <p class="card-text"><strong>Jumlah Agihan:</strong> RM 5,000.00</p>
                    <p class="card-text"><strong>Bilangan Penerima:</strong> 500 pelajar</p>
                    <a href="#" class="btn btn-primary btn-sm">Papar Maklumat</a>
                </div>
            </div>
        </div>

        <!-- Kad Pengurusan Vendor -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-primary">Pengurusan Vendor</h5>
                    <hr />
                    <p class="card-text"><strong>Jumlah Peniaga:</strong> 10</p>
                    <p class="card-text"><strong>Peniaga Belum Menuntut Bayaran:</strong> 8</p>
                    <p class="card-text"><strong>Jumlah Bayaran:</strong> RM 3,000.00</p>
                    <a href="#" class="btn btn-primary btn-sm">Papar Maklumat</a>
                </div>
            </div>
        </div>

        <!-- Kad Pengurusan Pelajar -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-primary">Pengurusan Pelajar</h5>
                    <hr />
                    <p class="card-text"><strong>Jumlah Pelajar:</strong> 120</p>
                    <p class="card-text"><strong>Pelajar Belum Menuntut Kupon:</strong> 10</p>
                    <p class="card-text"><strong>Jumlah Kupon Dituntut:</strong> RM 1,100.00</p>
                    <a href="#" class="btn btn-primary btn-sm">Papar Maklumat</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
