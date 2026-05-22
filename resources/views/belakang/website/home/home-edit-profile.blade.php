<!DOCTYPE html>
<html lang="en">

<head>

    @include('belakang.main-module-view.meta')

    <title>DP3M - Home - Edit Profile</title>

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
                        <div><img src="{{ asset('assets/belakang/img/penjelasan-home-profile.png') }}" width="100%" height="100%"></div>
                    </div>
                    <br>

                    <!-- Edit Profile -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary">Edit Profile</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 20%; white-space: nowrap;">Judul</th>
                                            <th>Konten</th>
                                            <th style="width: 16%; white-space: nowrap;">Aksi</th>
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        <tr>
                                            <td>Profile Singkat dan Sejarah DP3M</td>
                                            <td>Konten dari DB</td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-icon-split">
                                                    <span class="text">Edit Konten/Judul</span>
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