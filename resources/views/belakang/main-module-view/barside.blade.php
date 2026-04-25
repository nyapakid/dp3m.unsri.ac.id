        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('belakang') }}">
                <div class="sidebar-brand-text mx-3">dp3m.unsri</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('belakang') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Website
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsehome"
                    aria-expanded="true" aria-controls="collapsehome">
                    <i class="fa fa-home"></i>
                    <span>Home</span>
                </a>
                <div id="collapsehome" class="collapse" aria-labelledby="headinghome" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('home-edit-banner') }}">Edit Banner</a>
                        <a class="collapse-item" href="{{ route('home-edit-profile') }}">Edit Profile</a>
                        <a class="collapse-item" href="{{ route('home-edit-infografis') }}">Edit Infografis</a>
                        <a class="collapse-item" href="{{ route('home-edit-gallery') }}">Edit Gallery</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetentang"
                    aria-expanded="true" aria-controls="collapsetentang">
                    <i class="fa fa-info-circle"></i>
                    <span>Tentang</span>
                </a>
                <div id="collapsetentang" class="collapse" aria-labelledby="headingtentang" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('tentang-edit-visi-misi') }}">Edit Visi, Misi, Tujuan, <br>dan Strategi</a>
                        <a class="collapse-item" href="{{ route('tentang-edit-struktur-organisasi') }}">Edit Struktur Organisasi</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseakreditasinasional"
                    aria-expanded="true" aria-controls="collapseakreditasinasional">
                    <i class="fa fa-book"></i>
                    <span>Akreditasi Nasional</span>
                </a>
                <div id="collapseakreditasinasional" class="collapse" aria-labelledby="headingakreditasinasional" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Status Akreditasi <br>Nasional</a>
                        <a class="collapse-item" href="#">BAN-PT</a>
                        <a class="collapse-item" href="#">LAM-PTkes</a>
                        <a class="collapse-item" href="#">LAM Teknik</a>
                        <a class="collapse-item" href="#">LAMSAMA</a>
                        <a class="collapse-item" href="#">LAM-Infokom</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseakreditasiinternasional"
                    aria-expanded="true" aria-controls="collapseakreditasiinternasional">
                    <i class="fa fa-book"></i>
                    <span>Akreditasi Internasional</span>
                </a>
                <div id="collapseakreditasiinternasional" class="collapse" aria-labelledby="headingakreditasiinternasional" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Status Akreditasi <br>Internasional</a>
                        <a class="collapse-item" href="#">ASIIN</a>
                        <a class="collapse-item" href="#">IABEE</a>
                        <a class="collapse-item" href="#">JABEE</a>
                        <a class="collapse-item" href="#">ABET</a>
                        <a class="collapse-item" href="#">ABEST21</a>
                        <a class="collapse-item" href="#">KAAB</a>
                        <a class="collapse-item" href="#">RSC</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsepemeringkatan"
                    aria-expanded="true" aria-controls="collapsepemeringkatan">
                    <i class="fa fa-signal"></i>
                    <span>Pemeringkatan</span>
                </a>
                <div id="collapsepemeringkatan" class="collapse" aria-labelledby="headingpemeringkatan" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">module1</a>
                        <a class="collapse-item" href="#">module2</a>
                        <a class="collapse-item" href="#">module3</a>
                        <a class="collapse-item" href="#">module4</a>
                        <a class="collapse-item" href="#">module5</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseperaturan"
                    aria-expanded="true" aria-controls="collapseperaturan">
                    <i class="fa fa-university"></i>
                    <span>Peraturan</span>
                </a>
                <div id="collapseperaturan" class="collapse" aria-labelledby="headingperaturan" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Peraturan dan <br>Undang-Undang</a>
                        <a class="collapse-item" href="#">Statuta dan Peraturan <br>Turunan Statuta</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Berita</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Aplikasi A
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseaplikasiA"
                    aria-expanded="true" aria-controls="collapseaplikasiA">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>judul</span>
                </a>
                <div id="collapseaplikasiA" class="collapse" aria-labelledby="headingaplikasiA" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">menu 1:</h6>
                            <a class="collapse-item" href="#">sub menu 1</a>
                            <a class="collapse-item" href="#">sub menu 2</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">menu 2</h6>
                            <a class="collapse-item" href="#">sub menu 1</a>
                            <a class="collapse-item" href="#">sub menu 2</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>menu item</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->