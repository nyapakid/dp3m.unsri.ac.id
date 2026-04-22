<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="{{ route('index') }}">DP3M Universitas Sriwijaya</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Tentang</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('visi-misi') }}">Visi, Misi, Tujuan, dan Strategi</a></li>
                        <li><a class="dropdown-item" href="{{ route('struktur-organisasi') }}">Struktur Organisasi</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">SPMI & AMI</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('spmi-tentang') }}">Tentang SPMI</a></li>
                        <li><a class="dropdown-item" href="{{ route('spmi-strategi-lingkup') }}">Strategi & Ruang Lingkup SPMI</a></li>
                        <li><a class="dropdown-item" href="{{ route('spmi-standar-unsri') }}">Standar Universitas Sriwijaya</a></li>
                        <li><a class="dropdown-item" href="{{ route('spmi-ami') }}">Audit Mutu Internal</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Akreditasi</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('akreditasi-AIPT') }}">Status Akreditasi AIPT</a></li>
                        <li><a class="dropdown-item" href="{{ route('akreditasi-inter-status') }}">Status Akreditasi Internasional</a></li>
                        <li><a class="dropdown-item" href="{{ route('akreditasi-nasional-status') }}">Status Akreditasi Nasional</a></li>
                        <li><a class="dropdown-item" href="{{ route('akreditasi-instrumen') }}">Instrumen Akreditasi</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://wcu.unsri.ac.id/">Pemeringkatan</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Peraturan dan Dokumen</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('spmi') }}">Dokumen SPMI</a></li>
                        <li><a class="dropdown-item" href="{{ route('peraturan-uu') }}">Peraturan dan Undang-Undang</a></li>
                        <li><a class="dropdown-item" href="{{ route('peraturan-statuta-turunan') }}">Statuta dan Peraturan Turunan Statuta</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('perbaikan') }}">Berita</a>
                </li>

            </ul>

        </div>
    </div>
</nav>