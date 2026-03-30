<!DOCTYPE html>
<html lang="en">

<head>

    @include('belakang.main-module-view.meta')

    <title>DP3M - Home - Halaman Tambah Galery</title>

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

                    <div class="container-fluid">

                        <h3>Tambah Gambar Galeri</h3>

                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="mb-3">
                                <label>Judul</label>
                                <input type="text" name="judul_gambar_slide" class="form-control" value="Masukan Judul Gambar" required>
                            </div>
                            
                            <div class="mb-3">
                                <label>Gambar</label>
                                <input type="file" name="gambar_gambar_slide" class="form-control">
                            </div>
                            <button class="btn btn-success">Tambah</button>
                            <a href="{{ route('home-edit-galery') }}" class="btn btn-secondary">Batal</a>
                        </form>

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