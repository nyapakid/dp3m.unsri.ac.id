<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <title>DP3M UNSRI - List Berita</title>
        @include('depan.main-module-view.meta')
        
        @include('depan.main-module-view.css')
    </head>
    <body>
        
        <div class="page">
            <header class="section page-header">

                @include('depan.main-module-view.barnav')

            </header>

            <!-- Swiper-->
            
            @foreach ($BERITA_LIST as $berita_list_as)
            
            <section class="section section-sm bg-default">
                <div class="container">

                    <div class="row align-items-start">

                        {{-- Kolom gambar --}}
                        <div class="col-12 col-md-3 mb-3 mb-md-0">
                            <a href="{{ route('berita-detail', $berita_list_as->id_berita) }}">
                                <img
                                    src="data:image/jpeg;base64,{{ base64_encode($berita_list_as->konten_berita_gambar) }}"
                                    class="img-fluid"
                                    alt="{{ $berita_list_as->judul_berita }}"
                                    style="width: auto; height: 220px;"
                                >
                            </a>
                        </div>

                        {{-- Kolom teks --}}
                        <div class="col-12 col-md-9">
                            <article class="quote-classic">

                                <div class="quote-classic-text">
                                    <p class="q text-left">
                                        <a href="{{ route('berita-detail', $berita_list_as->id_berita) }}">
                                            {{ $berita_list_as->judul_berita }}
                                        </a>
                                    </p>
                                </div>

                                <p class="quote-classic-cite text-success mb-2">
                                    {{ $berita_list_as->tanggal_berita }}
                                </p>

                                <p class="text-justify">
                                    {{ \Str::limit(strip_tags($berita_list_as->konten_berita), 400, '...') }}
                                </p>

                            </article>
                        </div>

                    </div>

                </div>
            </section>

            @endforeach

            <!-- Page Footer-->
            @include('depan.main-module-view.footer')

        </div>

        <!-- Global Mailform Output-->
        <div class="snackbars" id="form-output-global"></div>
        
        @include('depan.main-module-view.js')
        
    </body>
</html>