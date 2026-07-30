<section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
    <div class="container-fluid">
        <h3>Galeri</h3>
          
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
            
            <!-- Thumbnail Classic-->
            @foreach($HOME_GALERI as $home_galeri_as)
            <article class="thumbnail thumbnail-mary">
                <div class="thumbnail-mary-figure"><img src="data:image/jpeg;base64,{{ base64_encode($home_galeri_as->home_galeri_konten) }}" alt="" width="270" height="195"/></div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="data:image/jpeg;base64,{{ base64_encode($home_galeri_as->home_galeri_konten) }}" width="270" height="195"/></a></div>
            </article>
            @endforeach
            
        </div>
    </div>
</section>