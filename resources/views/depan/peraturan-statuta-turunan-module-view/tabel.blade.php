<section class="section section-sm bg-default">

    <div class="container mt-4">
        <h3 class="mt-5">Peraturan Turunan Statuta Universitas Sriwijaya</h3>
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>jenis Peraturan</th>
                    <th>Nama File</th>
                    <th>Tentang</th>
                    <th>Nomor Peraturan</th>
                    <th>Download File</th>
                </tr>
            </thead>
            <tbody>
                @forelse($PERATURAN_DOKUMEN_STATUTA_TABEL as $peraturan_dokumen_statuta_tabel_as)
                    <tr>
                        <td style="text-align: center">{{ $loop->iteration }}</td>
                        <td style="text-align: center">{{ $peraturan_dokumen_statuta_tabel_as->peraturan_dokumen_statuta_tabel_jenis_dokumen }}</td>
                        <td style="text-align: center">{{ $peraturan_dokumen_statuta_tabel_as->peraturan_dokumen_statuta_tabel_nama_dokumen }}</td>
                        <td style="text-align: center">{{ $peraturan_dokumen_statuta_tabel_as->peraturan_dokumen_statuta_tabel_nomor_dokumen }}</td>
                        <td style="text-align: center">{{ $peraturan_dokumen_statuta_tabel_as->peraturan_dokumen_statuta_tabel_tanggal_dokumen }}</td>
                        <td style="text-align: center"><a href="{!! $peraturan_dokumen_statuta_tabel_as->peraturan_dokumen_statuta_tabel_link_repo !!}" target="_blank">Download</a></td>
                    </tr>
                        @empty
                        <tr>
                            <td colspan="7" style="text-align: center">Belum Ada Data</td>
                        </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</section>