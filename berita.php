<?php
require_once __DIR__ . '/koneksi.php';
require_once __DIR__ . '/data/berita-data.php';

$page_title    = "Berita & Artikel";
$active_page   = "berita";
$daftar_berita = array_values($semua_berita);

include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/navbar.php';
?>
<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/berita.css">

<!-- ─── HERO SUBPAGE ─────────────────────────────────────── -->
<section class="subpage-header">
  <div class="container text-center">
    <h1 class="subpage-title">Berita &amp; Artikel Sekolah</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom justify-content-center">
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Beranda</a></li>
        <li class="breadcrumb-item active" aria-current="page">Berita &amp; Artikel</li>
      </ol>
    </nav>
  </div>
</section>

<!-- ─── DAFTAR BERITA ─────────────────────────────────────── -->
<section class="berita-section py-5">
  <div class="container">

    <div class="berita-section-header">
      <span class="berita-section-label"><i class="fas fa-newspaper"></i> Informasi Terkini</span>
    </div>

    <div class="row g-4" id="berita-grid">
      <?php foreach ($daftar_berita as $b): ?>
      <div class="col-md-6 col-lg-4 berita-grid-item">
        <article class="berita-card h-100">

          <a href="<?= BASE_URL ?>berita-detail.php?id=<?= $b['id'] ?>" class="berita-card__img-link">
            <div class="berita-card__img-wrap">
              <img src="<?= $b['gambar'] ?>" alt="<?= htmlspecialchars($b['judul']) ?>" loading="lazy">
            </div>
          </a>

          <div class="berita-card__body">
            <div class="berita-card__meta">
              <span><i class="far fa-calendar-alt"></i> <?= htmlspecialchars($b['tanggal']) ?></span>
              <span class="berita-card__meta-dot">·</span>
              <span><i class="far fa-user"></i> <?= htmlspecialchars($b['penulis']) ?></span>
            </div>

            <h3 class="berita-card__title">
                <?= htmlspecialchars($b['judul']) ?>
            </h3>

            <p class="berita-card__excerpt"><?= htmlspecialchars($b['ringkasan']) ?></p>

            <div class="berita-card__divider"></div>
            <div class="berita-card__footer">
              <a href="<?= BASE_URL ?>berita-detail.php?id=<?= $b['id'] ?>" class="berita-card__cta ms-auto">
                Baca Selengkapnya <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>

        </article>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Pagination Berita -->
    <div class="pagination-wrapper" id="berita-pagination"></div>

  </div>
</section>

<script>
(function() {
  const PER_PAGE = 6;
  const items    = Array.from(document.querySelectorAll('#berita-grid .berita-grid-item'));
  const pgWrap   = document.getElementById('berita-pagination');
  let current    = 1;

  function totalPages() { return Math.ceil(items.length / PER_PAGE); }

  function render(page) {
    current = page;
    const start = (page - 1) * PER_PAGE;
    const end   = start + PER_PAGE;
    items.forEach((el, i) => {
      el.style.display = (i >= start && i < end) ? '' : 'none';
    });
    renderPagination();
    window.scrollTo({ top: document.getElementById('berita-grid').offsetTop - 100, behavior: 'smooth' });
  }

  function renderPagination() {
    const total = totalPages();
    if (total <= 1) { pgWrap.innerHTML = ''; return; }

    pgWrap.innerHTML = `
      <div class="pagination-bar">
        <button class="pg-btn pg-prev" onclick="window.__beritaPage(${current - 1})" ${current === 1 ? 'disabled' : ''}>
          <i class="fas fa-arrow-left"></i>
          <span>Sebelumnya</span>
        </button>
        <div class="pg-info">
          <span class="pg-current">${current}</span>
          <span class="pg-sep">/</span>
          <span class="pg-total">${total}</span>
        </div>
        <button class="pg-btn pg-next" onclick="window.__beritaPage(${current + 1})" ${current === total ? 'disabled' : ''}>
          <span>Selanjutnya</span>
          <i class="fas fa-arrow-right"></i>
        </button>
      </div>`;
  }

  window.__beritaPage = render;
  render(1);
})();
</script>

<?php include __DIR__ . '/partials/footer.php'; ?>
