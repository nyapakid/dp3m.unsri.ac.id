<section class="section section-sm bg-default">

    <div class="container mt-4">
        <h3>Peraturan dan Undang-Undang</h3>

        <table class="table table-striped table-hover table-bordered align-middle">

            <thead class="table-dark">
                <tr>
                    <th style="width: fit-content; white-space: nowrap;">No</th>
                    <th style="width: fit-content; white-space: nowrap;">Nama File</th>
                    <th style="width: fit-content; white-space: nowrap;">Bentuk</th>
                    <th style="width: fit-content; white-space: nowrap;">Nomor</th>
                    <th style="width: fit-content; white-space: nowrap;">Tanggal Penetapan</th>
                    <th style="width: fit-content; white-space: nowrap;">Link Download</th>
                </tr>
            </thead>

            <tbody>
                @forelse($PERATURAN_DOKUMEN_UU as $peraturan_dokumen_uu_as)
                    <tr>
                        <td style="text-align: center">{{ $loop->iteration }}</td>
                        <td style="text-align: center">{{ $peraturan_dokumen_uu_as->peraturan_dokumen_uu_nama_dokumen }}</td>
                        <td style="text-align: center">{{ $peraturan_dokumen_uu_as->peraturan_dokumen_uu_bentuk_dokumen }}</td>
                        <td style="text-align: center">{{ $peraturan_dokumen_uu_as->peraturan_dokumen_uu_nomor_dokumen }}</td>
                        <td style="text-align: center">{{ $peraturan_dokumen_uu_as->peraturan_dokumen_uu_tanggal_dokumen }}</td>
                        <td style="text-align: center"><a href="{!! $peraturan_dokumen_uu_as->peraturan_dokumen_uu_link_dokumen !!}" target="_blank">Download</a></td>
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