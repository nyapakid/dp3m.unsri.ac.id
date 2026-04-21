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
                        <li><a class="dropdown-item" href="{{ route('perbaikan') }}">Tentang SPMI</a></li>
                        <li><a class="dropdown-item" href="{{ route('perbaikan') }}">Strategi & Ruang Lingkup SPMI</a></li>
                        <li><a class="dropdown-item" href="{{ route('perbaikan') }}">Standar Universitas SRiwijaya</a></li>
                        <li><a class="dropdown-item" href="{{ route('perbaikan') }}">AMI</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Akreditasi Nasional</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('perbaikan') }}">Status Akreditasi Nasional</a></li>
                        <li><a class="dropdown-item" href="https://www.banpt.or.id/prosedur-dan-instrumen/unduh-instrumen/">Instrumen BAN-PT</a></li>
                        <li><a class="dropdown-item" href="https://lamptkes.org/File-Unduhan-Instrumen-9-kriteria">Instrumen LAM-PTKes</a></li>
                        <li><a class="dropdown-item" href="https://lamemba.or.id/instrumen-akreditasi/">Instrumen LAM-EMBA</a></li>
                        <li><a class="dropdown-item" href="https://lamteknik.or.id/akreditasi/instrumen-akreditasi">Instrumen LAM-TEKNIK</a></li>
                        <li><a class="dropdown-item" href="https://lamsama.or.id/unduh-instrumen/">Instrumen LAM-SAMA</a></li>
                        <li><a class="dropdown-item" href="https://laminfokom.or.id/official/instrumen1.html">Instrumen LAM-Infokom</a></li>
                        <li><a class="dropdown-item" href="https://lamdik.or.id/instrumen-akreditasi/">Instrumen LAM-DIK</a></li>
                        <li><a class="dropdown-item" href="{{ route('perbaikan') }}">Instrumen LAM-PTIP</a></li>
                        <li><a class="dropdown-item" href="https://www.lamspak.id/akreditasi/instrumen/">Instrumen LAM-SPAK</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Akreditasi Internasional</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('perbaikan') }}">Status Akreditasi Internasional</a></li>
                        <!--
                        <li><a class="dropdown-item" href="#">ASIIN</a></li>
                        <li><a class="dropdown-item" href="#">IABEE</a></li>
                        <li><a class="dropdown-item" href="#">JABEE</a></li>
                        <li><a class="dropdown-item" href="#">ABET</a></li>
                        <li><a class="dropdown-item" href="#">ABEST21</a></li>
                        <li><a class="dropdown-item" href="#">KAAB</a></li>
                        <li><a class="dropdown-item" href="#">RSC</a></li>
                        -->
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://wcu.unsri.ac.id/">Pemeringkatan</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Peraturan dan Dokumen</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('spmi') }}">Dokumen SPMI</a></li>
                        <li><a class="dropdown-item" href="{{ route('perbaikan') }}">Peraturan dan Undang-Undang</a></li>
                        <li><a class="dropdown-item" href="{{ route('perbaikan') }}">Statuta dan Peraturan Turunan Statuta</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('perbaikan') }}">Berita</a>
                </li>

            </ul>

        </div>
    </div>
</nav>