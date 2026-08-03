<section class="section section-sm bg-default">

    <div class="container mt-4">
        <h3>Akreditasi Institusi Perguruan Tinggi</h3>

        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Lembaga Akreditasi</th>
                    <th>Nomor Surat</th>
                    <th>Peringkat</th>
                    <th>Berlaku Mulai</th>
                    <th>Berlaku Hingga</th>
                    <th>Download File</th>
                </tr>
            </thead>
            <tbody>
                @foreach($AKREDITASI_AIPT as $akreditasi_aipt_as)
                <tr>
                    <td>{!! $loop->iteration !!}</td>
                    <td>{!! $akreditasi_aipt_as->akreditasi_aipt_lembaga !!}</td>
                    <td>{!! $akreditasi_aipt_as->akreditasi_aipt_no_surat !!}</td>
                    <td>{!! $akreditasi_aipt_as->akreditasi_aipt_peringkat !!}</td>
                    <td>{!! $akreditasi_aipt_as->akreditasi_aipt_berlaku_mulai !!}</td>
                    <td>{!! $akreditasi_aipt_as->akreditasi_aipt_berlaku_selesai !!}</td>
                    <td><a href="{!! $akreditasi_aipt_as->akreditasi_aipt_link_repo !!}" target="_blank">Download</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</section>