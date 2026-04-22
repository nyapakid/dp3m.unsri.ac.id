<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <title>DP3M UNSRI - Status Akreditasi Interasional</title>
        @include('depan.main-module-view.meta')
        
        @include('depan.main-module-view.css')
    </head>
    <body>
        
        <div class="page">
            <header class="section page-header">

                @include('depan.main-module-view.barnav')

            </header>

            <!-- Swiper-->

            @include('depan.akreditasi-inter-status-view-module.akreditasi-inter-resume-tabel')
            @include('depan.akreditasi-inter-status-view-module.akreditasi-inter-tabel-prodi')
            @include('depan.akreditasi-inter-status-view-module.akreditasi-inter-tabel-sertifikasi')

            <!-- Page Footer-->
            @include('depan.main-module-view.footer')

        </div>

        <!-- Global Mailform Output-->
        <div class="snackbars" id="form-output-global"></div>
        
        @include('depan.main-module-view.js')
        
    </body>
</html>