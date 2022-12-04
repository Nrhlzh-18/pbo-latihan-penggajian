<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid d-flex">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo.png') }}" alt="logo image" width="50%">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('home')) ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('karyawan')) ? 'active' : '' }}" href="/karyawan">Karyawan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('jabatan')) ? 'active' : '' }}" href="/jabatan">Jabatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('gaji')) ? 'active' : '' }}" href="/gaji">Gaji</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Laporan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>