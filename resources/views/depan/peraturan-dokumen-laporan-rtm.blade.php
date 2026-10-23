<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <title>DP3M UNSRI - Dokumen Laporan RTM</title>
        @include('depan.main-module-view.meta')
        
        @include('depan.main-module-view.css')
    </head>
    <body>
        
        <div class="page">
            <header class="section page-header">

                @include('depan.main-module-view.barnav')

            </header>
            <section class="section section-sm bg-default">
                <div class="container">

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
                                @forelse($PERATURAN_DOKUMEN_RTM as $peraturan_dokumen_rtm_as)
                                    <tr>
                                        <td style="text-align: center">{{ $loop->iteration }}</td>
                                        <td style="text-align: center">{{ $peraturan_dokumen_rtm_as->peraturan_dokumen_rtm_nama }}</td>
                                        <td style="text-align: center">{{ $peraturan_dokumen_rtm_as->peraturan_dokumen_rtm_tahun }}</td>
                                        <td style="text-align: center"><a href="{!! $peraturan_dokumen_rtm_as->peraturan_dokumen_rtm_link !!}" target="_blank">Download</a></td>
                                    </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" style="text-align: center">Belum Ada Data</td>
                                        </tr>
                                @endforelse
                            </tbody>

                        </table>
                    </section>

                </div>
            </section>
            <br>

            <!-- Page Footer-->
            @include('depan.main-module-view.footer')

        </div>

        <!-- Global Mailform Output-->
        <div class="snackbars" id="form-output-global"></div>
        
        @include('depan.main-module-view.js')
        
    </body>
</html>