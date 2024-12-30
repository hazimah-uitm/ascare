@extends('layouts.master')
@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Pengurusan Tuntutan Peniaga</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Senarai Tuntutan Peniaga</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <a href="{{ route('tuntutan-peniaga.trash') }}">
            <button type="button" class="btn btn-primary mt-2 mt-lg-0">Senarai Rekod Dipadam</button>
        </a>
    </div>
</div>
<!--end breadcrumb-->
<h6 class="mb-0 text-uppercase">Senarai Tuntutan Peniaga</h6>
<hr />
<div class="card">
    <div class="card-body">
        <div class="d-lg-flex align-items-center mb-4 gap-3">
            <div class="position-relative">
                <form action="#" method="GET" id="searchForm" class="d-lg-flex align-items-center gap-3">
                    <div class="input-group">
                        <input type="text" class="form-control rounded" placeholder="Carian..." name="search"
                            value="{{ request('search') }}" id="searchInput">

                        <input type="hidden" name="perPage" value="{{ request('perPage', 10) }}">
                        <a href="{{ route('tuntutan-peniaga') }}" class="btn btn-primary ms-1 rounded"
                            id="searchButton">
                            <i class="bx bx-search"></i>
                        </a>
                        <a href="{{ route('tuntutan-peniaga') }}" class="btn btn-secondary ms-1 rounded"
                            id="resetButton">
                            Reset
                        </a>
                    </div>
                </form>
            </div>
            <div class="ms-auto">
                <a href="{{ route('tuntutan-peniaga.create') }}" class="btn btn-primary radius-30 mt-2 mt-lg-0">
                    <i class="bx bxs-plus-square"></i> Tambah Tuntutan Peniaga
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Premis</th>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>Jumlah Pelajar</th>
                        <th>Status</th>
                        <th class="text-end">Jumlah Tuntutan (RM)</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Dulang Kampung</td>
                        <td>11</td>
                        <td>2024</td>
                        <td>120</td>
                        <td>Sedang Diproses</td>
                        <td class="text-end">1,200.00</td>
                        <td>
                            @hasanyrole('Superadmin|Admin')
                            <a type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Semak Tuntutan">
                                <span class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#semakModal"><i class="bx bx-check-circle"></i></span>
                            </a>
                            @endhasanyrole
                            {{-- <a href="{{ route('tuntutan-peniaga.edit') }}" class="btn btn-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kemaskini">
                            <i class="bx bxs-edit"></i>
                            </a> --}}
                            <a href="{{ route('tuntutan-peniaga.show') }}" class="btn btn-primary btn-sm"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Papar">
                                <i class="bx bx-show"></i>
                            </a>
                            <a type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Padam">
                                <span class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal"><i class="bx bx-trash"></i></span>
                            </a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6" class="text-end fw-bold">Jumlah Keseluruhan Dana:</td>
                        <td class="text-end fw-bold">1,200.00</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="mt-3 d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <span class="mr-2 mx-1">Jumlah rekod per halaman</span>
                <form action="#" method="GET" id="perPageForm" class="d-flex align-items-center">
                    <input type="hidden" name="search" value="{{ request('search') }}">
                    <select name="perPage" id="perPage" class="form-select form-select-sm"
                        onchange="document.getElementById('perPageForm').submit()">
                        <option value="10" {{ Request::get('perPage') == '10' ? 'selected' : '' }}>10</option>
                        <option value="20" {{ Request::get('perPage') == '20' ? 'selected' : '' }}>20</option>
                        <option value="30" {{ Request::get('perPage') == '30' ? 'selected' : '' }}>30</option>
                    </select>
                </form>
            </div>

            <div class="d-flex justify-content-end align-items-center">
                <span class="mx-2 mt-2 small text-muted">
                    Menunjukkan 1 hingga 2 daripada
                    3 rekod
                </span>
                <div class="pagination-wrapper">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Pengesahan Padam Rekod</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Adakah anda pasti ingin memadam rekod 1?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <form class="d-inline" method="POST" action="">
                    <a href="{{ route('tuntutan-peniaga') }}" class="btn btn-danger">Padam</a>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Semak Modal -->
<div class="modal fade" id="semakModal" tabindex="-1" aria-labelledby="semakModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="semakModalLabel">Semak Status Tuntutan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Details -->
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
                        <td><select class="form-select">
                                <option value="Sedang Diproses">Sedang Diproses</option>
                                <option value="Diluluskan">Diluluskan</option>
                                <option value="Ditolak">Ditolak</option>
                            </select></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="{{ route('tuntutan-peniaga') }}" class="btn btn-success">Kemaskini</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Auto-submit the form on input change
        document.getElementById('searchInput').addEventListener('input', function() {
            document.getElementById('searchForm').submit();
        });

        // Reset form
        document.getElementById('resetButton').addEventListener('click', function() {
            // Redirect to the base route to clear query parameters
            window.location.href = "{{ route('tuntutan-peniaga') }}";
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const semakModal = document.getElementById('semakModal');
        semakModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const premis = button.getAttribute('data-premis');
            const tarikh = button.getAttribute('data-tarikh');
            const jumlah = button.getAttribute('data-jumlah');

            semakModal.querySelector('input[value="Dulang Kampung"]').value = premis;
            semakModal.querySelector('input[value="17-12-2024"]').value = tarikh;
            semakModal.querySelector('input[value="1200.00"]').value = jumlah;
        });
    });
</script>
<!--end page wrapper -->
@endsection