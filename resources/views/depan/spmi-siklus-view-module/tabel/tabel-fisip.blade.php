                    <h3 class="text-center mb-4">Laporan dan Rekomendasi Prodi Fakultas Ilmu Sosial Ilmu Politik</h3>
                    <table class="table table-striped table-hover table-bordered align-middle">

                        <thead class="table-dark">
                            <tr>
                                <th style="width: fit-content; white-space: nowrap;">No</th>
                                <th style="width: fit-content; white-space: nowrap;">Id Prodi</th>
                                <th style="width: fit-content; white-space: nowrap;">Prodi</th>
                                <th style="width: fit-content; white-space: nowrap;">Jenjang</th>
                                <th style="width: fit-content; white-space: nowrap;">Periode SPMI</th>
                                <th style="width: fit-content; white-space: nowrap;">Download File</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($SIKLUS_SPMI_LAPORAN_PRODI_FISIP as $siklus_spmi_laporan_prodi_fisip)
                                <tr>
                                    <td style="text-align: center">{{ $loop->iteration }}</td>
                                    <td style="text-align: center">{{ $siklus_spmi_laporan_prodi_fisip->siklus_spmi_laporan_prodi_prodi_id }}</td>
                                    <td style="text-align: center">{{ $siklus_spmi_laporan_prodi_fisip->siklus_spmi_laporan_prodi_nama_prodi }}</td>
                                    <td style="text-align: center">{{ $siklus_spmi_laporan_prodi_fisip->siklus_spmi_laporan_prodi_jenjang_prodi }}</td>
                                    <td style="text-align: center">{{ $siklus_spmi_laporan_prodi_fisip->siklus_spmi_laporan_prodi_tahun_periode_spmi }}</td>
                                    <td style="text-align: center"><a href="{{ $siklus_spmi_laporan_prodi_fisip->siklus_spmi_laporan_prodi_link_download }}" target="_blank">Download</a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" style="text-align: center">Belum Ada Data</td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>