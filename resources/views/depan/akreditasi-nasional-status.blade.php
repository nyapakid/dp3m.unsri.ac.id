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
                const token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI1IiwianRpIjoiNmU4NWJmM2Y1NDg4Zjk4YmM0MmQ5MDBiZTNmOTU0NzY0MTQ4ZjdhYzI5MWY5MjdjOTdlOWNmMTg2MjZiMjQ4Y2E3NjNjYzkzNGU1YTA0YjQiLCJpYXQiOjE3NzkwODkzMjAuOTcyNTc2LCJuYmYiOjE3NzkwODkzMjAuOTcyNTc4LCJleHAiOjE4MTA2MjUzMjAuOTcwMjA0LCJzdWIiOiIxMCIsInNjb3BlcyI6W119.gFiVhu1pqzkt70rMagdAoWzyrgEmCyOE3F6BCMGsEdwOB740SSmfwTqmHc9_IVcMDp-XUh8zVt9596F1KtQ3vv2PpP3el7x110E7QJX7CcoAnR0S00Ms0G4v4LIBPyc_klTDyw0rgw2EIAk4qdOeIFkG9iGg62iYvD3Gp90yy5gXvvmIIgpOhhUy8-xnT5pQfZZPRmfxGr7aJyfbhaLDGu_2OeHyW5hBS1e4tz1izR2x2cw020JzkTNh1K8kGp2Ba3VMtFtKqK2Y1K356_fiZy7p_NMuakn99JcUjM4oHtCuqxic9yXzz5LpcX9gXcweQ_fBhE3DyiIp3-Q6xCL436GWieT79_YIdIrqawpK8E6jS0u4UQK39Xt8C-U_2FtmO8HhbStYgNcqLjCJNUb3XyBjdH4aA4O3QS6QQLQPgxarGpJkOsSsMuA-iItvhTtzX0k77RPscRk0BdKCCeFPRHdDWSTVm50oKTVgTZVvUyA75krxaThTl8RBddL5tO5rlEBXBZT_M3SkWrW0mQ9FaqQ0SVnsoXflsJ5wRhdI1BsgM7ilGJj929mGTVjALBEbHzt2boVpU7vjRXzDNsp4av-l9WTPMcyrkNer1zbdpvXpT1jlcloSNhbBQmr1aDQu2Qi9X6OuhtwgvFqV2iPMadk1_eKiM6oj0aSV1t5pKyA";

                // API
                fetch("https://pangkalan-data.unsri.ac.id/api/akreditasi-prodi/all-prodi", {

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