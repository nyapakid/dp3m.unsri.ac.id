<!DOCTYPE html>
<html lang="en">

<head>

    @include('belakang.main-module-view.meta')

    <title>DP3M - Home - Halaman Edit Profile</title>

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

                    <h3>Edit Profile</h3>

                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <div class="mb-3">
                            <label>Judul</label>
                            <input type="text" name="judul_profile" class="form-control" value="Nanti diambil dari database" required>
                        </div>
                        
                        <div class="mb-3">
                            <label>Gambar</label>
                            <input type="file" name="gambar_profile" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Konten</label>
                            <textarea name="deskripsi_profile" id="summernote" class="form-control" rows="20">Nanti diambil dari database</textarea>
                        </div>
                        <button class="btn btn-success">Update</button>
                        <a href="{{ route('home-edit-profile') }}" class="btn btn-secondary">Batal</a>
                    </form>

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