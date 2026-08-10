<section class="section section-sm bg-default">
        <table class="table table-striped table-hover table-bordered align-middle">

            <thead class="table-dark">
                <tr>
                    <th style="width: fit-content; white-space: nowrap;">No</th>
                    <th style="width: fit-content; white-space: nowrap;">Nama File</th>
                    <th style="width: fit-content; white-space: nowrap;">Bentuk</th>
                    <th style="width: fit-content; white-space: nowrap;">Nomor</th>
                    <th style="width: fit-content; white-space: nowrap;">Tahun</th>
                    <th style="width: fit-content; white-space: nowrap;">Status</th>
                    <th style="width: fit-content; white-space: nowrap;">Link Download</th>
                </tr>
            </thead>

            <tbody>
                @forelse($PERATURAN_DOKUMEN_SPMI_KEBIJAKAN as $peraturan_dokumen_spmi_kebijakan_as)
                    <tr>
                        <td style="text-align: center">{{ $loop->iteration }}</td>
                        <td style="text-align: center">{{ $peraturan_dokumen_spmi_kebijakan_as->peraturan_dokumen_spmi_nama_dokumen }}</td>
                        <td style="text-align: center">{{ $peraturan_dokumen_spmi_kebijakan_as->peraturan_dokumen_spmi_bentuk_dokumen }}</td>
                        <td style="text-align: center">{{ $peraturan_dokumen_spmi_kebijakan_as->peraturan_dokumen_spmi_nomor_dokumen }}</td>
                        <td style="text-align: center">{{ $peraturan_dokumen_spmi_kebijakan_as->peraturan_dokumen_spmi_tahun_dokumen }}</td>
                        <td style="text-align: center">{{ $peraturan_dokumen_spmi_kebijakan_as->peraturan_dokumen_spmi_status_dokumen }}</td>
                        <td style="text-align: center"><a href="{!! $peraturan_dokumen_spmi_kebijakan_as->peraturan_dokumen_spmi_link_dokumen !!}" target="_blank">Download</a></td>
                    </tr>
                        @empty
                        <tr>
                            <td colspan="7" style="text-align: center">Belum Ada Data</td>
                        </tr>
                @endforelse
            </tbody>

        </table>
</section>