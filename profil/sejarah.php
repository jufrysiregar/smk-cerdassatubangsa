<?php
require_once __DIR__ . '/../koneksi.php';

$page_title = "Sejarah Sekolah";
$active_page = "profil_sejarah";

include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/navbar.php';
?>

<!-- Header Banner -->
<section class="subpage-header">
  <div class="container text-center">
    <h1 class="subpage-title">Sejarah Sekolah</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom justify-content-center">
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Beranda</a></li>
        <li class="breadcrumb-item"><a href="#">Profil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sejarah</li>
      </ol>
    </nav>
  </div>
</section>

<!-- Content -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center g-5 mb-5">
      <div class="col-lg-6">
        <h2 class="section-title text-dark">Perjalanan Pendidikan Sekolah</h2>
        <p class="text-muted">
          SMK Cerdas Satu Bangsa didirikan pada tanggal 12 Mei 2005 oleh Yayasan Pendidikan Cerdas Bangsa dengan tekad menghadirkan lembaga pendidikan kejuruan yang tidak hanya membekali siswa dengan ilmu pengetahuan, namun juga keterampilan teknis aplikatif yang relevan dengan tuntutan zaman.
        </p>
        <p class="text-muted">
          Berawal dari sebuah gedung sederhana dengan 2 jurusan awal (TKJ dan TAV) serta jumlah siswa 60 orang, sekolah ini terus berkembang secara pesat berkat kepercayaan masyarakat, kerja keras jajaran pendidik, dan dukungan penuh dari industri mitra.
        </p>
        <p class="text-muted">
          Pada tahun 2015, sekolah resmi menambah jurusan Rekayasa Perangkat Lunak (RPL) dan Desain Komunikasi Visual (DKV). Memasuki tahun 2022, SMK Cerdas Satu Bangsa meraih predikat resmi sebagai <strong>Sekolah Pusat Keunggulan (Center of Excellence)</strong> dari Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.
        </p>
      </div>
      <div class="col-lg-6">
        <img src="<?= BASE_URL ?>assets/img/sekolah/sejarah.jpg" alt="Sejarah SMK Cerdas Satu Bangsa" class="img-fluid rounded-4 shadow-lg">
      </div>
    </div>

    <!-- Milestones -->
    <div class="my-5 py-4 bg-light rounded-4 p-4 p-md-5">
      <div class="text-center mb-5">
        <h3 class="fw-bold">Tonggak Sejarah &amp; Rekam Jejak Prestasi</h3>
        <p class="text-muted">Perjalanan panjang tumbuh dan berkembang bersama masyarakat</p>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="p-4 bg-white rounded-3 shadow-sm h-100 border-start border-4 border-emerald" style="border-left-color: #059669 !important;">
            <div class="h3 fw-bold text-emerald mb-2">2005</div>
            <h5 class="fw-bold">Pendirian Sekolah</h5>
            <p class="text-muted small mb-0">Resmi berdiri dengan izin operasional Dinas Pendidikan dan mengoperasikan jurusan TKJ dan TAV.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="p-4 bg-white rounded-3 shadow-sm h-100 border-start border-4 border-primary">
            <div class="h3 fw-bold text-primary mb-2">2012</div>
            <h5 class="fw-bold">Akreditasi "A" Unggul</h5>
            <p class="text-muted small mb-0">Mendapatkan sertifikasi Akreditasi A dari Badan Akreditasi Nasional Sekolah/Madrasah (BAN-SM).</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="p-4 bg-white rounded-3 shadow-sm h-100 border-start border-4 border-warning">
            <div class="h3 fw-bold text-warning mb-2">2022</div>
            <h5 class="fw-bold">SMK Pusat Keunggulan</h5>
            <p class="text-muted small mb-0">Ditetapkan sebagai SMK PK sektor Teknologi Informasi dan Komunikasi dengan fasilitas laboratorium modern.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>
