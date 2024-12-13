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
                <li class="breadcrumb-item active" aria-current="page">Kemaskini Pengguna</li>
            </ol>
        </nav>
    </div>
</div>
<!-- End Breadcrumb -->

<h6 class="mb-0 text-uppercase">Kemaskini Pengguna</h6>
<hr />

<div class="card">
    <div class="card-body">
        <form method="POST" action="#">

            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="Ali Bin Ahmad">
            </div>

            <div class="mb-3">
                <label for="staff_id" class="form-label">No. Pekerja</label>
                <input type="number" class="form-control" id="staff_id" name="staff_id" value="12345">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Alamat Emel</label>
                <input type="email" class="form-control" id="email" name="email" value="ali.ahmad@example.com">
            </div>

            <div class="mb-3">
                <label for="office_phone_no" class="form-label">No. Telefon</label>
                <input type="number" class="form-control" id="office_phone_no" name="office_phone_no" value="0123456789">
            </div>

            <div class="mb-3">
                <label for="position_id" class="form-label">Fakulti</label>
                <select class="form-select" id="position_id" name="position_id">
                    <option value="1" selected>FSKTM</option>
                    <option value="2">FEB</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="campus_id" class="form-label">Kampus</label>
                <select class="form-select" id="campus_id" name="campus_id">
                    <option value="1" selected>Samarahan</option>
                    <option value="2">Samarahan 2</option>
                    <option value="3">Mukah</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Peranan</label>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="roles[]" id="editor" value="editor">
                        <label class="form-check-label" for="editor">Admin</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="roles[]" id="editor" value="editor">
                        <label class="form-check-label" for="editor">Peniaga</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="roles[]" id="admin" value="admin" checked>
                        <label class="form-check-label" for="admin">Pelajar</label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="publish_status" class="form-label">Status</label>
                <div class="form-check">
                    <input type="radio" id="aktif" name="publish_status" value="1" checked>
                    <label class="form-check-label" for="aktif">Aktif</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="tidak_aktif" name="publish_status" value="0">
                    <label class="form-check-label" for="tidak_aktif">Tidak Aktif</label>
                </div>
            </div>

            <a href="{{ route('student') }}" class="btn btn-primary">Kemaskini</a>

        </form>
    </div>
</div>

<!-- End Page Wrapper -->

<script>
    document.getElementById('office_phone_no').addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/-/g, '');
    });
</script>
@endsection