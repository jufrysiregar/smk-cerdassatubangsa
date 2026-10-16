<?php
require_once __DIR__ . '/koneksi.php';

$page_title = "Galeri Kegiatan & Fasilitas";
$active_page = "galeri";

// Diurutkan terbaru ke terlama
$galeri = [
    [
        'judul'          => 'Penataan Ulang (Revitalisasi) Area Parkir Sekolah',
        'kategori'       => 'kegiatan',
        'kategori_label' => 'Kegiatan Sekolah',
        'gambar'         => BASE_URL . 'assets/img/galeri/G-12.jpg',
        'tanggal'        => '13 Oktober 2026'
    ],
    [
        'judul'          => 'Juara Lomba Menyanyi di Grand Hotel Unimara Jakarta oleh Gisella Hartono',
        'kategori'       => 'prestasi',
        'kategori_label' => 'Prestasi',
        'gambar'         => BASE_URL . 'assets/img/galeri/G-4.jpg',
        'tanggal'        => '08 Desember 2025'
    ],
    [
        'judul'          => 'Kegiatan Siswa/i TKJ Sedang Merakit Robotic',
        'kategori'       => 'praktikum',
        'kategori_label' => 'KBM',
        'gambar'         => BASE_URL . 'assets/img/galeri/G-7.jpg',
        'tanggal'        => '23 Juli 2025'
    ],
    [
        'judul'          => 'Kebersihan Secara Rutin Tiap Hari Jumat Demi Kebersihan dan Kenyamanan Bersama',
        'kategori'       => 'kegiatan',
        'kategori_label' => 'Kegiatan Sekolah',
        'gambar'         => BASE_URL . 'assets/img/galeri/G-5.jpg',
        'tanggal'        => '19 September 2025'
    ],
    [
        'judul'          => 'Kegiatan Siswa/i RPL dalam Menguasai Dunia Pemrograman',
        'kategori'       => 'praktikum',
        'kategori_label' => 'KBM',
        'gambar'         => BASE_URL . 'assets/img/galeri/G-8.jpg',
        'tanggal'        => '18 Mei 2025'
    ],
    [
        'judul'          => 'Juara 1 Lomba Cerdas Cermat Tingkat Nasional oleh Randy Prayuda J.',
        'kategori'       => 'prestasi',
        'kategori_label' => 'Prestasi',
        'gambar'         => BASE_URL . 'assets/img/galeri/G-2.jpg',
        'tanggal'        => '16 April 2025'
    ],
    [
        'judul'          => 'Kegiatan Siswa/i DKV di Dalam Ruangan Praktikum',
        'kategori'       => 'praktikum',
        'kategori_label' => 'KBM',
        'gambar'         => BASE_URL . 'assets/img/galeri/G-10.jpg',
        'tanggal'        => '18 Maret 2025'
    ],
    [
        'judul'          => 'Kegiatan Siswa/i TAV di Dalam Ruangan Praktikum',
        'kategori'       => 'praktikum',
        'kategori_label' => 'KBM',
        'gambar'         => BASE_URL . 'assets/img/galeri/G-9.jpg',
        'tanggal'        => '04 Februari 2025'
    ],
    [
        'judul'          => 'Kegiatan Belajar dalam Ruangan dengan Native Speaker',
        'kategori'       => 'praktikum',
        'kategori_label' => 'KBM',
        'gambar'         => BASE_URL . 'assets/img/galeri/G-11.jpg',
        'tanggal'        => '17 September 2024'
    ],
    [
        'judul'          => 'Tim Pramuka Juara Lomba Pioneering dan Morse Nasional',
        'kategori'       => 'prestasi',
        'kategori_label' => 'Prestasi',
        'gambar'         => BASE_URL . 'assets/img/galeri/G-1.jpg',
        'tanggal'        => '01 Juli 2024'
    ],
    [
        'judul'          => 'Juara 2 Lomba Modeling Tingkat Asean oleh Angga Kenneth Tanudra',
        'kategori'       => 'prestasi',
        'kategori_label' => 'Prestasi',
        'gambar'         => BASE_URL . 'assets/img/galeri/G-3.jpg',
        'tanggal'        => '21 April 2024'
    ],
    [
        'judul'          => 'Kunjungan PT Unilever ke Sekolah',
        'kategori'       => 'kegiatan',
        'kategori_label' => 'Kegiatan Sekolah',
        'gambar'         => BASE_URL . 'assets/img/galeri/G-6.jpg',
        'tanggal'        => '05 Maret 2024'
    ],
];

// Warna badge per kategori
$badge_color = [
    'prestasi'  => ['bg' => 'rgba(234,179,8,0.12)',  'color' => '#b45309', 'icon' => 'fa-trophy'],
    'kegiatan'  => ['bg' => 'rgba(59,130,246,0.12)', 'color' => '#1d4ed8', 'icon' => 'fa-users'],
    'praktikum' => ['bg' => 'rgba(5,150,105,0.12)',  'color' => '#059669', 'icon' => 'fa-book-open'],
];

include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/navbar.php';
?>
<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/berita.css">

<!-- Header Banner -->
<section class="subpage-header">
  <div class="container text-center">
    <h1 class="subpage-title">Galeri Dokumentasi</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom justify-content-center">
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Beranda</a></li>
        <li class="breadcrumb-item active" aria-current="page">Galeri</li>
      </ol>
    </nav>
  </div>
</section>

<section class="galeri-section py-5">
  <div class="container">

    <!-- Filter Buttons -->
    <div class="gallery-filter-panel mb-5" role="tablist" aria-label="Filter galeri">
      <button type="button" class="gallery-filter-btn active" data-filter="all" role="tab" aria-selected="true">
        <i class="fas fa-images"></i><span>Semua Foto</span>
      </button>
      <button type="button" class="gallery-filter-btn" data-filter="kegiatan" role="tab" aria-selected="false">
        <i class="fas fa-users"></i><span>Kegiatan Sekolah</span>
      </button>
      <button type="button" class="gallery-filter-btn" data-filter="praktikum" role="tab" aria-selected="false">
        <i class="fas fa-book-open"></i><span>KBM</span>
      </button>
      <button type="button" class="gallery-filter-btn" data-filter="prestasi" role="tab" aria-selected="false">
        <i class="fas fa-trophy"></i><span>Prestasi &amp; Lomba</span>
      </button>
    </div>

    <!-- Grid Gallery -->
    <div class="row g-4" id="gallery-grid">
      <?php foreach ($galeri as $g):
        $bc = $badge_color[$g['kategori']] ?? $badge_color['kegiatan'];
      ?>
      <div class="col-sm-6 col-lg-3 gallery-item" data-category="<?= $g['kategori'] ?>">
        <div class="galeri-card h-100">

          <!-- Foto -->
          <div class="galeri-card__img">
            <img src="<?= $g['gambar'] ?>" alt="<?= htmlspecialchars($g['judul']) ?>" loading="lazy">
            <!-- overlay on hover -->
            <div class="galeri-card__overlay"></div>
          </div>

          <!-- Info -->
          <div class="galeri-card__body">
            <span class="galeri-card__badge" style="background:<?= $bc['bg'] ?>; color:<?= $bc['color'] ?>;">
              <i class="fas <?= $bc['icon'] ?>"></i> <?= htmlspecialchars($g['kategori_label']) ?>
            </span>
            <h6 class="galeri-card__title"><?= htmlspecialchars($g['judul']) ?></h6>
            <span class="galeri-card__date">
              <i class="far fa-calendar-alt"></i> <?= htmlspecialchars($g['tanggal']) ?>
            </span>
          </div>

        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Pagination Galeri -->
    <div class="pagination-wrapper" id="galeri-pagination"></div>

  </div>
</section>

<style>
/* ── Section ── */
.galeri-section { background: #f1f5f9; }

/* ── Filter Panel ── */
.gallery-filter-panel {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: 8px;
  width: fit-content;
  max-width: 100%;
  margin-inline: auto;
  padding: 8px;
  border: 1px solid #e2e8f0;
  border-radius: 18px;
  background: #ffffff;
  box-shadow: 0 4px 20px rgba(15,23,42,0.07);
}

.gallery-filter-btn {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  min-height: 40px;
  padding: 0 16px;
  border: 1.5px solid transparent;
  border-radius: 12px;
  background: transparent;
  color: #64748b;
  font-family: 'Poppins', sans-serif;
  font-size: 0.80rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.22s ease;
}

.gallery-filter-btn i { font-size: 0.82rem; color: #059669; transition: color 0.22s ease; }

.gallery-filter-btn:hover {
  background: #f0fdf4;
  border-color: #a7f3d0;
  color: #047857;
}

.gallery-filter-btn.active {
  background: linear-gradient(135deg, #059669, #0d9488);
  border-color: transparent;
  color: #ffffff;
  box-shadow: 0 6px 16px rgba(5,150,105,0.28);
}

.gallery-filter-btn.active i { color: #d1fae5; }

@media (max-width: 575px) {
  .gallery-filter-panel { width: 100%; padding: 6px; }
  .gallery-filter-btn { flex: 1 1 calc(50% - 8px); justify-content: center; font-size: 0.74rem; }
}

/* ── Card ── */
.galeri-card {
  background: #ffffff;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 2px 14px rgba(15,23,42,0.07);
  transition: transform 0.32s cubic-bezier(0.34,1.56,0.64,1), box-shadow 0.32s ease;
  display: flex;
  flex-direction: column;
  height: 100%;
}

.galeri-card:hover {
  transform: translateY(-7px);
  box-shadow: 0 20px 40px rgba(15,23,42,0.12);
}

/* Foto */
.galeri-card__img {
  position: relative;
  width: 100%;
  aspect-ratio: 4 / 3;
  overflow: hidden;
  background: #e2e8f0;
}

.galeri-card__img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.5s ease;
}

.galeri-card:hover .galeri-card__img img {
  transform: scale(1.07);
}

/* Overlay */
.galeri-card__overlay {
  position: absolute;
  inset: 0;
  background: rgba(15,23,42,0.20);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.galeri-card:hover .galeri-card__overlay {
  opacity: 1;
}

/* Body */
.galeri-card__body {
  padding: 14px 16px 16px;
  display: flex;
  flex-direction: column;
  gap: 7px;
}

/* Badge */
.galeri-card__badge {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 0.68rem;
  font-weight: 700;
  font-family: 'Poppins', sans-serif;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: 3px 10px;
  border-radius: 20px;
  width: fit-content;
}

/* Judul */
.galeri-card__title {
  font-family: 'Poppins', sans-serif;
  font-size: 0.845rem;
  font-weight: 700;
  color: #0f172a;
  line-height: 1.45;
  margin: 0;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

/* Tanggal */
.galeri-card__date {
  font-size: 0.75rem;
  color: #94a3b8;
  display: flex;
  align-items: center;
  gap: 5px;
}

.galeri-card__date i { color: #059669; }

/* Hidden untuk filter JS */
.gallery-item.hidden {
  display: none !important;
}
</style>

<script>
(function() {
  const PER_PAGE   = 8;
  const allItems   = Array.from(document.querySelectorAll('.gallery-item'));
  const pgWrap     = document.getElementById('galeri-pagination');
  let current      = 1;
  let activeFilter = 'all';

  function visibleItems() {
    return allItems.filter(el =>
      activeFilter === 'all' || el.dataset.category === activeFilter
    );
  }

  function totalPages() { return Math.ceil(visibleItems().length / PER_PAGE); }

  function render(page) {
    current = page;
    const visible = visibleItems();
    const start   = (page - 1) * PER_PAGE;
    const end     = start + PER_PAGE;
    allItems.forEach(el => { el.style.display = 'none'; });
    visible.forEach((el, i) => {
      el.style.display = (i >= start && i < end) ? '' : 'none';
    });
    renderPagination();
  }

  function renderPagination() {
    const total = totalPages();
    if (total <= 1) { pgWrap.innerHTML = ''; return; }
    pgWrap.innerHTML =
      '<div class="pagination-bar">' +
        '<button class="pg-btn pg-prev" onclick="window.__galeriPage(' + (current - 1) + ')" ' + (current === 1 ? 'disabled' : '') + '>' +
          '<i class="fas fa-arrow-left"></i><span>Sebelumnya</span>' +
        '</button>' +
        '<div class="pg-info">' +
          '<span class="pg-current">' + current + '</span>' +
          '<span class="pg-sep">/</span>' +
          '<span class="pg-total">' + total + '</span>' +
        '</div>' +
        '<button class="pg-btn pg-next" onclick="window.__galeriPage(' + (current + 1) + ')" ' + (current === total ? 'disabled' : '') + '>' +
          '<span>Selanjutnya</span><i class="fas fa-arrow-right"></i>' +
        '</button>' +
      '</div>';
  }

  window.__galeriPage = function(page) {
    render(page);
    window.scrollTo({ top: document.getElementById('gallery-grid').offsetTop - 120, behavior: 'smooth' });
  };

  document.querySelectorAll('.gallery-filter-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
      document.querySelectorAll('.gallery-filter-btn').forEach(function(b) {
        b.classList.remove('active');
        b.setAttribute('aria-selected', 'false');
      });
      btn.classList.add('active');
      btn.setAttribute('aria-selected', 'true');
      activeFilter = btn.dataset.filter;
      render(1);
    });
  });

  render(1);
})();
</script>

<?php include __DIR__ . '/partials/footer.php'; ?>
