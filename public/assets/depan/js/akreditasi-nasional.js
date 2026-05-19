            document.addEventListener("DOMContentLoaded", function () {

                // API DARI CONTROLLER LARAVEL
                fetch("/api/akreditasi", {

                    method: "GET",

                    headers: {
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

                    let rows = "";

                    data.forEach((item, index) => {

                        let peringkat = item.peringkat || "-";
                        let jenjang = item.jenjang || "-";

                        // Hitung peringkat
                        peringkatCount[peringkat] =
                            (peringkatCount[peringkat] || 0) + 1;

                        // Hitung jenjang
                        jenjangCount[jenjang] =
                            (jenjangCount[jenjang] || 0) + 1;

                        rows += `
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

                    tbody.innerHTML = rows;

                    // =========================
                    // TABEL PERINGKAT
                    // =========================

                    let peringkatBody =
                        document.getElementById("peringkat-body");

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

                    let jenjangBody =
                        document.getElementById("jenjang-body");

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