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
                <li class="breadcrumb-item active" aria-current="page">Edit Kupon Zakat</li>
            </ol>
        </nav>
    </div>
</div>
<!-- End Breadcrumb -->

<h6 class="mb-0 text-uppercase">Edit Kupon Zakat</h6>
<hr />

<div class="card">
    <div class="card-body">
        <form method="POST" action="#">
            <div class="mb-3">
                <label for="jumlah_dana" class="form-label">Jumlah Dana Keseluruhan Zakat (RM)</label>
                <input type="number" class="form-control" id="jumlah_dana" name="jumlah_dana" value="10000.00" readonly>
            </div>

            <div class="mb-3">
                <label for="jumlah_pelajar" class="form-label">Jumlah Pelajar Layak</label>
                <input type="number" class="form-control" id="jumlah_pelajar" name="jumlah_pelajar" value="120" readonly>
            </div>

            <div class="mb-3">
                <label for="nilai_kupon" class="form-label">Nilai Kupon (RM)</label>
                <input type="number" class="form-control" id="nilai_kupon" name="nilai_kupon" value="10.00" required>
            </div>

            <div class="mb-3">
                <label for="jumlah_agihan" class="form-label">Jumlah Agihan Kupon (RM)</label>
                <input type="number" class="form-control" id="jumlah_agihan" name="jumlah_agihan" value="1200.00" readonly>
            </div>

            <div class="mb-3">
                <label for="baki_dana" class="form-label">Baki Dana (RM)</label>
                <input type="number" class="form-control" id="baki_dana" name="baki_dana" value="8800.00" readonly>
            </div>

            <div class="mb-3">
                <label for="tarikh_luput" class="form-label">Tarikh Luput</label>
                <input type="date" class="form-control" id="tarikh_luput" name="tarikh_luput" value="01-12-2024" required>
            </div>

            <a href="{{ route('kupon-zakat') }}" class="btn btn-primary">Kemaskini</a>
        </form>
    </div>
</div>

<!-- End Page Wrapper -->

<script>
    const nilaiKuponInput = document.getElementById('nilai_kupon');
    const jumlahPelajarInput = document.getElementById('jumlah_pelajar');
    const jumlahDanaInput = document.getElementById('jumlah_dana');
    const jumlahAgihanInput = document.getElementById('jumlah_agihan');
    const bakiDanaInput = document.getElementById('baki_dana');

    nilaiKuponInput.addEventListener('input', function() {
        const nilaiKupon = parseFloat(nilaiKuponInput.value) || 0;
        const jumlahPelajar = parseFloat(jumlahPelajarInput.value) || 0;
        const jumlahDana = parseFloat(jumlahDanaInput.value) || 0;

        const jumlahAgihan = nilaiKupon * jumlahPelajar;
        jumlahAgihanInput.value = jumlahAgihan.toFixed(2);

        const bakiDana = jumlahDana - jumlahAgihan;
        bakiDanaInput.value = bakiDana.toFixed(2);

        if (jumlahAgihan > jumlahDana) {
            jumlahAgihanInput.classList.add('is-invalid');
            bakiDanaInput.classList.add('is-invalid');
        } else {
            jumlahAgihanInput.classList.remove('is-invalid');
            bakiDanaInput.classList.remove('is-invalid');
        }
    });
</script>
@endsection
