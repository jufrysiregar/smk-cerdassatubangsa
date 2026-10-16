<?php
// Active page detection helper
$current_page = isset($active_page) ? $active_page : '';
?>

<!-- ─── MAIN NAVBAR ──────────────────────────────────────────── -->
<nav class="navbar custom-navbar sticky-top" id="main-navbar" aria-label="Navigasi Utama">
  <div class="container-fluid px-3 px-md-4 px-lg-5 d-flex align-items-center justify-content-between">

    <!-- POJOK KIRI: Logo Sekolah + Nama & Slogan -->
    <div class="navbar-brand-wrapper d-flex align-items-center gap-2 gap-sm-3 m-0 p-0" style="cursor: default; user-select: none;">
      <img src="<?= BASE_URL ?>assets/img/logo/logo.png"
           onerror="this.onerror=null; this.src='<?= BASE_URL ?>src/logos/logo22.png';"
           alt="Logo SMK Cerdas Satu Bangsa"
           class="navbar-brand-logo">
      <div class="d-flex flex-column justify-content-center">
        <span class="brand-school-name">SMK CERDAS SATU BANGSA</span>
        <span class="brand-school-slogan">Siap Bertalenta dan Kerja</span>
      </div>
    </div>

    <!-- POJOK KANAN: Tombol Daftar PPDB + Hamburger -->
    <div class="d-flex align-items-center gap-3 ms-auto">
      <!-- Tombol Daftar PPDB -->
      <a href="<?= BASE_URL ?>ppdb/formulir.php"
         class="btn btn-ppdb-header rounded-pill px-3 py-2 text-nowrap d-inline-flex align-items-center">
        <i class="fas fa-book-open me-2"></i>
        <span class="raindrop-text">
          <span class="drop-char" style="--i:0;">D</span><span class="drop-char" style="--i:1;">a</span><span class="drop-char" style="--i:2;">f</span><span class="drop-char" style="--i:3;">t</span><span class="drop-char" style="--i:4;">a</span><span class="drop-char" style="--i:5;">r</span><span class="drop-space">&nbsp;</span><span class="drop-char" style="--i:7;">P</span><span class="drop-char" style="--i:8;">P</span><span class="drop-char" style="--i:9;">D</span><span class="drop-char" style="--i:10;">B</span><span class="drop-space">&nbsp;</span><span class="drop-char" style="--i:12;">O</span><span class="drop-char" style="--i:13;">n</span><span class="drop-char" style="--i:14;">l</span><span class="drop-char" style="--i:15;">i</span><span class="drop-char" style="--i:16;">n</span><span class="drop-char" style="--i:17;">e</span>
        </span>
      </a>

      <!-- Tombol menu tiga garis -->
      <button id="hamburger-btn"
              class="hamburger-custom border-0 bg-transparent p-0"
              type="button"
              aria-expanded="false"
              aria-label="Buka Menu Navigasi"
              title="Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

  </div><!-- /.container-fluid -->
</nav>
<!-- End Navbar -->

<!-- ─── SIDE PANEL MENU — PREMIUM 3D REDESIGN ─── -->
<div id="side-menu-panel" aria-label="Menu Navigasi" role="dialog" aria-modal="true">

  <!-- ── HEADER dengan background gelap premium ── -->
  <div class="side-panel-header">
    <div class="d-flex align-items-center gap-2" style="user-select:none; -webkit-user-select:none;">
      <div class="sp-logo-ring">
        <img src="<?= BASE_URL ?>assets/img/logo/logo.png"
             onerror="this.onerror=null; this.src='<?= BASE_URL ?>src/logos/logo22.png';"
             alt="Logo">
      </div>
      <div style="line-height:1.25;">
        <div class="sp-school-name">SMK CERDAS SATU BANGSA</div>
        <div class="sp-school-slogan">Siap Bertalenta dan Kerja</div>
      </div>
    </div>
    <button id="side-panel-close" class="side-panel-close-btn" type="button" aria-label="Tutup Menu">
      <i class="fas fa-times"></i>
    </button>
  </div>

  <!-- ── BODY ── -->
  <div class="side-panel-body">
    <nav aria-label="Menu Navigasi">
      <ul class="side-nav-list list-unstyled m-0 p-0">

        <!-- 1. Beranda -->
        <li class="side-nav-item">
          <a class="sp-menu-card <?= ($current_page === 'beranda') ? 'active' : '' ?>" href="<?= BASE_URL ?>index.php">
            <div class="sp-card-icon sp-icon-home">
              <i class="fas fa-home"></i>
            </div>
            <span class="sp-card-title flex-grow-1">Beranda</span>
            <div class="sp-card-arrow"><i class="fas fa-chevron-right"></i></div>
          </a>
        </li>

        <!-- 2. Profil [+] -->
        <li class="side-nav-item has-sub <?= (strpos($current_page, 'profil') === 0) ? 'expanded' : '' ?>">
          <div class="side-nav-row">
            <div class="sp-menu-card flex-grow-1 <?= (strpos($current_page, 'profil') === 0) ? 'active' : '' ?>" style="cursor:pointer;">
              <div class="sp-card-icon sp-icon-profil">
                <i class="fas fa-university"></i>
              </div>
              <span class="sp-card-title flex-grow-1">Profil</span>
              <span class="sp-sub-sign"><?= (strpos($current_page, 'profil') === 0) ? '−' : '+' ?></span>
            </div>
          </div>
          <div class="side-submenu-panel">
            <ul class="list-unstyled mb-0 sp-submenu">
              <li><a class="sp-sub-link <?= ($current_page === 'profil_sejarah') ? 'active' : '' ?>" href="<?= BASE_URL ?>profil/sejarah.php"><i class="fas fa-landmark sp-sub-dot"></i>Sejarah Sekolah</a></li>
              <li><a class="sp-sub-link <?= ($current_page === 'profil_visi_misi') ? 'active' : '' ?>" href="<?= BASE_URL ?>profil/visi-misi.php"><i class="fas fa-star sp-sub-dot"></i>Visi &amp; Misi</a></li>
              <li><a class="sp-sub-link <?= ($current_page === 'profil_struktur') ? 'active' : '' ?>" href="<?= BASE_URL ?>profil/struktur.php"><i class="fas fa-sitemap sp-sub-dot"></i>Struktur Organisasi</a></li>
              <li><a class="sp-sub-link <?= ($current_page === 'profil_fasilitas') ? 'active' : '' ?>" href="<?= BASE_URL ?>profil/fasilitas.php"><i class="fas fa-building sp-sub-dot"></i>Fasilitas</a></li>
              <li><a class="sp-sub-link <?= ($current_page === 'profil_sertifikasi') ? 'active' : '' ?>" href="<?= BASE_URL ?>profil/sertifikasi.php"><i class="fas fa-certificate sp-sub-dot"></i>Akreditasi</a></li>
            </ul>
          </div>
        </li>

        <!-- 3. Program Keahlian [+] -->
        <li class="side-nav-item has-sub <?= (strpos($current_page, 'program') === 0) ? 'expanded' : '' ?>">
          <div class="side-nav-row">
            <div class="sp-menu-card flex-grow-1 <?= (strpos($current_page, 'program') === 0) ? 'active' : '' ?>" style="cursor:pointer;">
              <div class="sp-card-icon sp-icon-program">
                <i class="fas fa-laptop-code"></i>
              </div>
              <span class="sp-card-title flex-grow-1">Program Keahlian</span>
              <span class="sp-sub-sign"><?= (strpos($current_page, 'program') === 0) ? '−' : '+' ?></span>
            </div>
          </div>
          <div class="side-submenu-panel">
            <ul class="list-unstyled mb-0 sp-submenu">
              <li><a class="sp-sub-link <?= ($current_page === 'program_tkj') ? 'active' : '' ?>" href="<?= BASE_URL ?>program/tkj.php"><i class="fas fa-network-wired sp-sub-dot"></i>Teknik Komputer &amp; Jaringan</a></li>
              <li><a class="sp-sub-link <?= ($current_page === 'program_rpl') ? 'active' : '' ?>" href="<?= BASE_URL ?>program/rpl.php"><i class="fas fa-code sp-sub-dot"></i>Rekayasa Perangkat Lunak</a></li>
              <li><a class="sp-sub-link <?= ($current_page === 'program_tav') ? 'active' : '' ?>" href="<?= BASE_URL ?>program/tav.php"><i class="fas fa-tv sp-sub-dot"></i>Teknik Audio Video</a></li>
              <li><a class="sp-sub-link <?= ($current_page === 'program_dkv') ? 'active' : '' ?>" href="<?= BASE_URL ?>program/dkv.php"><i class="fas fa-paint-brush sp-sub-dot"></i>Desain Komunikasi Visual</a></li>
            </ul>
          </div>
        </li>

        <!-- 4. Berita & Artikel -->
        <li class="side-nav-item">
          <a class="sp-menu-card <?= ($current_page === 'berita') ? 'active' : '' ?>" href="<?= BASE_URL ?>berita.php">
            <div class="sp-card-icon sp-icon-berita">
              <i class="fas fa-newspaper"></i>
            </div>
            <span class="sp-card-title flex-grow-1">Berita &amp; Artikel</span>
            <div class="sp-card-arrow"><i class="fas fa-chevron-right"></i></div>
          </a>
        </li>

        <!-- 5. Galeri -->
        <li class="side-nav-item">
          <a class="sp-menu-card <?= ($current_page === 'galeri') ? 'active' : '' ?>" href="<?= BASE_URL ?>galeri.php">
            <div class="sp-card-icon sp-icon-galeri">
              <i class="fas fa-images"></i>
            </div>
            <span class="sp-card-title flex-grow-1">Galeri</span>
            <div class="sp-card-arrow"><i class="fas fa-chevron-right"></i></div>
          </a>
        </li>

        <!-- 6. PPDB [+] -->
        <li class="side-nav-item has-sub <?= (strpos($current_page, 'ppdb') === 0) ? 'expanded' : '' ?>">
          <div class="side-nav-row">
            <div class="sp-menu-card flex-grow-1 <?= (strpos($current_page, 'ppdb') === 0) ? 'active' : '' ?>" style="cursor:pointer;">
              <div class="sp-card-icon sp-icon-ppdb">
                <i class="fas fa-user-plus"></i>
              </div>
              <span class="sp-card-title flex-grow-1">PPDB</span>
              <span class="sp-sub-sign"><?= (strpos($current_page, 'ppdb') === 0) ? '−' : '+' ?></span>
            </div>
          </div>
          <div class="side-submenu-panel">
            <ul class="list-unstyled mb-0 sp-submenu">
              <li><a class="sp-sub-link <?= ($current_page === 'ppdb_informasi' || $current_page === 'ppdb_alur') ? 'active' : '' ?>" href="<?= BASE_URL ?>ppdb/informasi.php"><i class="fas fa-info-circle sp-sub-dot"></i>Informasi &amp; Alur PPDB</a></li>
              <li><a class="sp-sub-link <?= ($current_page === 'ppdb_formulir') ? 'active' : '' ?>" href="<?= BASE_URL ?>ppdb/formulir.php"><i class="fas fa-file-signature sp-sub-dot"></i>Formulir Pendaftaran</a></li>
              <li><a class="sp-sub-link <?= ($current_page === 'ppdb_pengumuman') ? 'active' : '' ?>" href="<?= BASE_URL ?>ppdb/pengumuman.php"><i class="fas fa-bullhorn sp-sub-dot"></i>Pengumuman Hasil</a></li>
            </ul>
          </div>
        </li>

        <!-- 7. Kontak -->
        <li class="side-nav-item">
          <a class="sp-menu-card <?= ($current_page === 'kontak') ? 'active' : '' ?>" href="<?= BASE_URL ?>kontak.php">
            <div class="sp-card-icon sp-icon-kontak">
              <i class="fas fa-headset"></i>
            </div>
            <span class="sp-card-title flex-grow-1">Kontak</span>
            <div class="sp-card-arrow"><i class="fas fa-chevron-right"></i></div>
          </a>
        </li>

        <!-- 8. Alumni & Karir [+] -->
        <li class="side-nav-item has-sub <?= (strpos($current_page, 'alumni') === 0) ? 'expanded' : '' ?>">
          <div class="side-nav-row">
            <div class="sp-menu-card flex-grow-1 <?= (strpos($current_page, 'alumni') === 0) ? 'active' : '' ?>" style="cursor:pointer;">
              <div class="sp-card-icon sp-icon-alumni">
                <i class="fas fa-user-graduate"></i>
              </div>
              <span class="sp-card-title flex-grow-1">Alumni &amp; Karir</span>
              <span class="sp-sub-sign"><?= (strpos($current_page, 'alumni') === 0) ? '−' : '+' ?></span>
            </div>
          </div>
          <div class="side-submenu-panel">
            <ul class="list-unstyled mb-0 sp-submenu">
              <li><a class="sp-sub-link <?= ($current_page === 'alumni_alumni') ? 'active' : '' ?>" href="<?= BASE_URL ?>alumni/alumni.php"><i class="fas fa-users sp-sub-dot"></i>Alumni</a></li>
              <li><a class="sp-sub-link <?= ($current_page === 'alumni_karir') ? 'active' : '' ?>" href="<?= BASE_URL ?>alumni/karir.php"><i class="fas fa-briefcase sp-sub-dot"></i>Pengembangan Karir</a></li>
            </ul>
          </div>
        </li>

      </ul>
    </nav>
  </div><!-- /.side-panel-body -->

  <!-- ── FOOTER ── -->
  <div class="side-panel-footer">
    <a href="<?= BASE_URL ?>ppdb/formulir.php" class="side-btn-ppdb">
      <i class="fas fa-book-open me-2"></i>
      <span>Daftar PPDB Online</span>
      <i class="fas fa-arrow-right ms-auto sp-ppdb-arrow"></i>
    </a>
  </div><!-- /.side-panel-footer -->

</div><!-- /#side-menu-panel -->

<!-- ─── WRAPPER KONTEN WEBSITE (SEMUA KONTEN UTAMA & FOOTER ADA DI DALAM SINI) ─── -->
<div id="page-content-wrapper">
