<section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
    <div class="container-fluid">
        <div>
            
            <article class="box-icon-classic">
                <div class="unit-body">
                    <h4 class="box-icon-classic-title">Evaluasi Mutu Internal</h4>
                    <div class="hero-buttons mt-4">
                        <a href="#" target="_blank" class="btn btn-primary">Evaluasi Data SPMI</a>
                    </div>
                </div>
            </article>

            <article class="box-icon-classic">
                <div class="unit-body">
                    <h4 class="box-icon-classic-title">Auditor Aktif AMAI dan EMI UNSRI</h4>
                    <!--
                    @include('depan.spmi-siklus-view-module.tabel.tabelauditor')
                    -->

                    <table id="akreditasi"
                        class="table table-striped table-hover table-bordered align-middle">

                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Fakultas</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td colspan="3" class="text-center">
                                    Memuat data...
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
                
            </article>

            <article class="box-icon-classic">
                
                <div class="country-tab">
                    <button class="country-links" onclick="openCountry(event, 'SKAMAI')" id="defaultCountry">SK-AMAI</button>
                    <button class="country-links" onclick="openCountry(event, 'SKEMI')">SK-EMI</button>
                </div>

                <div id="SKAMAI" class="country-content">
                    @include('depan.spmi-siklus-view-module.tabel.tabel-sk-amai')
                </div>

                <div id="SKEMI" class="country-content">
                    @include('depan.spmi-siklus-view-module.tabel.tabel-sk-emi')
                </div>

            </article>

            <article class="box-icon-classic">
                <div class="unit-body">
                    <h4 class="box-icon-classic-title">Evaluasi Dokumen SPMI</h4>
                    <div class="hero-buttons mt-4">
                        <a href="#" target="_blank" class="btn btn-primary">Evaluasi Dokumen SPMI</a>
                    </div>

                    <hr style="border: 2px solid blue; width: 100%; border-radius: 5px;">

                    <h4 class="box-icon-classic-title">Evaluasi Kurikulum</h4>
                    <div class="hero-buttons mt-4">
                        <a href="#" target="_blank" class="btn btn-primary">Panduan Pengukuran Ketercapaian CPL</a>
                    </div>
                    <div class="hero-buttons mt-4">
                        <a href="#" target="_blank" class="btn btn-primary">Instrumen Pengkuran Ketercapaian CPL</a>
                    </div>

                    <hr style="border: 2px solid blue; width: 100%; border-radius: 5px;">

                    <h4 class="box-icon-classic-title">Laporan dan Rekomendasi Hasil Evaluasi</h4>

                    <div class="container">
                        <div class="row justify-content-center g-4">

                            <div class="hero-buttons mt-4">
                                <a href="#" target="_blank" class="btn btn-primary">Download File *.doc Prodi</a>
                            </div>
                            <div class="hero-buttons mt-4">
                                <a href="{{ route('spmi-siklus-laporan-prodi') }}" target="_blank" class="btn btn-primary">Laporan Hasil Evaluasi Prodi</a>
                            </div>

                        </div>
                    </div>
                </div>
            </article>
    
            

            <article class="box-icon-classic">
                <div class="unit-body">
                    <h4 class="box-icon-classic-title">Outcome-Based Acreditation</h4>
                    <p class="box-icon-classic-text">
                        Yang dimaksud Outcome-based Accreditation adalah, pada akreditasi program studi (APS) berfokus pada ketercapaian capaian pembelajaran lulusan, 
                        pada akreditasi perguruan tinggi (APT) berfokus pada ketercapaian visi, misi, dan tujuan perguruan tinggi <br>
                        Bukan berarti hanya luaran dan outcome penyelenggaraan program studi atau perguruan tinggi saja, Ada penilaian terhadap pemenuhan SN-Dikti yang 
                        menyangkut input dan proses. Bobot penilaian ditetapkan dengan prioritas tertinggi (bobot tertinggi) pada aspek luaran dan capaian (outputs and outcomes) 
                        diikuti aspek proses dan input.
                    </p>
                </div>
            </article>

        </div>
    </div>
</section>