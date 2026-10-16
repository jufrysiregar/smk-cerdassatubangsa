<?php
require_once __DIR__ . '/koneksi.php';

$page_title = "Beranda";
$active_page = "beranda";

// ── Ambil 3 berita terbaru secara dinamis dari sumber data master ──
require_once __DIR__ . '/data/berita-data.php';
$berita_terbaru = array_slice($semua_berita, 0, 3);

// ── Ambil data kepala sekolah (sinkron dengan Struktur Organisasi) ──
$kepsek_query = query_db("SELECT name FROM users WHERE role = 'kepala_sekolah' AND is_active = 1 LIMIT 1");
$nama_kepsek = !empty($kepsek_query[0]['name']) ? $kepsek_query[0]['name'] : 'H. Drs. Muhtadin Magfirotun Innas, M. Pd';

include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/navbar.php';
?>

<!-- Hero Section -->
<section class="hero-section text-center d-flex align-items-center">
  <div class="container py-4">
    <div class="row justify-content-center">
      <div class="col-lg-10 col-xl-9">
        <h1 class="hero-title text-white" data-aos="fade-up" data-aos-delay="150">
          SMK CERDAS SATU BANGSA
        </h1>
        <p class="hero-subtitle text-light mb-0" data-aos="fade-up" data-aos-delay="250">
          Mentransformasi potensi bangsa melalui pendidikan berbasis teknologi yang cerdas, aman, dan terintegrasi untuk mencetak generasi terbaik bagi masa depan Indonesia.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Sambutan Kepala Sekolah -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5 text-center" data-aos="fade-right">
        <div class="position-relative d-inline-block img-hover-zoom" style="max-width: 380px; width: 100%;">
          <img src="<?= BASE_URL ?>assets/img/organisasi/kepsek.jpg"
               alt="<?= htmlspecialchars($nama_kepsek) ?> - Kepala Sekolah"
               class="img-fluid rounded-4 shadow-md w-100"
               style="max-height: 460px; object-fit: cover;">
          <div class="bg-emerald text-white text-center py-2 px-3 rounded-3 shadow position-absolute"
               style="background: #059669; bottom: 14px; left: 14px; right: 14px;">
            <div class="fw-bold font-poppins text-white" style="font-size: 0.92rem; line-height: 1.3;">
              <?= htmlspecialchars($nama_kepsek) ?>
            </div>
            <div class="text-white small mt-1" style="font-size: 0.8rem; font-weight: 500; opacity: 0.95;">
              Kepala Sekolah SMK Cerdas Satu Bangsa
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7" data-aos="fade-left" data-aos-delay="100">
        <span class="section-subtitle">Sambutan Kepala Sekolah</span>
        <h2 class="section-title">Selamat Datang di Portal Resmi SMK Cerdas Satu Bangsa</h2>
        <div class="title-line-left"></div>
        <p class="lead text-dark font-poppins fw-medium">
          "Pendidikan vokasi adalah kunci pembuka pintu masa depan emas bangsa indonesia."
        </p>
        <p class="text-muted">
          Assalamu'alaikum Warahmatullahi Wabarakatuh. Selamat datang di portal resmi SMK Cerdas Satu Bangsa. Kami berkomitmen menyelenggarakan pendidikan kejuruan yang responsif terhadap dinamika industri modern 4.0.
        </p>
        <p class="text-muted">
          Dengan fasilitas laboratorium terakreditasi, kurikulum berbasis project (PBL), serta sinergi erat dengan lebih dari 50 perusahaan mitra nasional, kami memastikan setiap lulusan memiliki kompetensi teknis unggul dan integritas spiritual yang kokoh.
        </p>
        <a href="<?= BASE_URL ?>profil/visi-misi.php" class="btn btn-outline-custom mt-2">
          Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Program Keahlian Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center max-w-700 mx-auto mb-5">
      <h2 class="section-title">Program Jurusan Sekolah</h2>
      <p class="text-muted">Kami menyediakan 4 program keahlian yang disesuaikan dengan kebutuhan pasar kerja dan perkembangan teknologi terkini.</p>
    </div>

    <div class="row g-4">
      <!-- TKJ -->
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
        <div class="dept-modern-card h-100 d-flex flex-column">
          <!-- Card Header & Floating Emblem -->
          <div class="dept-card-header">
            <span class="dept-pill-tag">Unggulan</span>
            <div class="dept-badge-floating">
              <img src="<?= BASE_URL ?>assets/img/smk/TKJ.jpg" alt="Logo Jurusan TKJ">
            </div>
          </div>
          <!-- Card Body -->
          <div class="dept-card-body d-flex flex-column flex-grow-1">
            <div class="d-flex align-items-baseline justify-content-between mb-1">
              <h3 class="dept-code mb-0">TKJ</h3>
              <span class="dept-num">01</span>
            </div>
            <div class="dept-name mb-3">Teknik Komputer &amp; Jaringan</div>
            <p class="dept-desc flex-grow-1">
              Fokus pada administrasi jaringan server, Mikrotik, Cisco, Cloud Computing, dan Cyber Security.
            </p>
            <!-- Card Footer (Sudut Kanan Bawah) -->
            <div class="dept-card-footer d-flex justify-content-end align-items-center pt-3">
              <a href="<?= BASE_URL ?>program/tkj.php" class="dept-action-btn">
                <span>Detail Jurusan</span>
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- RPL -->
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
        <div class="dept-modern-card h-100 d-flex flex-column">
          <!-- Card Header & Floating Emblem -->
          <div class="dept-card-header">
            <span class="dept-pill-tag">Unggulan</span>
            <div class="dept-badge-floating">
              <img src="<?= BASE_URL ?>assets/img/smk/RPL.jpg" alt="Logo Jurusan RPL">
            </div>
          </div>
          <!-- Card Body -->
          <div class="dept-card-body d-flex flex-column flex-grow-1">
            <div class="d-flex align-items-baseline justify-content-between mb-1">
              <h3 class="dept-code mb-0">RPL</h3>
              <span class="dept-num">02</span>
            </div>
            <div class="dept-name mb-3">Rekayasa Perangkat Lunak</div>
            <p class="dept-desc flex-grow-1">
              Menguasai pemograman web, pengembangan aplikasi mobile, database admin, dan UI/UX design.
            </p>
            <!-- Card Footer (Sudut Kanan Bawah) -->
            <div class="dept-card-footer d-flex justify-content-end align-items-center pt-3">
              <a href="<?= BASE_URL ?>program/rpl.php" class="dept-action-btn">
                <span>Detail Jurusan</span>
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- TAV -->
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
        <div class="dept-modern-card h-100 d-flex flex-column">
          <!-- Card Header & Floating Emblem -->
          <div class="dept-card-header">
            <span class="dept-pill-tag">Unggulan</span>
            <div class="dept-badge-floating">
              <img src="<?= BASE_URL ?>assets/img/smk/TAV.jpg" alt="Logo Jurusan TAV">
            </div>
          </div>
          <!-- Card Body -->
          <div class="dept-card-body d-flex flex-column flex-grow-1">
            <div class="d-flex align-items-baseline justify-content-between mb-1">
              <h3 class="dept-code mb-0">TAV</h3>
              <span class="dept-num">03</span>
            </div>
            <div class="dept-name mb-3">Teknik Audio Video</div>
            <p class="dept-desc flex-grow-1">
              Mempelajari sistem akustik, broadcasting, perekayasaan audio digital, dan perawatan peralatan audio video.
            </p>
            <!-- Card Footer (Sudut Kanan Bawah) -->
            <div class="dept-card-footer d-flex justify-content-end align-items-center pt-3">
              <a href="<?= BASE_URL ?>program/tav.php" class="dept-action-btn">
                <span>Detail Jurusan</span>
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- DKV -->
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
        <div class="dept-modern-card h-100 d-flex flex-column">
          <!-- Card Header & Floating Emblem -->
          <div class="dept-card-header">
            <span class="dept-pill-tag">Unggulan</span>
            <div class="dept-badge-floating">
              <img src="<?= BASE_URL ?>assets/img/smk/DKV.jpg" alt="Logo Jurusan DKV">
            </div>
          </div>
          <!-- Card Body -->
          <div class="dept-card-body d-flex flex-column flex-grow-1">
            <div class="d-flex align-items-baseline justify-content-between mb-1">
              <h3 class="dept-code mb-0">DKV</h3>
              <span class="dept-num">04</span>
            </div>
            <div class="dept-name mb-3">Desain Komunikasi Visual</div>
            <p class="dept-desc flex-grow-1">
              Mencetak desainer grafis, videografer, fotografer profesional, animator 3D, dan content creator.
            </p>
            <!-- Card Footer (Sudut Kanan Bawah) -->
            <div class="dept-card-footer d-flex justify-content-end align-items-center pt-3">
              <a href="<?= BASE_URL ?>program/dkv.php" class="dept-action-btn">
                <span>Detail Jurusan</span>
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Berita Terbaru Section -->
<section class="py-5 beranda-berita-section">
  <div class="container">
    <div class="d-flex flex-wrap align-items-end justify-content-between mb-4">
      <div>
        <h2 class="section-title mb-0">Berita &amp; Informasi Sekolah</h2>
      </div>
      <a href="<?= BASE_URL ?>berita.php" class="btn btn-outline-custom mt-3 mt-md-0">
        Lihat Semua Berita <i class="fas fa-arrow-right ms-2"></i>
      </a>
    </div>

    <div class="row g-4">
      <?php foreach ($berita_terbaru as $idx => $b): ?>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?php echo $idx * 100; ?>">
        <div class="card-custom">
          <div class="card-img-wrapper">
            <span class="badge-category"><?php echo $b['kategori']; ?></span>
            <?php if ($idx === 0): ?>
              <span class="badge-terbaru">Terbaru</span>
            <?php endif; ?>
            <img src="<?php echo $b['gambar']; ?>" alt="<?php echo $b['judul']; ?>">
          </div>
          <div class="p-4">
            <div class="text-muted small mb-2">
              <i class="far fa-calendar-alt me-1 text-emerald"></i> <?php echo $b['tanggal']; ?>
              <span class="mx-2">•</span>
              <i class="far fa-user me-1 text-emerald"></i> <?php echo $b['penulis']; ?>
            </div>
            <h5 class="fw-bold mb-3 text-dark">
                <?php echo $b['judul']; ?>
            </h5>
            <p class="beranda-berita-ringkasan">
              <?php
                $ringkasan = $b['ringkasan'];
                $batas     = 120;
                if (mb_strlen($ringkasan) > $batas):
                  echo htmlspecialchars(mb_substr($ringkasan, 0, $batas)) . '... ';
                  echo '<a href="' . BASE_URL . 'berita-detail.php?id=' . $b['id'] . '" class="beranda-baca-link">Baca Selengkapnya</a>';
                else:
                  echo htmlspecialchars($ringkasan);
                endif;
              ?>
            </p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Highlight Sekolah Kami (Media-Driven Cards Section) -->
<section class="py-5 stats-slider-section position-relative">
  <div class="container position-relative" style="z-index: 2;">
    <div class="text-center max-w-700 mx-auto mb-4" data-aos="fade-up">
      <h2 class="media-highlight-title mb-3">Highlight Sekolah Kami</h2>
      <p class="media-highlight-desc mb-0">
        Bukti nyata komitmen SMK Cerdas Satu Bangsa dalam menghadirkan ekosistem pendidikan vokasi berkualitas, terakreditasi, dan terserap luas di industri modern.
      </p>
    </div>

    <!-- Slider Wrapper with Side Nav Buttons -->
    <div class="stats-slider-wrapper position-relative d-flex align-items-center">
      <!-- Tombol Navigasi Kiri (<) -->
      <button id="stats-prev-btn" class="stats-nav-btn stats-nav-prev" type="button" aria-label="Sebelumnya" title="Geser ke Kiri" disabled>
        <i class="fas fa-chevron-left"></i>
      </button>

      <!-- Carousel Slider Track -->
      <div class="stats-slider-container flex-grow-1" id="stats-slider-track">
        <!-- 1. Siswa Aktif (Statis A-01.jpg) -->
        <div class="stats-slide-item">
          <div class="media-stat-card">
            <div class="media-stat-img-wrapper">
              <img src="<?= BASE_URL ?>assets/img/highlight/A-01.jpg" alt="Siswa Aktif SMK Cerdas Satu Bangsa" class="media-stat-img active" loading="lazy">
            </div>
            <div class="media-stat-overlay"></div>
            <div class="media-stat-content">
              <div class="stat-number media-stat-num">1,250+</div>
              <div class="media-stat-label">Siswa Aktif</div>
            </div>
          </div>
        </div>

        <!-- 2. Alumni Tersebar (Statis B-01.jpg) -->
        <div class="stats-slide-item">
          <div class="media-stat-card">
            <div class="media-stat-img-wrapper">
              <img src="<?= BASE_URL ?>assets/img/highlight/B-01.jpg" alt="Alumni Tersebar SMK Cerdas Satu Bangsa" class="media-stat-img active" loading="lazy">
            </div>
            <div class="media-stat-overlay"></div>
            <div class="media-stat-content">
              <div class="stat-number media-stat-num">3,400+</div>
              <div class="media-stat-label">Alumni Tersebar</div>
            </div>
          </div>
        </div>

        <!-- 3. Tingkat Kebekerjaan (Statis C-01.jpg) -->
        <div class="stats-slide-item">
          <div class="media-stat-card">
            <div class="media-stat-img-wrapper">
              <img src="<?= BASE_URL ?>assets/img/highlight/C-01.jpg" alt="Tingkat Kebekerjaan SMK Cerdas Satu Bangsa" class="media-stat-img active" loading="lazy">
            </div>
            <div class="media-stat-overlay"></div>
            <div class="media-stat-content">
              <div class="stat-number media-stat-num">98%</div>
              <div class="media-stat-label">Tingkat Kebekerjaan</div>
            </div>
          </div>
        </div>

        <!-- 4. Fasilitas (Slideshow D-01.jpg - D-04.jpg setiap 3 detik) -->
        <div class="stats-slide-item">
          <div class="media-stat-card">
            <div class="media-stat-img-wrapper media-slideshow" data-interval="3000">
              <img src="<?= BASE_URL ?>assets/img/highlight/D-01.jpg" alt="Fasilitas 1" class="media-stat-img active" loading="lazy">
              <img src="<?= BASE_URL ?>assets/img/highlight/D-02.jpg" alt="Fasilitas 2" class="media-stat-img" loading="lazy">
              <img src="<?= BASE_URL ?>assets/img/highlight/D-03.jpg" alt="Fasilitas 3" class="media-stat-img" loading="lazy">
              <img src="<?= BASE_URL ?>assets/img/highlight/D-04.jpg" alt="Fasilitas 4" class="media-stat-img" loading="lazy">
              <div class="slideshow-indicators" aria-hidden="true">
                <span class="indicator-bar active"></span>
                <span class="indicator-bar"></span>
                <span class="indicator-bar"></span>
                <span class="indicator-bar"></span>
              </div>
            </div>
            <div class="media-stat-overlay"></div>
            <div class="media-stat-content">
              <div class="stat-number media-stat-num">5+</div>
              <div class="media-stat-label">Fasilitas</div>
            </div>
          </div>
        </div>

        <!-- 5. Ekstrakulikuler (Statis E-01.jpg) -->
        <div class="stats-slide-item">
          <div class="media-stat-card">
            <div class="media-stat-img-wrapper">
              <img src="<?= BASE_URL ?>assets/img/highlight/E-01.jpg" alt="Ekstrakulikuler SMK Cerdas Satu Bangsa" class="media-stat-img active" loading="lazy">
            </div>
            <div class="media-stat-overlay"></div>
            <div class="media-stat-content">
              <div class="stat-number media-stat-num">10+</div>
              <div class="media-stat-label">Ekstrakulikuler</div>
            </div>
          </div>
        </div>

        <!-- 6. Prestasi & Olimpiade (Slideshow F-01.jpg - F-03.jpg setiap 3 detik) -->
        <div class="stats-slide-item">
          <div class="media-stat-card">
            <div class="media-stat-img-wrapper media-slideshow" data-interval="3000">
              <img src="<?= BASE_URL ?>assets/img/highlight/F-01.jpg" alt="Prestasi 1" class="media-stat-img active" loading="lazy">
              <img src="<?= BASE_URL ?>assets/img/highlight/F-02.jpg" alt="Prestasi 2" class="media-stat-img" loading="lazy">
              <img src="<?= BASE_URL ?>assets/img/highlight/F-03.jpg" alt="Prestasi 3" class="media-stat-img" loading="lazy">
              <div class="slideshow-indicators" aria-hidden="true">
                <span class="indicator-bar active"></span>
                <span class="indicator-bar"></span>
                <span class="indicator-bar"></span>
              </div>
            </div>
            <div class="media-stat-overlay"></div>
            <div class="media-stat-content">
              <div class="stat-number media-stat-num">15+</div>
              <div class="media-stat-label">Prestasi &amp; Olimpiade</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Tombol Navigasi Kanan (>) -->
      <button id="stats-next-btn" class="stats-nav-btn stats-nav-next" type="button" aria-label="Berikutnya" title="Geser ke Kanan">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<!-- Pop-up Brosur PPDB -->
<div id="brosur-ppdb-modal" class="brosur-modal" role="dialog" aria-modal="true" aria-label="Brosur PPDB 2026/2027">
  <div class="brosur-modal-content">
    <div class="brosur-modal-toolbar">
      <button type="button" id="brosur-modal-close" class="brosur-modal-close" aria-label="Tutup brosur" title="Tutup">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <img src="<?= BASE_URL ?>assets/img/brosur/2026.jpg"
         alt="Brosur PPDB SMK Cerdas Satu Bangsa Tahun 2026/2027">
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const modal = document.getElementById('brosur-ppdb-modal');
  const closeButton = document.getElementById('brosur-modal-close');
  if (!modal || !closeButton) return;

  // Lepaskan dari pembungkus halaman agar position: fixed dan scrollbar
  // benar-benar memakai viewport browser, bukan area konten beranda.
  if (modal.parentElement !== document.body) {
    document.body.appendChild(modal);
  }

  document.body.classList.add('brosur-modal-open');

  function closeBrosur() {
    document.body.classList.remove('brosur-modal-open');
    modal.classList.add('is-closing');
    window.setTimeout(function () { modal.remove(); }, 180);
  }

  closeButton.addEventListener('click', closeBrosur);
  modal.addEventListener('click', function (event) {
    if (event.target === modal) closeBrosur();
  });
  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') closeBrosur();
  });
});
</script>

<?php include __DIR__ . '/partials/footer.php'; ?>
