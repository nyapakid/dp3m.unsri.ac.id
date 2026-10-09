<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <title>DP3M UNSRI - Studi Banding</title>
        @include('depan.main-module-view.meta')
        
        @include('depan.main-module-view.css')
    </head>
    <body>
        
        <div class="page">
            <header class="section page-header">

                @include('depan.main-module-view.barnav')

            </header>
            <section class="section section-sm bg-default">
                <div class="container">

                    @include('depan.peraturan-dokumen-studi-banding-module-view.studi-banding-tabel')

                </div>
            </section>
            <br>

            <!-- Page Footer-->
            @include('depan.main-module-view.footer')

        </div>

        <!-- Global Mailform Output-->
        <div class="snackbars" id="form-output-global"></div>
        
        @include('depan.main-module-view.js')
        
    </body>
</html>