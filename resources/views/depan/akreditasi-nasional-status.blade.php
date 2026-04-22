<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <title>DP3M UNSRI - Status Akreditasi Nasional</title>
        @include('depan.main-module-view.meta')
        
        @include('depan.main-module-view.css')
    </head>
    <body>
        
        <div class="page">
            <header class="section page-header">

                @include('depan.main-module-view.barnav')

            </header>

            @include('depan.akreditasi-nasional-status-view-module.akreditasi-nasional-resume-tabel')
            @include('depan.akreditasi-nasional-status-view-module.akreditasi-nasional-tabel-prodi')
            @include('depan.akreditasi-nasional-status-view-module.akreditasi-nasional-tabel-sertifikasi')

            <br>

            <!-- Page Footer-->
            @include('depan.main-module-view.footer')

        </div>

        <!-- Global Mailform Output-->
        <div class="snackbars" id="form-output-global"></div>
        
        @include('depan.main-module-view.js')
        
    </body>
</html>