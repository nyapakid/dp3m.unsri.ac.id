<div class="container mt-4">
    <h3>Instrumen Akreditasi Nasional</h3>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Lembaga Akreditasi</th>
                <th>Berdasarkan</th>
                <th>Download File</th>
            </tr>
        </thead>
        <tbody>
            @foreach($AKREDITASI_NASIONAL_INSTRUMEN as $akreditasi_nasional_instrumen_as)
            <tr>
                <td style="text-align: center">{!! $loop->iteration !!}</td>
                <td style="text-align: center">{!! $akreditasi_nasional_instrumen_as->akreditasi_instrumen_lembaga !!}</td>
                <td style="width: 16%; text-align: center">{!! $akreditasi_nasional_instrumen_as->akreditasi_instrumen_berdasarkan !!}</td>
                <td style="width: 16%; text-align: center"><a href="{!! $akreditasi_nasional_instrumen_as->akreditasi_instrumen_link !!}" target="_blank">Download</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
