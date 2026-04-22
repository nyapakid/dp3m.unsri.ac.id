<section class="section section-sm bg-default">
    <div class="container">

        <div class="tab">
            <button class="tablinks" onclick="openCity(event, '1')" id="defaultOpen">Kebijakan Penjaminan Mutu Unsri</button>
            <button class="tablinks" onclick="openCity(event, '2')">Standar Penjaminan Mutu Unsri</button>
            <button class="tablinks" onclick="openCity(event, '3')">Manual Penjaminan Mutu Unsri</button>
        </div>

        <div id="1" class="tabcontent">
            @include('depan.peraturan-dokumen-spmi-module-view.spmi-bartab2-kebijakan-spmi')
        </div>

        <div id="2" class="tabcontent">
            @include('depan.peraturan-dokumen-spmi-module-view.spmi-bartab2-standar-penjamin-mutu') 
        </div>

        <div id="3" class="tabcontent">
            @include('depan.peraturan-dokumen-spmi-module-view.spmi-bartab2-manual-penjamin-mutu')
        </div>

    </div>
<section>