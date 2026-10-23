<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <title>DP3M UNSRI - Tabel Akreditasi Nasional</title>
        @include('depan.main-module-view.meta')
        @include('depan.main-module-view.css')
    </head>
    <body>

            @include('depan.akreditasi-nasional-status-view-module.akreditasi-nasional-resume-tabel')
            @include('depan.akreditasi-nasional-status-view-module.akreditasi-nasional-tabel-prodi')
            <script src="{{ asset('assets/depan/js/akreditasi-nasional.js') }}"></script>
            @include('depan.main-module-view.js')

    </body>
</html>