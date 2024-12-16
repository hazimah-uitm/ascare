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
                <li class="breadcrumb-item active" aria-current="page">Edit Dana Zakat</li>
            </ol>
        </nav>
    </div>
</div>
<!-- End Breadcrumb -->

<h6 class="mb-0 text-uppercase">Edit Dana Zakat</h6>
<hr />

<div class="card">
    <div class="card-body">
        <!-- Form for editing with dummy data -->
        <form method="POST" action="#">
            <div class="mb-3">
                <label for="jumlah_dana" class="form-label">Jumlah Dana Zakat (RM)</label>
                <input type="number" class="form-control" id="jumlah_dana" name="jumlah_dana" value="5000" required>
            </div>

            <div class="mb-3">
                <label for="sumber_dana" class="form-label">Sumber Dana</label>
                <input type="text" class="form-control" id="sumber_dana" name="sumber_dana" value="Sumber XYZ" required>
            </div>

            <div class="mb-3">
                <label for="tarikh_dana" class="form-label">Tarikh Dana Diterima</label>
                <input type="date" class="form-control" id="tarikh_dana" name="tarikh_dana" value="2024-12-16" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status Dana</label>
                <div class="form-check">
                    <input type="radio" id="aktif" name="status" value="1" class="form-check-input" checked required>
                    <label class="form-check-label" for="aktif">Aktif</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="tidak_aktif" name="status" value="0" class="form-check-input" required>
                    <label class="form-check-label" for="tidak_aktif">Tidak Aktif</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</div>

<!-- End Page Wrapper -->

<script>
    document.getElementById('jumlah_dana').addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/[^0-9\.]/g, ''); // Mengelakkan input bukan angka
    });
</script>
@endsection
