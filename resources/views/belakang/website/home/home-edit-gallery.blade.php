<!DOCTYPE html>
<html lang="en">

<head>

    @include('belakang.main-module-view.meta')

    <title>DP3M - Home - Edit Gallery</title>

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

                <!-- Button Banner -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="container mt-6 center">
                        <div><img src="{{ asset('assets/belakang/img/penjelasan-home-galeri.png') }}" width="100%" height="100%"></div>
                    </div>
                    <br>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary">Edit Galeri</h3>
                            <p>disarankan ukuran gambar berukuran/dengan rasio 16:9</p>
                            <br>
                            <a href="#" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <span class="text">Tambah Gambar</span>
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
                                                <img src="{{ asset('assets/depan/images/01.jpg') }}" width="50%">
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-icon-split">
                                                    <span class="text">ganti gambar</span>
                                                </a>
                                                <br>
                                                <br>
                                                <a href="#" class="btn btn-danger btn-icon-split">
                                                    <span class="text">Hapus gambar</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Judul Gambar dari DB</td>
                                            <td>
                                                <img src="{{ asset('assets/depan/images/02.jpg') }}" width="50%">
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-icon-split">
                                                    <span class="text">ganti gambar</span>
                                                </a>
                                                <br>
                                                <br>
                                                <a href="#" class="btn btn-danger btn-icon-split">
                                                    <span class="text">Hapus gambar</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Judul Gambar dari DB</td>
                                            <td>
                                                <img src="{{ asset('assets/depan/images/03.jpg') }}" width="50%">
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-icon-split">
                                                    <span class="text">ganti gambar</span>
                                                </a>
                                                <br>
                                                <br>
                                                <a href="#" class="btn btn-danger btn-icon-split">
                                                    <span class="text">Hapus gambar</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Judul Gambar dari DB</td>
                                            <td>
                                                <img src="{{ asset('assets/depan/images/04.jpg') }}" width="50%">
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-icon-split">
                                                    <span class="text">ganti gambar</span>
                                                </a>
                                                <br>
                                                <br>
                                                <a href="#" class="btn btn-danger btn-icon-split">
                                                    <span class="text">Hapus gambar</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Judul Gambar dari DB</td>
                                            <td>
                                                <img src="{{ asset('assets/depan/images/05.jpg') }}" width="50%">
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-icon-split">
                                                    <span class="text">ganti gambar</span>
                                                </a>
                                                <br>
                                                <br>
                                                <a href="#" class="btn btn-danger btn-icon-split">
                                                    <span class="text">Hapus gambar</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

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