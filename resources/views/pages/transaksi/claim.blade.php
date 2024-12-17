@extends('layouts.master')

@section('content')
<!-- Breadcrumb -->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Pengurusan Transaksi</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('transaksi') }}">Senarai Transaksi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Guna Kupon Zakat</li>
            </ol>
        </nav>
    </div>
</div>
<!-- End Breadcrumb -->

<h6 class="mb-0 text-uppercase">Guna Kupon Zakat</h6>
<hr />

<div class="card">
    <div class="card-body">
        <form id="kuponForm" method="POST" action="#">

            <div class="mb-3">
                <label for="nilai_kupon" class="form-label">Nilai Kupon Zakat (RM)</label>
                <input type="text" class="form-control" id="nilai_kupon" name="nilai_kupon" value="10.00" readonly>
            </div>

            <div class="mb-3">
                <label for="premis_makanan" class="form-label">Pilih Premis Makanan</label>
                <select class="form-control" id="premis_makanan" name="premis_makanan" required>
                    <option value="">Pilih Premis</option>
                    <option value="1">Unihaus</option>
                    <option value="2">Dulang Kampung</option>
                    <option value="5">Kedai Kopi Pak Syed</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tarikh_luput" class="form-label">Tarikh Luput</label>
                <input type="text" class="form-control" id="tarikh_luput" name="tarikh_luput" value="01-12-2025" readonly>
            </div>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmModal">Sahkan dan Hantar</button>
        </form>
    </div>
</div>

<!-- Confirmation Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Pengesahan Penggunaan Kupon Zakat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Adakah anda pasti untuk menggunakan kupon <strong><span id="couponValue"></span></strong> di premis <strong><span id="premiseName"></span></strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="{{ route('transaksi') }}"  class="btn btn-primary" id="confirmButton">Sahkan</a>
            </div>
        </div>
    </div>
</div>

<script>
    // Event listener for the premise selection
    document.getElementById('premis_makanan').addEventListener('change', function() {
        const premiseId = this.value;
        if (premiseId) {
            fetchCouponValue(premiseId);
        }
    });

    function fetchCouponValue(premiseId) {
        const couponValue = 10.00; // Replace with actual logic
        document.getElementById('nilai_kupon').value = couponValue.toFixed(2);
    }

    // Open the confirmation modal with dynamic values
    document.querySelector('button[data-bs-toggle="modal"]').addEventListener('click', function() {
        const couponValue = document.getElementById('nilai_kupon').value;
        const premiseName = document.getElementById('premis_makanan').selectedOptions[0].text;
        document.getElementById('couponValue').textContent = couponValue;
        document.getElementById('premiseName').textContent = premiseName;
    });

    // Confirm the submission after modal confirmation
    document.getElementById('confirmButton').addEventListener('click', function() {
        document.getElementById('kuponForm').submit(); // Submit the form
    });
</script>

@endsection
