<!DOCTYPE html>
<html lang="en">

<head>

    @include('belakang.main-module-view.meta')

    <title>DP3M - Home - Edit Banner</title>

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

                <div class="container mt-4">
                    <h3>Edit Video Banner</h3>

                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Nama File</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama File dari db</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="container mt-4">
                    <h3>Edit Text Banner</h3>

                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Konten Text</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Konten Text dari db</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="container mt-4">
                    <h3>Button Banner</h3>
                    <button class="btn btn-primary mb-3">+ Tambah Button</button>

                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>no</th>
                                <th>Nama Nama Button</th>
                                <th>Link</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nama Button dari db</td>
                                <td>Link dari db</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Nama Button dari db</td>
                                <td>Link dari db</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Nama Button dari db</td>
                                <td>Link dari db</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Nama Button dari db</td>
                                <td>Link dari db</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Edit</button>
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