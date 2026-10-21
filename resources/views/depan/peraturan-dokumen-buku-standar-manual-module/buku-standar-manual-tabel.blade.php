<section class="section section-sm bg-default">
        <table class="table table-striped table-hover table-bordered align-middle">

            <thead class="table-dark">
                <tr>
                    <th style="width: 40px; white-space: nowrap;">No</th>
                    <th style="width: fit-content; white-space: nowrap;">Nama File</th>
                    <th style="width: fit-content; white-space: nowrap;">Tahun</th>
                    <th style="width: fit-content; white-space: nowrap;">Link Download</th>
                </tr>
            </thead>

            <tbody>
                @forelse($PERATURAN_DOKUMEN_BUKU_STANDAR_MANUAL as $peraturan_dokumen_buku_standar_manual_as)
                    <tr>
                        <td style="text-align: center">{{ $loop->iteration }}</td>
                        <td style="text-align: center">{{ $peraturan_dokumen_buku_standar_manual_as->peraturan_dokumen_buku_standar_manual_nama }}</td>
                        <td style="text-align: center">{{ $peraturan_dokumen_buku_standar_manual_as->peraturan_dokumen_buku_standar_manual_tahun }}</td>
                        <td style="text-align: center"><a href="{!! $peraturan_dokumen_buku_standar_manual_as->peraturan_dokumen_buku_standar_manual_link !!}" target="_blank">Download</a></td>
                    </tr>
                        @empty
                        <tr>
                            <td colspan="6" style="text-align: center">Belum Ada Data</td>
                        </tr>
                @endforelse
            </tbody>

        </table>
</section>