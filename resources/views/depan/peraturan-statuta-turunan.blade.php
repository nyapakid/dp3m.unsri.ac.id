<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <title>DP3M UNSRI - Statuta dan Peraturan Turunan Statuta</title>
        @include('depan.main-module-view.meta')
        
        @include('depan.main-module-view.css')
    </head>
    <body>
        
        <div class="page">
            <header class="section page-header">

                @include('depan.main-module-view.barnav')

            </header>

            <div class="container mt-4">
                <h3>Statuta Universitas Sriwijaya</h3>

                <iframe src="https://drive.google.com/file/d/13xma_EDHA4dZyX2yYOz0HZyjia9jeO6U/preview" width="1200" height="800"></iframe>
                <div class="hero-buttons mt-4">
                    <a href="https://drive.google.com/file/d/13xma_EDHA4dZyX2yYOz0HZyjia9jeO6U/view?usp=sharing" target="_blank" class="btn btn-primary">DOWNLOAD FILE</a>
                </div>
            </div>
            <!-- Swiper-->
            @include('depan.peraturan-statuta-turunan-module-view.tabel')


            <!-- Page Footer-->
            @include('depan.main-module-view.footer')

        </div>

        <!-- Global Mailform Output-->
        <div class="snackbars" id="form-output-global"></div>
        
        @include('depan.main-module-view.js')
        
    </body>
</html>