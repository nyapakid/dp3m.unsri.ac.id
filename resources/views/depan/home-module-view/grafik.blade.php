<section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
    <div class="container-fluid">
        <br>
        <h3>Infografis</h3>
          
        <!-- Owl Carousel-->
        <div><img src="data:image/jpeg;base64,{{ base64_encode($HOME_INFOGRAFIS_UTAMA->home_infografis_utama_konten) }}" width="900"></div>

        <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-margin="5">
            
            @foreach($HOME_INFOGRAFIS as $home_infografis_as)
            <!-- Thumbnail Classic-->
            <article>
                <div><img src="data:image/jpeg;base64,{{ base64_encode($home_infografis_as->home_infografis_konten) }}" width="620"></div>
            </article>
            @endforeach
            
        </div>
    </div>
</section>