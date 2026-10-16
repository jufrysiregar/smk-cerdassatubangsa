<?php
require_once __DIR__ . '/koneksi.php';
require_once __DIR__ . '/data/berita-data.php';

$all_berita = $semua_berita;
$id         = isset($_GET['id']) ? (int)$_GET['id'] : array_key_first($all_berita);
$berita     = isset($all_berita[$id]) ? $all_berita[$id] : reset($all_berita);

$page_title  = $berita['judul'];
$active_page = "berita";

include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/navbar.php';
?>
<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/berita.css">

<!-- ─── HERO SUBPAGE ─────────────────────────────────────── -->
<section class="subpage-header">
  <div class="container text-center">
    <h1 class="subpage-title">Berita &amp; Artikel</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom justify-content-center">
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Beranda</a></li>
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>berita.php">Berita &amp; Artikel</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail</li>
      </ol>
    </nav>
  </div>
</section>

<!-- ─── KONTEN DETAIL ─────────────────────────────────────── -->
<section class="berita-detail-section py-5">
  <div class="container">
    <div class="row g-5 justify-content-center">

      <!-- Artikel Utama -->
      <div class="col-lg-8">
        <article class="berita-detail-card">

          <!-- Hero Image full-width -->
          <div class="berita-detail-hero">
            <img src="<?= $berita['gambar'] ?>" alt="<?= htmlspecialchars($berita['judul']) ?>" loading="eager">
          </div>

          <!-- Konten artikel -->
          <div class="berita-detail-content">

            <div class="berita-detail-meta-top">
              <span><i class="far fa-calendar-alt"></i> <?= htmlspecialchars($berita['tanggal']) ?></span>
              <span><i class="far fa-user"></i> <?= htmlspecialchars($berita['penulis']) ?></span>
            </div>

            <h1 class="berita-detail-title"><?= htmlspecialchars($berita['judul']) ?></h1>

            <div class="berita-detail-body">
              <?= $berita['isi'] ?>
            </div>

            <div class="berita-detail-footer">
              <a href="<?= BASE_URL ?>berita.php" class="btn-back-berita">
                <i class="fas fa-arrow-left"></i> Kembali ke Berita
              </a>
              <div class="berita-share">
                <span>Bagikan:</span>
                <span class="berita-share-btn"><i class="fab fa-facebook-f"></i></span>
                <span class="berita-share-btn"><i class="fab fa-x-twitter"></i></span>
                <span class="berita-share-btn"><i class="fab fa-whatsapp"></i></span>
              </div>
            </div>

          </div><!-- /.berita-detail-content -->
        </article>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-4">
        <aside class="berita-sidebar">
          <h5 class="berita-sidebar__title">Berita Lainnya</h5>
          <?php
          $berita_lain = array_filter($all_berita, fn($k) => $k !== $id, ARRAY_FILTER_USE_KEY);
          if (empty($berita_lain)): ?>
            <p class="berita-sidebar__empty">Belum ada berita lainnya.</p>
          <?php else:
            $keys = array_keys($berita_lain);
            shuffle($keys);
            $keys = array_slice($keys, 0, 3);
            foreach ($keys as $k):
              $bl = $berita_lain[$k]; ?>
            <a href="<?= BASE_URL ?>berita-detail.php?id=<?= $k ?>" class="berita-sidebar__item">
              <div class="berita-sidebar__thumb">
                <img src="<?= $bl['gambar'] ?>" alt="<?= htmlspecialchars($bl['judul']) ?>">
              </div>
              <div class="berita-sidebar__info">
                <span class="berita-sidebar__date"><i class="far fa-calendar-alt me-1"></i><?= htmlspecialchars($bl['tanggal']) ?></span>
                <p class="berita-sidebar__item-title"><?= htmlspecialchars(substr($bl['judul'], 0, 65)) ?>...</p>
              </div>
            </a>
          <?php endforeach; endif; ?>
        </aside>
      </div>

    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
