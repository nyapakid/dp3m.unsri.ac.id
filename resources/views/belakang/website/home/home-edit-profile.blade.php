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

                <div class="container-fluid">

                    <div class="d-flex justify-content-between mb-3">
                        <h3>Edit Profile Singkat</h3>
                    </div>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="50">No</th>
                                <th>Judul</th>
                                <th>deskripsi</th>
                                <th width="150">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Judul</td>
                                <td>deskripsi</td>
                                <td>
                                    <a href="{{ route('home-page-edit-profile') }}" class="btn btn-sm btn-warning">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

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