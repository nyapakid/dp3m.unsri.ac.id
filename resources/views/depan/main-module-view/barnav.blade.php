<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="#">MyWebsite</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('index') }}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Tentang</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('visi-misi') }}">Visi, Misi, Tujuan, dan Strategi</a></li>
                        <li><a class="dropdown-item" href="{{ route('struktur-organisasi') }}">Struktur Organisasi</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Akreditasi Nasional</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Status Akreditasi Nasional</a></li>
                        <li><a class="dropdown-item" href="#">BAN-PT</a></li>
                        <li><a class="dropdown-item" href="#">LAM-PTKes</a></li>
                        <li><a class="dropdown-item" href="#">LAM TEKNIK</a></li>
                        <li><a class="dropdown-item" href="#">LAMSAMA</a></li>
                        <li><a class="dropdown-item" href="#">LAM Infokom</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Akreditasi Internasional</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Status Akreditasi Internasional</a></li>
                        <li><a class="dropdown-item" href="#">ASIIN</a></li>
                        <li><a class="dropdown-item" href="#">IABEE</a></li>
                        <li><a class="dropdown-item" href="#">JABEE</a></li>
                        <li><a class="dropdown-item" href="#">ABET</a></li>
                        <li><a class="dropdown-item" href="#">ABEST21</a></li>
                        <li><a class="dropdown-item" href="#">KAAB</a></li>
                        <li><a class="dropdown-item" href="#">RSC</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Pemeringkatan</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Peraturan</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Peraturan dan Undang-Undang</a></li>
                        <li><a class="dropdown-item" href="#">Statuta dan Peraturan Turunan Statuta</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Berita</a>
                </li>

            </ul>

        </div>
    </div>
</nav>