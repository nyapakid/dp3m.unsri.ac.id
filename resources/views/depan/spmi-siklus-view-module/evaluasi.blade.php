<section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
    <div class="container-fluid">
        <div>
            <article class="box-icon-classic">
                <div class="unit-body">
                    <h4 class="box-icon-classic-title">Auditor Aktif AMAI UNSRI</h4>
                    <!--
                    @include('depan.spmi-siklus-view-module.tabel.tabelauditor')
                    -->

                    <table id="akreditasi"
                        class="table table-striped table-hover table-bordered align-middle">

                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Fakultas</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- <tr><td>1</td><td>Ahmad Fikriyansyah, S.E., M.Ak</td><td>EKONOMI</td></tr>
                            <tr><td>2</td><td>Ahmad Khoirun Najib, S.Fil., M.B.A.</td><td>EKONOMI</td></tr> -->
                            <tr><td>3</td><td>Muhammad Ridho Sahputra, S.T., M.M.</td><td>EKONOMI</td></tr>
                            <tr><td>4</td><td>Dolly Tanzil, M.Si.</td><td>EKONOMI</td></tr>
                            <tr><td>5</td><td>Dr. Sri Handayani, S.H., M.Hum</td><td>HUKUM</td></tr>
                            <tr><td>6</td><td>Helena Primadianti Sulistyaningrum, S.H., M.H.</td><td>HUKUM</td></tr>
                            <tr><td>7</td><td>Dr. Hamonangan Albariansyah, S.H., M.H.</td><td>HUKUM</td></tr>
                            <tr><td>8</td><td>Dedeng, S.H., M.H.</td><td>HUKUM</td></tr>
                            <tr><td>9</td><td>Desia Rakhma Banjarani, S.H., M.H.</td><td>HUKUM</td></tr>
                            <tr><td>10</td><td>Enggal Nurisman, S.T., M.T.</td><td>TEKNIK</td></tr>
                            <tr><td>11</td><td>Rhaptyalyani, S.T., M.Eng., Ph.D</td><td>TEKNIK</td></tr>
                            <tr><td>12</td><td>M. A. Ade Saputra, S.T., M.T.</td><td>TEKNIK</td></tr>
                            <tr><td>13</td><td>Ir. Puspa Kurniasari, S.T., M.T.</td><td>TEKNIK</td></tr>
                            <tr><td>14</td><td>Ir. Eva Oktarinasari, S.T., M.T.</td><td>TEKNIK</td></tr>
                            <tr><td>15</td><td>dr. Masayu Syarinta Adenina, M.Biomed</td><td>KEDOKTERAN</td></tr>
                            <tr><td>16</td><td>Masayu Farah Diba, S.Si., M.Biomed</td><td>KEDOKTERAN</td></tr>
                            <tr><td>17</td><td>dr. Bintang Arroyantri Prananjaya, Sp.KJ</td><td>KEDOKTERAN</td></tr>
                            <tr><td>18</td><td>Dr. dr. Dalilah, M.Kes.</td><td>KEDOKTERAN</td></tr>
                            <tr><td>19</td><td>dr. Puji Rizki Suryani, M.Kes.</td><td>KEDOKTERAN</td></tr>
                            <tr><td>20</td><td>Dr. Arjuna Neni Triana, S.TP., M.Si.</td><td>PERTANIAN</td></tr>
                            <tr><td>21</td><td>Dr. Selly Oktarina, S.P., M.Si.</td><td>PERTANIAN</td></tr>
                            <tr><td>22</td><td>Fitra Yosi, S.Pt., M.S., Ph.D</td><td>PERTANIAN</td></tr>
                            <tr><td>23</td><td>Dr. Ade Dwi Sasanti, S.Pi., M.Si.</td><td>PERTANIAN</td></tr>
                            <tr><td>24</td><td>Dr. Astuti Kurnianingsih, S.P., M.Si.</td><td>PERTANIAN</td></tr>
                            <tr><td>25</td><td>Dr. Yosef, M.A.</td><td>KIP</td></tr>
                            <tr><td>26</td><td>Dr. Rahmi Susanti, M.Si.</td><td>KIP</td></tr>
                            <tr><td>27</td><td>Dr. Muhammad Yusup, S.Pd., M.Pd</td><td>KIP</td></tr>
                            <tr><td>28</td><td>Dr. Syarifuddin, S.Pd., M.Pd</td><td>KIP</td></tr>
                            <tr><td>29</td><td>Dr. Fitria Aprilia, M.Pd</td><td>KIP</td></tr>
                            <tr><td>30</td><td>Prof. Dr. Ridhah Taqwa</td><td>ISIP</td></tr>
                            <tr><td>31</td><td>Dr. Dadang Hikmah Purnama, M.Hum</td><td>ISIP</td></tr>
                            <tr><td>32</td><td>Dr. Rudy Kurniawan, S.Th.I., M.Si.</td><td>ISIP</td></tr>
                            <tr><td>33</td><td>Dr. Katriza Imania, M.Si.</td><td>ISIP</td></tr>
                            <tr><td>34</td><td>Rindang Senja Andarini, S.I.Kom., M.I.Kom</td><td>ISIP</td></tr>
                            <tr><td>35</td><td>Alfensi Faruk, S.Si., M.Sc., Ph.D</td><td>MIPA</td></tr>
                            <tr><td>36</td><td>Dr. Erry Koriyanti, S.Si., M.T.</td><td>MIPA</td></tr>
                            <tr><td>37</td><td>Singgih Tri Wardana, S.Si., M.Si.</td><td>MIPA</td></tr>
                            <tr><td>38</td><td>Dr. Riris Aryawati, S.T., M.Si.</td><td>MIPA</td></tr>
                            <tr><td>39</td><td>Dr. Widia Purwaningrum, S.Si., M.Si.</td><td>MIPA</td></tr>
                            <tr><td>40</td><td>Najwa Annuria Fithri, S.Farm., M.Sc., Ph.D</td><td>MIPA</td></tr>
                            <tr><td>41</td><td>Dr. Sutarno, M.T.</td><td>ILKOM</td></tr>
                            <tr><td>42</td><td>Dr. Ali Ibrahim, M.Kom.</td><td>ILKOM</td></tr>
                            <tr><td>43</td><td>Dian Palupi Rini, Ph.D</td><td>ILKOM</td></tr>
                            <tr><td>44</td><td>Endang Lestari, M.Kom.</td><td>ILKOM</td></tr>
                            <tr><td>45</td><td>Alvy Syahrini, M.Kom.</td><td>ILKOM</td></tr>
                            <tr><td>46</td><td>Dr. Novrikasari, S.KM., M.Kes</td><td>KESMAS</td></tr>
                            <tr><td>47</td><td>Dr. Fatmalina Febry, S.KM., M.Si.</td><td>KESMAS</td></tr>
                            <tr><td>48</td><td>Widya Lionita, S.KM., M.Ph</td><td>KESMAS</td></tr>
                            <tr><td>49</td><td>Poppy Fujianti, S.KM., M.Sc.</td><td>KESMAS</td></tr>
                            <tr><td>50</td><td>Inoy Trisnaini, S.KM., M.KL.</td><td>KESMAS</td></tr>
                            <tr><td>51</td><td>Dr. Ir. Mery Hasmeda, M.Agr.</td><td>PASCASARJANA</td></tr>
                            <tr><td>52</td><td>Dr. Dade Jubaedah, S.Pi., M.Si.</td><td>PASCASARJANA</td></tr>
                            <tr><td>53</td><td>Elda Melwita, S.T., M.T., Ph.D.</td><td>PASCASARJANA</td></tr>
                            <tr><td>54</td><td>Prof. Dr. Fakhili Gulo, M.Si</td><td>PASCASARJANA</td></tr>
                        </tbody>

                    </table>
                </div>
                
            </article>

            <article class="box-icon-classic">
                
                <div class="country-tab">
                    <button class="country-links" onclick="openCountry(event, 'SKAMAI')" id="defaultCountry">SK-AMAI</button>
                    <button class="country-links" onclick="openCountry(event, 'SKEMI')">ST-AMAI</button>
                </div>

                <div id="SKAMAI" class="country-content">
                    @include('depan.spmi-siklus-view-module.tabel.tabel-sk-amai')
                </div>

                <div id="SKEMI" class="country-content">
                    @include('depan.spmi-siklus-view-module.tabel.tabel-st-amai')
                </div>

            </article>

            <article class="box-icon-classic">
                <div class="unit-body">
                    <h4 class="box-icon-classic-title">Evaluasi SPMI</h4>
                    <div class="hero-buttons mt-4">
                        <a href="#" target="_blank" class="btn btn-primary">Evaluasi SPMI</a>
                    </div>

                    <hr style="border: 2px solid blue; width: 100%; border-radius: 5px;">

                    <h4 class="box-icon-classic-title">Evaluasi Kurikulum</h4>
                    <div class="hero-buttons mt-4">
                        <a href="#" target="_blank" class="btn btn-primary">Panduan Pengukuran Ketercapaian CPL</a>
                    </div>
                    <div class="hero-buttons mt-4">
                        <a href="#" target="_blank" class="btn btn-primary">Instrumen Pengkuran Ketercapaian CPL</a>
                    </div>

                    <hr style="border: 2px solid blue; width: 100%; border-radius: 5px;">

                    <h4 class="box-icon-classic-title">Laporan dan Rekomendasi Hasil Evaluasi</h4>

                    <div class="container">
                        <div class="row justify-content-center g-4">

                            <div class="hero-buttons mt-4">
                                <a href="#" target="_blank" class="btn btn-primary">Download File *.doc Prodi</a>
                            </div>
                            <div class="hero-buttons mt-4">
                                <a href="{{ route('spmi-siklus-laporan-prodi') }}" target="_blank" class="btn btn-primary">Laporan Hasil Evaluasi Prodi</a>
                            </div>

                        </div>
                    </div>
                </div>
            </article>
    
            

            <article class="box-icon-classic">
                <div class="unit-body">
                    <h4 class="box-icon-classic-title">Outcome-Based Acreditation</h4>
                    <p class="box-icon-classic-text">
                        Yang dimaksud Outcome-based Accreditation adalah, pada akreditasi program studi (APS) berfokus pada ketercapaian capaian pembelajaran lulusan, 
                        pada akreditasi perguruan tinggi (APT) berfokus pada ketercapaian visi, misi, dan tujuan perguruan tinggi <br>
                        Bukan berarti hanya luaran dan outcome penyelenggaraan program studi atau perguruan tinggi saja, Ada penilaian terhadap pemenuhan SN-Dikti yang 
                        menyangkut input dan proses. Bobot penilaian ditetapkan dengan prioritas tertinggi (bobot tertinggi) pada aspek luaran dan capaian (outputs and outcomes) 
                        diikuti aspek proses dan input.
                    </p>
                </div>
            </article>

        </div>
    </div>
</section>