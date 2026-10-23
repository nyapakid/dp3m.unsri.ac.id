<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <title>DP3M UNSRI - Tabel Akreditasi Interasional</title>
        @include('depan.main-module-view.meta')
        @include('depan.main-module-view.css')
    </head>
    <body>

            @include('depan.akreditasi-inter-status-view-module.akreditasi-inter-resume-tabel')
            @include('depan.akreditasi-inter-status-view-module.akreditasi-inter-tabel-prodi')
            <script src="{{ asset('assets/depan/js/akreditasi-internasional.js') }}"></script>
            @include('depan.main-module-view.js')
        
    </body>
</html>