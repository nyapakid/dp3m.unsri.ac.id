<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <title>DP3M UNSRI - Struktur Organisasi</title>
        @include('depan.main-module-view.meta')
        
        @include('depan.main-module-view.css')
    </head>
    <body>
        
        <div class="page">
            <header class="section page-header">

                @include('depan.main-module-view.barnav')

            </header>

            <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
                <div class="container-fluid">
                    <br>
                    <h3>{!! $TENTANG_STRUKTURORGANISASI->tentang_struktur_judul !!}</h3>
                
                    <div><img src="data:image/jpeg;base64,{{ base64_encode($TENTANG_STRUKTURORGANISASI->tentang_struktur_konten) }}" width="1300" height="1300"></div>

                </div>
            </section>
        

            <!-- Page Footer-->
            @include('depan.main-module-view.footer')

        </div>

        <!-- Global Mailform Output-->
        <div class="snackbars" id="form-output-global"></div>
        
        @include('depan.main-module-view.js')
        
    </body>
</html>