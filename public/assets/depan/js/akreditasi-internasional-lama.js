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

        // FILTER HANYA AKREDITASI NASIONAL
        let data = (result.data || []).filter(item => 
            item.jenis_akreditasi &&
            item.jenis_akreditasi.toLowerCase() === "internasional"
        );

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
                    <td>${item.penyelenggara_akreditasi_internasional ?? '-'}</td>
                    <td>${item.jenis_akreditasi ?? '-'}</td>
                    <td>${formatTanggal(item.tanggal_kadaluarsa)}</td>
                    <td>
                        ${
                            item.link_repo
                                ? `<a href="${item.link_repo}" target="_blank" class="btn btn-success btn-sm">
                                        <i class="fa fa-link"></i> Repository
                                </a>`
                                : '-'
                        }
                    </td>
                </tr>
            `;

        });

        // TAMPILKAN DATA KE TABEL
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

        // TOTAL DATA
        jenjangBody.innerHTML += `
            <tr>
                <td class="label"><b>Total</b></td>
                <td class="separator">:</td>
                <td class="value"><b>${totalSemua}</b></td>
            </tr>
        `;

        // JIKA DATA KOSONG
        if(data.length === 0){

            tbody.innerHTML = `
                <tr>
                    <td colspan="9" class="text-center">
                        Data akreditasi nasional tidak ditemukan
                    </td>
                </tr>
            `;

        }

    })

    .catch(error => {

        console.error(error);

        document.querySelector("#akreditasi tbody").innerHTML = `
            <tr>
                <td colspan="9" class="text-center text-danger">
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