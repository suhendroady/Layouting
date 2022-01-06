<?php
if (!isset($_GET['page'])) : ?>

    <h1 class="mt-5 ml-3 text-center">Ini adalah Web Blog ku Pertama!</h1>
    <p class="ml-3 text-center">Selamat datang di web Programming XII RPL</p>

<?php
elseif ($_GET['page'] == 'profil') : ?>

    <h1 class="text-center">My Profile!</h1>
    <div class="card mx-auto my-3" style="width: 100%">
        <img src="assets/img/potoku.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
            <h5 class="card-title">Suhendro Ady N., S.Kom</h5>
            <p class="card-text">
                Pekanbaru, 13 Juli **** <br />
                Jl. Sentosa Blok C. 02 <br />
                Jurusan Rekayasa Perangkat Lunak
            </p>
        </div>
    </div>

<?php elseif ($_GET['page'] == 'tentang') : ?>

    <div class="card mt-3 mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="assets/img/kunjungan_bapak_januar.jpg" class="img-fluid mt-2" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Kunjungan Pendamping dari Makassar</h5>
                    <p class="card-text">Kunjungan dari Balai Besar Pengembangan Penjaminan Mutu
                        Pendidikan Vokasi Gowa, Makassar yang di wakili oleh bapak
                        Januar.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 days ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3 mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="assets/img/jumat_bersama.jpg" class="img-fluid mt-2" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Jumat Bersama Motivator</h5>
                    <p class="card-text">Kunjungan dari Balai Besar Pengembangan Penjaminan Mutu
                        Pendidikan Vokasi Gowa, Makassar yang di wakili oleh bapak
                        Januar.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 days ago</small></p>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>