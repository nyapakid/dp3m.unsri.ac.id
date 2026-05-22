<!DOCTYPE html>
<html lang="en">

<head>

    @include('belakang.main-module-view.meta')

    <title>DP3M - Home - Edit infografis</title>

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
                        <div><img src="{{ asset('assets/belakang/img/penjelasan-home-infografis.png') }}" width="100%" height="100%"></div>
                    </div>
                    <br>

                    <!-- Text Banner -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary">Edit Infografis Utama</h3>
                            <p>disarankan ukuran gambar width: 1600px</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 16%; white-space: nowrap;">Judul Gambar</th>
                                            <th>Preview</th>
                                            <th style="width: 17%; white-space: nowrap;">Aksi</th>
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        <tr>
                                            <td>Judul Gambar dari DB</td>
                                            <td>
                                                <img src="{{ asset('assets/depan/images/akred-nas-inter.jpg') }}" width="50%">
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-icon-split">
                                                    <span class="text">Edit Gambar Infografis Utama</span>
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
                            <h3 class="m-0 font-weight-bold text-primary">Edit Infografis</h3>
                            <p>disarankan ukuran gambar width: 1024px height: 768px</p>
                            <br>
                            <a href="#" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <span class="text">Tambah Infografis</span>
                            </a>
                        </div>

                        

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%; white-space: nowrap;">No</th>
                                            <th style="width: 16%; white-space: nowrap;">Judul Gambar</th>
                                            <th>Preview</th>
                                            <th style="width: 16%; white-space: nowrap;">Aksi</th>
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Judul Gambar dari DB</td>
                                            <td>
                                                <img src="{{ asset('assets/depan/images/persentasi-akred-univ.jpg') }}" width="50%">
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-icon-split">
                                                    <span class="text">Edit Infografis</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Judul Gambar dari DB</td>
                                            <td>
                                                <img src="{{ asset('assets/depan/images/rank601-800.png') }}" width="50%">
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-icon-split">
                                                    <span class="text">Edit Infografis</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Judul Gambar dari DB</td>
                                            <td>
                                                <img src="{{ asset('assets/depan/images/rank-19.png') }}" width="50%">
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-icon-split">
                                                    <span class="text">Edit Infografis</span>
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