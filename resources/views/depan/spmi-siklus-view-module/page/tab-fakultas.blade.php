<section class="section section-sm bg-default">
    <div class="container">

        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'FE')" id="defaultOpen"><a>EKONOMI</a></button>
            <button class="tablinks" onclick="openCity(event, 'FT')"><a>TEHNIK</a></button>
            <button class="tablinks" onclick="openCity(event, 'FH')"><a>HUKUM</a></button>
            <button class="tablinks" onclick="openCity(event, 'FK')"><a>KEDOKTERAN</a></button>
            <button class="tablinks" onclick="openCity(event, 'FP')"><a>PERTANIAN</a></button>
            <button class="tablinks" onclick="openCity(event, 'FKIP')"><a>FKIP</a></button>
            <button class="tablinks" onclick="openCity(event, 'FISIP')"><a>FISIP</a></button>
            <button class="tablinks" onclick="openCity(event, 'FMIPA')"><a>MIPA</a></button>
            <button class="tablinks" onclick="openCity(event, 'FASILKOM')"><a>ILKOM</a></button>
            <button class="tablinks" onclick="openCity(event, 'FKM')"><a>KESMAS</a></button>
            <button class="tablinks" onclick="openCity(event, 'PASCA')"><a>SEKOLAH PASCASARJANA</a></button>
        </div>

        <div id="FE" class="tabcontent">@include('depan.spmi-siklus-view-module.tabel.tabel-fe')</div>
        <div id="FT" class="tabcontent">@include('depan.spmi-siklus-view-module.tabel.tabel-ft')</div>
        <div id="FH" class="tabcontent">@include('depan.spmi-siklus-view-module.tabel.tabel-fh')</div>
        <div id="FK" class="tabcontent">@include('depan.spmi-siklus-view-module.tabel.tabel-fk')</div>
        <div id="FP" class="tabcontent">@include('depan.spmi-siklus-view-module.tabel.tabel-fp')</div>
        <div id="FKIP" class="tabcontent">@include('depan.spmi-siklus-view-module.tabel.tabel-fkip')</div>
        <div id="FISIP" class="tabcontent">@include('depan.spmi-siklus-view-module.tabel.tabel-fisip')</div>
        <div id="FMIPA" class="tabcontent">@include('depan.spmi-siklus-view-module.tabel.tabel-mipa')</div>
        <div id="FASILKOM" class="tabcontent">@include('depan.spmi-siklus-view-module.tabel.tabel-ilkom')</div>
        <div id="FKM" class="tabcontent">@include('depan.spmi-siklus-view-module.tabel.tabel-fkm')</div>
        <div id="PASCA" class="tabcontent">@include('depan.spmi-siklus-view-module.tabel.tabel-pasca')</div>

        

    </div>
<section>