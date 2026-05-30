<!DOCTYPE html>
<html lang="en">

<head>

    @include('belakang.main-module-view.meta')

    <title>DP3M - Tentang - Edit Visi, Misi, Tujuan, dan Strategi</title>

    @include('belakang.main-module-view.css')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('belakang.main-module-view.barside')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('belakang.main-module-view.bartop')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="container mt-6 center">
                        <div><img src="{{ asset('assets/belakang/img/penjelasan-visi-misi-sekapursirih.png') }}" width="100%" height="100%"></div>
                    </div>
                    <br>

                    <!-- sekapur Sirih -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary">Edit Sekapur Sirih</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Konten</th>
                                            <th style="width: 16%; white-space: nowrap;">Aksi</th>
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        <tr>
                                            <td>Judul dari DB</td>
                                            <td>Konten dari DB</td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-icon-split">
                                                    <span class="text">Edit</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Visi -->
                    <!-- Page Heading -->
                    <div class="container mt-6 center">
                        <div><img src="{{ asset('assets/belakang/img/penjelasan-visi-misi-visi.png') }}" width="100%" height="100%"></div>
                    </div>
                    <br>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary">Edit Visi</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Konten Text</th>
                                            <th style="width: 16%; white-space: nowrap;">Aksi</th>
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        <tr>
                                            <td>Konten dari DB</td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-icon-split">
                                                    <span class="text">Edit</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Misi -->
                    <!-- Page Heading -->
                    <div class="container mt-6 center">
                        <div><img src="{{ asset('assets/belakang/img/penjelasan-visi-misi-misi.png') }}" width="100%" height="100%"></div>
                    </div>
                    <br>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary">Edit Misi</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Konten Text</th>
                                            <th style="width: 16%; white-space: nowrap;">Aksi</th>
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        <tr>
                                            <td>Konten dari DB</td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-icon-split">
                                                    <span class="text">Edit</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Button Banner -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary">Edit Button Banner</h3>
                            <br>
                            <a href="#" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <span class="text">Tambah Tombol</span>
                            </a>
                        </div>

                        

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%; white-space: nowrap;">No</th>
                                            <th>Nama Button</th>
                                            <th>Link</th>
                                            <th style="width: 16%; white-space: nowrap;">Aksi</th>
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Nama Button dari DB</td>
                                            <td>Link dari DB</td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-icon-split">
                                                    <span class="text">Edit Button Banner</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Nama Button dari DB</td>
                                            <td>Link dari DB</td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-icon-split">
                                                    <span class="text">Edit Button Banner</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Nama Button dari DB</td>
                                            <td>Link dari DB</td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-icon-split">
                                                    <span class="text">Edit Button Banner</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                <div class="container mt-4">
                    <h3>Edit Sekapur Sirih</h3>

                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Konten</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Preview konten daridb</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="container mt-4">
                    <h3>Edit Visi</h3>

                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Konten</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Preview konten daridb</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="container mt-4">
                    <h3>Edit Misi</h3>

                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Konten</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Preview konten daridb</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="container mt-4">
                    <h3>Edit Tujuan</h3>

                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Konten</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Preview konten daridb</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="container mt-4">
                    <h3>Edit Strategi</h3>

                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Konten</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Preview konten daridb</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>                    


            </div>    

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('belakang.main-module-view.logout')

    @include('belakang.main-module-view.js')

</body>

</html>