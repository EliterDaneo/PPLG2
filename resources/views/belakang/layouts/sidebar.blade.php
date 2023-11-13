<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="#">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link" href="{{ route('dataSiswa') }}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-school"></i></div>
                Siswa
            </a>
            <a class="nav-link" href="{{ route('dataGuru') }}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                Guru
            </a>
            <a class="nav-link" href="{{ route('dataMapel') }}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-list"></i></div>
                Mapel
            </a>
            <a class="nav-link" href="{{ route('dataKelas') }}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-list"></i></div>
                Kelas
            </a>
            <a class="nav-link" href="{{ route('dataJurusan') }}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-list"></i></div>
                Jurusan
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div>
</nav>
