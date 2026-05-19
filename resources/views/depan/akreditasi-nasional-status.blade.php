<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <title>DP3M UNSRI - Status Akreditasi Nasional</title>
        @include('depan.main-module-view.meta')
        
        @include('depan.main-module-view.css')
    </head>
    <body>
        
        <div class="page">
            <header class="section page-header">

                @include('depan.main-module-view.barnav')

            </header>

            @include('depan.akreditasi-nasional-status-view-module.akreditasi-nasional-resume-tabel')
            @include('depan.akreditasi-nasional-status-view-module.akreditasi-nasional-tabel-prodi')
            <!--
            @include('depan.akreditasi-nasional-status-view-module.akreditasi-nasional-tabel-sertifikasi')
            -->

            <br>

            <!-- Page Footer-->
            @include('depan.main-module-view.footer')

        </div>

        <!-- Global Mailform Output-->
        <div class="snackbars" id="form-output-global"></div>
        
        @include('depan.main-module-view.js')
        <!-- Script khusus halaman ini untuk narik data akreditasi nasional-->
        <script>

            document.addEventListener("DOMContentLoaded", function () {

                // TOKEN API
                const token = "{{ env('TOKEN_PDUNSRI') }}";

                // API
                fetch("{{ env('LINK_PDUNSRI') }}", {

                    method: "GET",

                    headers: {
                        "Authorization": "Bearer " + token,
                        "Accept": "application/json"
                    }

                })

                .then(response => response.json())

                .then(result => {

                    console.log(result);

                    let data = result.data || [];

                    let tbody = document.querySelector("#akreditasi tbody");

                    tbody.innerHTML = "";

                    // Statistik
                    let peringkatCount = {};
                    let jenjangCount = {};

                    data.forEach((item, index) => {

                        let peringkat = item.peringkat || "-";
                        let jenjang = item.jenjang || "-";

                        // Hitung peringkat
                        if (peringkatCount[peringkat]) {
                            peringkatCount[peringkat]++;
                        } else {
                            peringkatCount[peringkat] = 1;
                        }

                        // Hitung jenjang
                        if (jenjangCount[jenjang]) {
                            jenjangCount[jenjang]++;
                        } else {
                            jenjangCount[jenjang] = 1;
                        }

                        tbody.innerHTML += `
                            <tr>
                                <td>${index + 1}</td>
                                <td>${item.kode_prodi ?? '-'}</td>
                                <td>${item.nama_prodi ?? '-'}</td>
                                <td>${item.jenjang ?? '-'}</td>
                                <td>${item.no_sk ?? '-'}</td>
                                <td>${item.tahun ?? '-'}</td>
                                <td>${item.peringkat ?? '-'}</td>
                                <td>${formatTanggal(item.tanggal_kadaluarsa)}</td>
                            </tr>
                        `;

                    });

                    // =========================
                    // TABEL PERINGKAT
                    // =========================

                    let peringkatBody = document.getElementById("peringkat-body");

                    peringkatBody.innerHTML = "";

                    Object.keys(peringkatCount).forEach(function(peringkat){

                        peringkatBody.innerHTML += `
                            <tr>
                                <td class="label">${peringkat}</td>
                                <td class="separator">:</td>
                                <td class="value">${peringkatCount[peringkat]}</td>
                            </tr>
                        `;

                    });

                    // =========================
                    // TABEL JENJANG
                    // =========================

                    let jenjangBody = document.getElementById("jenjang-body");

                    jenjangBody.innerHTML = "";

                    let totalSemua = 0;

                    Object.keys(jenjangCount).forEach(function(jenjang){

                        totalSemua += jenjangCount[jenjang];

                        jenjangBody.innerHTML += `
                            <tr>
                                <td class="label">${jenjang}</td>
                                <td class="separator">:</td>
                                <td class="value">${jenjangCount[jenjang]}</td>
                            </tr>
                        `;

                    });

                    jenjangBody.innerHTML += `
                        <tr>
                            <td class="label"><b>Total</b></td>
                            <td class="separator">:</td>
                            <td class="value"><b>${totalSemua}</b></td>
                        </tr>
                    `;

                })

                .catch(error => {

                    console.error(error);

                    document.querySelector("#akreditasi tbody").innerHTML = `
                        <tr>
                            <td colspan="8" class="text-center text-danger">
                                Gagal mengambil data API
                            </td>
                        </tr>
                    `;

                });

                // FORMAT TANGGAL
                function formatTanggal(tanggal){

                    if(!tanggal) return "-";

                    let d = new Date(tanggal);

                    if(isNaN(d)) return tanggal;

                    return d.toLocaleDateString("id-ID", {
                        day: "2-digit",
                        month: "short",
                        year: "numeric"
                    });

                }

            });

        </script>
        
    </body>
</html>