<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <title>DP3M UNSRI - {{ $BERITA_DETAIL->judul_berita }}</title>
        @include('depan.main-module-view.meta')
        
        @include('depan.main-module-view.css')
    </head>
    <body>
        
        <div class="page">
            <header class="section page-header">

                @include('depan.main-module-view.barnav')

            </header>

            <!-- Swiper-->

            <section class="section section-sm bg-default">
                <div class="container">

                    <h2 align="left">{{ $BERITA_DETAIL->judul_berita }}</h2>
                    <h5 align="left">{{ $BERITA_DETAIL->tanggal_berita }}</h5>
                    <br>
                    <div><img src="data:image/jpeg;base64,{{ base64_encode($BERITA_DETAIL->konten_berita_gambar) }}" width="50%" height="50%"></div>
                    <br>
                    <p align="justify">
                        {!! $BERITA_DETAIL->konten_berita !!}
                    </p>
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