@extends('layouts.app')

@section('content')
<!--wrapper-->
<div class="wrapper">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container-fluid">
            <div class="text-center">
            <a href="{{ route('login') }}" class="text-decoration-none">
                <div class="d-flex align-items-center justify-content-center flex-column flex-md-row mb-4">
                    <img src="{{ asset('public/assets/images/uitmcss.png') }}" class="logo-icon-login" alt="logo icon">
                    <div class="ms-3">
                        <h4 class="logo-text-login mb-0">ASCARE</h4>
                        <h6 class="logo-subtitle-login mb-0">Asnaf Siswa Care</h6>
                    </div>
                </div>
                </a>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="card shadow-none">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center mb-4">
                                    <h3 class="">Daftar</h3>
                                </div>
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    @if ($errors->count() == 1)
                                    <p class="mb-0">{{ $errors->first() }}</p>
                                    @else
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                @endif
                                <div class="form-body">
                                    <form method="POST" action="#" class="row g-4">
                                        {{ csrf_field() }}

                                        <div class="col-12">
                                            <label for="name" class="form-label">{{ __('Nama') }}</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                        </div>

                                        <div class="col-12">
                                            <label for="email" class="form-label">{{ __('Alamat Emel') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">{{ __('Kata Laluan') }}</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input id="password" type="password" class="form-control border-end-0 @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password-confirm" class="form-label">{{ __('Sahkan Kata Laluan') }}</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                        </div>

                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="bx bxs-user-plus"></i> {{ __('Daftar') }}
                                                </button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end wrapper-->
@endsection
