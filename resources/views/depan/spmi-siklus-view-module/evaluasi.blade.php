<section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
    <div class="container-fluid">
        <div>
            <article class="box-icon-classic">
                <div class="unit-body">
                    <h4 class="box-icon-classic-title">Auditor Aktif AMAI UNSRI</h4>

                    <table id="akreditasi"
                        class="table table-striped table-hover table-bordered align-middle">

                        <thead class="table-light">
                            <tr>
                                <th width="50">No</th>
                                <th>Auditor</th>
                                <th>NIP</th>
                                <th>NIDN</th>
                                <th>Fakultas</th>
                                <th>SK</th>
                                <th>Status</th>
                                <th width="100">File SK</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($auditors as $index => $auditor)

                                @php
                                    $dosen = $auditor['dosen'] ?? [];
                                    $homebase = $dosen['homebase'] ?? [];
                                    $fakultas = $homebase['fakultas'] ?? [];
                                    $sk = $auditor['sk'] ?? [];
                                @endphp

                                <tr>

                                    {{-- No --}}
                                    <td>
                                        {{ $index + 1 }}
                                    </td>

                                    {{-- Nama --}}
                                    <td>
                                        <strong>
                                            {{ $dosen['nama'] ?? '-' }}
                                        </strong>
                                    </td>

                                    {{-- NIP --}}
                                    <td>
                                        {{ $dosen['nip'] ?? '-' }}
                                    </td>

                                    {{-- NIDN --}}
                                    <td>
                                        {{ $dosen['nidn'] ?? '-' }}
                                    </td>

                                    {{-- Fakultas --}}
                                    <td>

                                        <strong>
                                            {{ $fakultas['kode_fakultas'] ?? '-' }}
                                        </strong>

                                    </td>

                                    {{-- SK --}}
                                    <td>

                                        <strong>
                                            {{ $sk['nomor_sk'] ?? '-' }}
                                        </strong>

                                        <br>

                                        <small class="text-muted">
                                            Tanggal:
                                            {{ $sk['tanggal_sk'] ?? '-' }}
                                        </small>

                                    </td>

                                    {{-- Status --}}
                                    <td>

                                        @if(($dosen['status'] ?? '') === 'Aktif')
                                            <span class="badge bg-success">
                                                Aktif
                                            </span>
                                        @else
                                            <span class="badge bg-secondary">
                                                {{ $dosen['status'] ?? '-' }}
                                            </span>
                                        @endif

                                    </td>

                                    {{-- File SK --}}
                                    <td class="text-center">

                                        @if(!empty($sk['file_sk_url']))

                                            <a
                                                href="{{ $sk['file_sk_url'] }}"
                                                target="_blank"
                                                class="btn btn-sm btn-danger"
                                            >
                                                PDF
                                            </a>

                                        @else

                                            <span class="text-muted">
                                                -
                                            </span>

                                        @endif

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="11" class="text-center">
                                        Tidak ada data auditor.
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>
                </div>
                
            </article>

            <!--
            <article class="box-icon-classic">
                
                <div class="country-tab">
                    <button class="country-links" onclick="openCountry(event, 'SKAMAI')" id="defaultCountry">SK-AMAI</button>
                    <button class="country-links" onclick="openCountry(event, 'SKEMI')">ST-AMAI</button>
                </div>

                <div id="SKAMAI" class="country-content">
                    @include('depan.spmi-siklus-view-module.tabel.tabel-sk-amai')
                </div>

                <div id="SKEMI" class="country-content">
                    @include('depan.spmi-siklus-view-module.tabel.tabel-st-amai')
                </div>

            </article>
            -->

            <article class="box-icon-classic">
                <div class="unit-body">
                    <h4 class="box-icon-classic-title">Evaluasi SPMI</h4>
                    <div class="hero-buttons mt-4">
                        <a href="#" target="_blank" class="btn btn-primary">Evaluasi SPMI</a>
                    </div>

                    <hr style="border: 2px solid blue; width: 100%; border-radius: 5px;">

                    <h4 class="box-icon-classic-title">Evaluasi Kurikulum</h4>
                    <div class="hero-buttons mt-4">
                        <a href="https://repository.unsri.ac.id/208666/1/Panduan%20pemngukuran%20capaian%20CPMK%20dan%20CPL%20final%20%20%281%29.pdf" target="_blank" class="btn btn-primary">Panduan Pengukuran Ketercapaian CPL</a>
                    </div>
                    <div class="hero-buttons mt-4">
                        <a href="http://repository.unsri.ac.id/id/eprint/208669" target="_blank" class="btn btn-primary">Instrumen Pengkuran Ketercapaian CPL</a>
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