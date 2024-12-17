@extends('layouts.master')
@section('content')
<div class="container-fluid mb-3">

    @hasanyrole('Superadmin|Admin')
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
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-primary text-uppercase">Agihan Zakat Terkini</h5>
                    <hr />
                    <p class="card-text"><strong>Agihan Terakhir:</strong> 17-12-2024</p>
                    <p class="card-text"><strong>Jumlah Agihan:</strong> RM 5,000.00</p>
                    <p class="card-text"><strong>Bilangan Penerima:</strong> 500 pelajar</p>
                    <a href="{{ route('agihan-kupon') }}" class="btn btn-primary btn-sm">Papar Maklumat</a>
                </div>
            </div>
        </div>

        <!-- Kad Pengurusan Vendor -->
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-primary text-uppercase">Pengurusan Peniaga</h5>
                    <hr />
                    <p class="card-text"><strong>Jumlah Peniaga:</strong> 10</p>
                    <p class="card-text"><strong>Peniaga Belum Menuntut Bayaran:</strong> 8</p>
                    <p class="card-text"><strong>Jumlah Bayaran:</strong> RM 3,000.00</p>
                    <a href="{{ route('peniaga') }}" class="btn btn-primary btn-sm">Papar Maklumat</a>
                </div>
            </div>
        </div>

        <!-- Kad Pengurusan Pelajar -->
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-primary text-uppercase">Pengurusan Pelajar</h5>
                    <hr />
                    <p class="card-text"><strong>Jumlah Pelajar:</strong> 120</p>
                    <p class="card-text"><strong>Pelajar Belum Menuntut Kupon:</strong> 10</p>
                    <p class="card-text"><strong>Jumlah Kupon Dituntut:</strong> RM 1,100.00</p>
                    <a href="{{ route('student') }}" class="btn btn-primary btn-sm">Papar Maklumat</a>
                </div>
            </div>
        </div>
    </div>
    @endhasanyrole

    @role('Pelajar')
    <!-- Dashboard Pelajar -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-success text-uppercase">Kupon Zakat Saya</h5>
                    <hr />
                    <p class="card-text"><strong>Jumlah Kupon Diterima:</strong> 5 Kupon</p>
                    <p class="card-text"><strong>Jumlah Nilai Kupon:</strong> RM 50.00</p>
                    <p class="card-text"><strong>Tarikh Terakhir Agihan:</strong> 15-06-2024</p>
                    <a href="{{ route('transaksi') }}" class="btn btn-success btn-sm">Papar Kupon Saya</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-warning text-uppercase">Status Penggunaan</h5>
                    <hr />
                    <p class="card-text"><strong>Kupon Telah Digunakan:</strong> 3 Kupon</p>
                    <p class="card-text"><strong>Baki Kupon:</strong> 2 Kupon</p>
                    <p class="card-text"><strong>Nilai Baki:</strong> RM 20.00</p>
                    <a href="{{ route('transaksi') }}" class="btn btn-warning btn-sm">Semak Transaksi</a>
                </div>
            </div>
        </div>

        <!-- Latest Transactions -->
        <div class="col-12 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-info text-uppercase">Transaksi Terbaru</h5>
                    <hr />
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Tarikh Agihan</th>
                                <th>Jumlah Kupon</th>
                                <th>Status</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>17-12-2024</td>
                                <td>1 Kupon</td>
                                <td>Belum Diguna</td>
                                <td><a href="{{ route('transaksi.claim') }}" class="btn btn-success btn-sm"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Claim Kupon">
                                        <i class="bx bx-gift"></i> Claim Kupon
                                    </a></td>
                            </tr>
                            <tr>
                                <td>16-12-2024</td>
                                <td>2 Kupon</td>
                                <td>Telah Diguna</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endrole

    @role('Peniaga')
    <!-- Dashboard Peniaga -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-info text-uppercase">Transaksi Kupon</h5>
                    <hr />
                    <p class="card-text"><strong>Jumlah Transaksi Hari Ini:</strong> RM 300.00</p>
                    <p class="card-text"><strong>Jumlah Kupon Dituntut:</strong> 15 Kupon</p>
                    <p class="card-text"><strong>Bilangan Pelajar:</strong> 10 Pelajar</p>
                    <a href="{{ route('transaksi') }}" class="btn btn-info btn-sm">Papar Transaksi</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-danger text-uppercase">Status Pembayaran</h5>
                    <hr />
                    <p class="card-text"><strong>Jumlah Bayaran Tertunggak:</strong> RM 1,200.00</p>
                    <p class="card-text"><strong>Jumlah Bayaran Bulan Ini:</strong> RM 2,500.00</p>
                    <a href="{{ route('transaksi') }}" class="btn btn-danger btn-sm">Semak Status Bayaran</a>
                </div>
            </div>
        </div>

        <!-- Latest Transactions -->
        <div class="col-12 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-info text-uppercase">Transaksi Terbaru</h5>
                    <hr />
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Tarikh</th>
                                <th>Pelajar</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>17-12-2024</td>
                                <td>John Doe</td>
                                <td>RM 10.00</td>
                                <td>Telah Dituntut</td>
                            </tr>
                            <tr>
                                <td>16-12-2024</td>
                                <td>Alice Tan</td>
                                <td>RM 15.00</td>
                                <td>Dituntut</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endrole


</div>
@endsection