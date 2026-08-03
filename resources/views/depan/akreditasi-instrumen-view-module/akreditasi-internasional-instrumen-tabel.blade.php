<div class="container mt-4">
    <h3>Instrumen Akreditasi Internasional</h3>

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
            @foreach($AKREDITASI_INTERNASIONAL_INSTRUMEN as $akreditasi_internasional_instrumen_as)
            <tr>
                <td style="text-align: center">{!! $loop->iteration !!}</td>
                <td style="text-align: left">{!! $akreditasi_internasional_instrumen_as->akreditasi_instrumen_lembaga !!}</td>
                <td style="width: 30%; text-align: left">{!! $akreditasi_internasional_instrumen_as->akreditasi_instrumen_berdasarkan !!}</td>
                <td style="width: 16%"><a href="{!! $akreditasi_internasional_instrumen_as->akreditasi_instrumen_link !!}" target="_blank">Download</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
