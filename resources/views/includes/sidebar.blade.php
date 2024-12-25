<div class="sidebar-header">
    <div>
        <img src="{{ asset('public/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
    </div>
    <div>
        <h4 class="logo-text">ASCARE</h4>
        <h6 class="logo-subtitle">Asnaf Siswa Care</h6>
    </div>
    <div class="toggle-icon ms-auto" id="toggle-icon"><i class='bx bx-arrow-to-left'></i></div>
</div>

<!--navigation-->
<ul class="metismenu" id="menu">
    <li class="{{ Request::routeIs('home') ? 'mm-active' : '' }}">
        <a href="{{ route('home') }}">
            <div class="parent-icon"><i class='bx bx-home-circle'></i></div>
            <div class="menu-title">Dashboard</div>
        </a>
    </li>

    @role('Superadmin')
    <li class="{{ Request::routeIs('activity-log') ? 'mm-active' : '' }}">
        <a href="{{ route('activity-log') }}">
            <div class="parent-icon"><i class='bx bx-history'></i></div>
            <div class="menu-title">Log Aktiviti</div>
        </a>
    </li>
    @endrole

    @hasanyrole('Superadmin|Admin')
    <li class="menu-label">Pengurusan Pengguna</li>

    @role('Superadmin')
    <li class="{{ Request::is('user*') && !Request::is('user-role*') ? 'mm-active' : '' }}">
        <a href="{{ route('user') }}">
            <div class="parent-icon"><i class='bx bx-user-circle'></i></div>
            <div class="menu-title">Pengguna</div>
        </a>
    </li>
    @endrole

    <li class="{{ Request::is('student*') ? 'mm-active' : '' }}">
        <a href="{{ route('student') }}">
            <div class="parent-icon"><i class='bx bx-id-card'></i></div>
            <div class="menu-title">Pelajar</div>
        </a>
    </li>

    <li class="{{ Request::is('peniaga*') ? 'mm-active' : '' }}">
        <a href="{{ route('peniaga') }}">
            <div class="parent-icon"><i class='bx bx-store'></i></div>
            <div class="menu-title">Peniaga</div>
        </a>
    </li>
    @endhasanyrole

    @role('Superadmin')
    <li class="{{ Request::is('user-role*') ? 'mm-active' : '' }}">
        <a href="{{ route('user-role') }}">
            <div class="parent-icon"><i class='bx bx-shield'></i></div>
            <div class="menu-title">Peranan Pengguna</div>
        </a>
    </li>
    @endrole


    <li class="menu-label">Pengurusan Zakat</li>

    @hasanyrole('Superadmin|Admin')
    <li class="{{ Request::is('dana-zakat*') ? 'mm-active' : '' }}">
        <a href="{{ route('dana-zakat') }}">
            <div class="parent-icon"><i class='bx bx-donate-heart'></i></div>
            <div class="menu-title">Dana Zakat</div>
        </a>
    </li>

    <li class="{{ Request::is('agihan-kupon*') ? 'mm-active' : '' }}">
        <a href="{{ route('agihan-kupon') }}">
            <div class="parent-icon"><i class='bx bx-gift'></i></div>
            <div class="menu-title">Agihan Kupon</div>
        </a>
    </li>
    @endhasanyrole

    <li class="{{ Request::is('transaksi*') ? 'mm-active' : '' }}">
        <a href="{{ route('transaksi') }}">
            <div class="parent-icon"><i class='bx bx-wallet'></i></div>
            <div class="menu-title">Transaksi</div>
        </a>
    </li>

    <li class="{{ Request::is('tuntutan-peniaga*') ? 'mm-active' : '' }}">
        <a href="{{ route('tuntutan-peniaga') }}">
            <div class="parent-icon"><i class='bx bx-money'></i></div>
            <div class="menu-title">Tuntutan Peniaga</div>
        </a>
    </li>

    @hasanyrole('Superadmin|Admin')
    <li class="menu-label">Tetapan</li>

    <li class="{{ Request::is('campus*') ? 'mm-active' : '' }}">
        <a class="has-arrow" href="#">
            <div class="parent-icon"><i class='bx bx-location-plus'></i></div>
            <div class="menu-title">Lokasi</div>
        </a>
        <ul>
            <li class="{{ Request::is('campus*') ? 'mm-active' : '' }}">
                <a href="{{ route('campus') }}"><i class="bx bx-right-arrow-alt"></i>Kampus</a>
            </li>
        </ul>
    </li>

    <li class="{{ Request::is('position*') ? 'mm-active' : '' }}">
        <a class="has-arrow" href="#">
            <div class="parent-icon"><i class="bx bx-cog"></i></div>
            <div class="menu-title">Tetapan Umum</div>
        </a>
        <ul>
            <li class="{{ Request::is('position*') ? 'mm-active' : '' }}">
                <a href="{{ route('position') }}"><i class="bx bx-right-arrow-alt"></i>Jawatan</a>
            </li>
        </ul>
    </li>
    @endhasanyrole

    @role('Superadmin')
    <li class="{{ Request::routeIs('logs.debug') ? 'mm-active' : '' }}">
        <a href="{{ route('logs.debug') }}">
            <div class="parent-icon"><i class='bx bxs-bug'></i></div>
            <div class="menu-title">Debug Log</div>
        </a>
    </li>
    @endrole
</ul>
<!--end navigation-->