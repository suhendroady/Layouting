<!-- ----------- Bagian Navbar ---------- -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="#">SMK MUDA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <?php $page = isset($_GET['page']) ? $_GET['page'] : '';
            echo $page == '' ? '<li class="nav-item active">' : '<li class="nav-item">' ?>
            <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
            </li>

            <?php echo $page == 'profil' ? '<li class="nav-item active">' : '<li class="nav-item">' ?>
            <a class="nav-link" href="index.php?page=profil">Profil</a>
            </li>


            <?php echo $page == 'tentang' ? '<li class="nav-item active">' : '<li class="nav-item">' ?>
            <a class="nav-link" href="index.php?page=tentang">Tentang</a>
            </li>
        </ul>
    </div>
</nav>
<!-- --------------- Akhir Navbar -------------- -->