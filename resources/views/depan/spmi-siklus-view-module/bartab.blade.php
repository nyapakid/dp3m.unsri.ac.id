<section class="section section-sm bg-default">
    <div class="container">

        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'penetapan')" id="defaultOpen"><h1>P</h1><a>Penetapan</a></button>
            <button class="tablinks" onclick="openCity(event, 'pelaksanaan')"><h1>P</h1><a>Pelaksanaan</a></button>
            <button class="tablinks" onclick="openCity(event, 'evaluasi')"><h1>E</h1><a>Evaluasi</a></button>
            <button class="tablinks" onclick="openCity(event, 'pengendalian')"><h1>P</h1><a>Pengendalian</a></button>
            <button class="tablinks" onclick="openCity(event, 'peningkatan')"><h1>P</h1><a>Peningkatan</a></button>
        </div>

        <div id="penetapan" class="tabcontent">
            @include('depan.spmi-siklus-view-module.penetapan')
        </div>

        <div id="pelaksanaan" class="tabcontent">
            @include('depan.spmi-siklus-view-module.pelaksanaan')
        </div>

        <div id="evaluasi" class="tabcontent">
            @include('depan.spmi-siklus-view-module.evaluasi')
        </div>

        <div id="pengendalian" class="tabcontent">
            pengendalian
            @include('depan.spmi-siklus-view-module.pengendalian')
        </div>

        <div id="peningkatan" class="tabcontent">
            peningkatan
            @include('depan.spmi-siklus-view-module.peningkatan')
        </div>

    </div>
<section>