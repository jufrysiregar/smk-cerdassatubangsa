<?php
require_once __DIR__ . '/../koneksi.php';

$page_title = "Sertifikasi & Akreditasi";
$active_page = "profil_sertifikasi";

// Data Sertifikasi Jurusan
$sertifikasi_jurusan = [
    [
        'kode' => 'TKJ',
        'nama' => 'Teknik Komputer & Jaringan',
        'akreditasi' => 'A',
        'badge_class' => 'cert-badge-a',
        'status_text' => 'Terakreditasi A (Unggul)',
        'no_sk' => 'Nomor SK Akreditasi: 123/BAN-PDM/SK/2026',
        'berlaku' => '2026 – 2031',
        'gambar' => BASE_URL . 'assets/img/sertifikasi/TKJ.jpg',
        'pdf_url' => BASE_URL . 'assets/docs/sertifikat-tkj.pdf'
    ],
    [
        'kode' => 'RPL',
        'nama' => 'Rekayasa Perangkat Lunak',
        'akreditasi' => 'A',
        'badge_class' => 'cert-badge-a',
        'status_text' => 'Terakreditasi A (Unggul)',
        'no_sk' => 'Nomor SK Akreditasi: 123/BAN-PDM/SK/2026',
        'berlaku' => '2026 – 2031',
        'gambar' => BASE_URL . 'assets/img/sertifikasi/RPL.jpg',
        'pdf_url' => BASE_URL . 'assets/docs/sertifikat-rpl.pdf'
    ],
    [
        'kode' => 'DKV',
        'nama' => 'Desain Komunikasi Visual',
        'akreditasi' => 'B',
        'badge_class' => 'cert-badge-b',
        'status_text' => 'Terakreditasi B (Baik Sekali)',
        'no_sk' => 'Nomor SK Akreditasi: 123/BAN-PDM/SK/2026',
        'berlaku' => '2026 – 2031',
        'gambar' => BASE_URL . 'assets/img/sertifikasi/DKV.jpg',
        'pdf_url' => BASE_URL . 'assets/docs/sertifikat-dkv.pdf'
    ],
    [
        'kode' => 'TAV',
        'nama' => 'Teknik Audio Video',
        'akreditasi' => 'Proses',
        'badge_class' => 'cert-badge-process',
        'status_text' => 'Masih Terakreditasi (Proses Re-Akreditasi)',
        'no_sk' => 'Nomor SK Akreditasi: 123/BAN-PDM/SK/2026',
        'berlaku' => '2026 – 2031',
        'gambar' => BASE_URL . 'assets/img/sertifikasi/TAV.jpg',
        'pdf_url' => BASE_URL . 'assets/docs/sertifikat-tav.pdf'
    ]
];

include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/navbar.php';
?>

<!-- ─── HEADER HERO & BREADCRUMB ───────────────────────────── -->
<section class="subpage-header">
  <div class="container text-center">
    <h1 class="subpage-title">Akreditasi Sekolah dan Program Jurusan</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom justify-content-center">
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Beranda</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Profil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sertifikasi</li>
      </ol>
    </nav>
  </div>
</section>

<!-- ─── SECTION 1: SERTIFIKASI SEKOLAH (AKREDITASI INSTITUSI) ── -->
<section class="py-5">
  <div class="container">
    <div class="text-center max-w-700 mx-auto mb-5" data-aos="fade-up">
      <h2 class="section-title">MUTU &amp; LEGALITAS RESMI</h2>
      <div class="title-line"></div>
      <p class="text-muted">
        SMK Cerdas Satu Bangsa telah terakreditasi secara resmi oleh Badan Akreditasi Nasional Sekolah/Madrasah (BAN-S/M) dengan standar mutu pendidikan vokasi bertaraf nasional.
      </p>
    </div>

    <!-- Featured School Accreditation Card -->
    <div class="cert-main-card p-4 p-lg-5" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-center g-4 g-lg-5">
        
        <!-- Kolom Preview Sertifikat -->
        <div class="col-lg-5 text-center">
          <div class="position-relative d-inline-block w-100 rounded-3 overflow-hidden shadow-sm border">
            <img src="<?= BASE_URL ?>assets/img/sertifikasi/sekolah.jpg"
                 alt="Sertifikat Akreditasi SMK Cerdas Satu Bangsa"
                 class="img-fluid w-100"
                 style="object-fit: cover; max-height: 320px;">
          </div>
        </div>

        <!-- Kolom Informasi & Tombol Aksi -->
        <div class="col-lg-7">
          <div class="d-flex align-items-center gap-2 mb-3">
            <span class="badge bg-success px-3 py-2 rounded-pill font-poppins" style="font-size: 0.85rem; letter-spacing: 0.5px;">
              <i class="fas fa-check-circle me-1"></i> Terakreditasi A (Unggul)
            </span>
            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill font-poppins" style="font-size: 0.85rem;">
              Skor: 96 / 100
            </span>
          </div>

          <h3 class="fw-bold text-dark font-poppins mb-2" style="font-size: 1.65rem;">
            Sertifikat Akreditasi Institusi Sekolah
          </h3>
          <p class="text-muted mb-4" style="line-height: 1.7;">
            Berdasarkan Keputusan Badan Akreditasi Nasional Pendidikan Anak Usia Dini, Pendidikan Dasar, dan Pendidikan Menengah (BAN-PDM), SMK Cerdas Satu Bangsa ditetapkan menyandang predikat <strong>Akreditasi A</strong> yang mencakup keunggulan kurikulum vokasi, kualitas tenaga pendidik, sarana laboratorium modern, dan manajemen sekolah berorientasi industri.
          </p>

          <div class="row g-3 mb-4">
            <div class="col-sm-6">
              <div class="p-3 bg-light rounded-3 border">
                <small class="text-muted d-block mb-1">Nomor SK Akreditasi:</small>
                <strong class="text-dark font-poppins">123/BAN-PDM/SK/2026</strong>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="p-3 bg-light rounded-3 border">
                <small class="text-muted d-block mb-1">Masa Berlaku:</small>
                <strong class="text-dark font-poppins">2026 – 2031 (5 Tahun)</strong>
              </div>
            </div>
          </div>

          <!-- Tombol Lihat & Download -->
          <div class="d-flex gap-3 flex-wrap">
            <button type="button"
               class="btn-cert-view px-4 py-2 btn-lihat-dokumen"
               data-document-title="Sertifikat Akreditasi Institusi Sekolah"
               data-document-description="Dokumen Akreditasi SMK Cerdas Satu Bangsa"
               data-document-image="<?= BASE_URL ?>assets/img/sertifikasi/sekolah.jpg"
               data-document-download="Sertifikat-Akreditasi-SMK-Cerdas-Satu-Bangsa.jpg"
               title="Lihat Sertifikat PDF">
              <i class="fas fa-eye me-1"></i> Lihat Dokumen
            </button>
            <a href="<?= BASE_URL ?>assets/img/sertifikasi/sekolah.jpg"
               download="Sertifikat-Akreditasi-SMK-Cerdas-Satu-Bangsa.jpg"
               class="btn-cert-download px-4 py-2"
               title="Download Sertifikat">
              <i class="fas fa-download me-1"></i> Download Sertifikat
            </a>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>

<!-- ─── SECTION 2: SERTIFIKASI JURUSAN (GRID 4 KOLOM) ────────── -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center max-w-700 mx-auto mb-5" data-aos="fade-up">
      <h2 class="section-title">STANDAR KOMPETENSI KEAHLIAN</h2>
      <div class="title-line"></div>
      <p class="text-muted">
        Setiap program keahlian diuji dan diakreditasi secara berkala untuk memastikan relevansi keahlian siswa dengan standar kebutuhan industri 4.0.
      </p>
    </div>

    <!-- Grid 4 Kolom Jurusan -->
    <div class="row g-4">
      <?php foreach ($sertifikasi_jurusan as $index => $jur): ?>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
        <div class="cert-jurusan-card">
          
          <!-- Image Preview -->
          <div class="cert-img-wrapper">
            <img src="<?= $jur['gambar'] ?>" alt="Sertifikat Akreditasi <?= $jur['nama'] ?>">
          </div>

          <!-- Card Content -->
          <div class="p-4 d-flex flex-column flex-grow-1">
            <div class="d-flex align-items-center justify-content-between mb-1">
              <h4 class="fw-bold font-poppins text-dark mb-0"><?= $jur['kode'] ?></h4>
              <span class="badge bg-light text-muted border small"><?= $jur['berlaku'] ?></span>
            </div>
            
            <div class="fw-semibold text-emerald small mb-2"><?= $jur['nama'] ?></div>
            
            <p class="text-muted small mb-3" style="font-size: 0.82rem; line-height: 1.5;">
              <i class="fas fa-certificate text-emerald me-1"></i> <?= $jur['status_text'] ?><br>
              <span class="text-muted" style="font-size: 0.78rem;"><?= $jur['no_sk'] ?></span>
            </p>

            <!-- Buttons: [Lihat] (Biru) & [Download] (Hijau) -->
            <div class="d-flex gap-2 mt-auto pt-3 border-top">
              <button type="button"
                 class="btn-cert-view flex-grow-1 btn-lihat-dokumen"
                 data-document-title="Sertifikat Akreditasi <?= $jur['nama'] ?>"
                 data-document-description="Dokumen Akreditasi Program Keahlian <?= $jur['kode'] ?>"
                 data-document-image="<?= $jur['gambar'] ?>"
                 data-document-download="Sertifikat-Akreditasi-<?= $jur['kode'] ?>.jpg"
                 title="Lihat Sertifikat <?= $jur['kode'] ?>">
                <i class="fas fa-eye"></i> Lihat
              </button>
              <a href="<?= $jur['gambar'] ?>"
                 download="Sertifikat-Akreditasi-<?= $jur['kode'] ?>.png"
                 class="btn-cert-download flex-grow-1"
                 title="Download Sertifikat <?= $jur['kode'] ?>">
                <i class="fas fa-download"></i> Unduh
              </a>
            </div>

          </div>

        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- Viewer dokumen akreditasi -->
<div id="modal-dokumen-akreditasi" class="modal-dokumen-akreditasi" role="dialog" aria-modal="true" aria-labelledby="judul-dokumen-akreditasi" hidden>
  <div class="modal-dokumen-dialog">
    <header class="modal-dokumen-header">
      <div class="d-flex align-items-center gap-2">
        <span class="modal-dokumen-icon"><i class="fas fa-certificate"></i></span>
        <div>
          <h2 id="judul-dokumen-akreditasi">Dokumen Akreditasi</h2>
          <p id="deskripsi-dokumen-akreditasi">Sertifikat resmi sekolah</p>
        </div>
      </div>
      <button type="button" id="btn-tutup-dokumen-akreditasi" class="modal-dokumen-close" aria-label="Tutup dokumen" title="Tutup">
        <i class="fas fa-times"></i>
      </button>
    </header>

    <div class="modal-dokumen-tools" aria-label="Kontrol dokumen">
      <button type="button" id="btn-dokumen-zoom-out" class="btn-dokumen-tool" title="Kecilkan tampilan" aria-label="Kecilkan tampilan"><i class="fas fa-minus"></i></button>
      <output id="dokumen-zoom-level" class="dokumen-zoom-level" aria-live="polite">100%</output>
      <button type="button" id="btn-dokumen-zoom-in" class="btn-dokumen-tool" title="Perbesar tampilan" aria-label="Perbesar tampilan"><i class="fas fa-plus"></i></button>
      <button type="button" id="btn-dokumen-fullscreen" class="btn-dokumen-tool" title="Layar penuh" aria-label="Layar penuh"><i class="fas fa-expand"></i></button>
      <a id="btn-dokumen-download" class="btn-dokumen-tool" href="#" download title="Unduh dokumen" aria-label="Unduh dokumen"><i class="fas fa-download"></i></a>
    </div>

    <div id="dokumen-akreditasi-stage" class="dokumen-akreditasi-stage">
      <img id="gambar-dokumen-akreditasi" alt="Pratinjau dokumen akreditasi" hidden>
    </div>
  </div>
</div>

<style>
  body.modal-dokumen-open { overflow: hidden; }

  .modal-dokumen-akreditasi {
    position: fixed;
    inset: 0;
    z-index: 11000;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 24px;
    background: rgba(15, 23, 42, .62);
    backdrop-filter: blur(7px);
    -webkit-backdrop-filter: blur(7px);
  }

  .modal-dokumen-dialog {
    width: min(1120px, 96vw);
    height: min(850px, 92vh);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    border-radius: 18px;
    background: #fff;
    box-shadow: 0 28px 80px rgba(2, 6, 23, .45);
  }

  .modal-dokumen-header,
  .modal-dokumen-tools {
    display: flex;
    align-items: center;
    flex-shrink: 0;
  }

  .modal-dokumen-header {
    justify-content: space-between;
    min-height: 78px;
    padding: 14px 20px;
    border-bottom: 1px solid #e2e8f0;
  }

  .modal-dokumen-header h2 { margin: 0; color: #0f172a; font: 700 1.05rem/1.25 'Poppins', sans-serif; }
  .modal-dokumen-header p { margin: 2px 0 0; color: #64748b; font-size: .8rem; }
  .modal-dokumen-icon { display: inline-flex; align-items: center; justify-content: center; width: 38px; height: 38px; border-radius: 10px; background: #ecfdf5; color: #059669; }
  .modal-dokumen-close { width: 40px; height: 40px; border: 1px solid #e2e8f0; border-radius: 50%; background: #fff; color: #111827; font-size: 1rem; cursor: pointer; }

  .modal-dokumen-tools {
    justify-content: flex-end;
    gap: 8px;
    padding: 10px 16px;
    border-bottom: 1px solid #e2e8f0;
    background: #f8fafc;
  }

  .btn-dokumen-tool {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 36px;
    padding: 0;
    border: 1px solid #dbe3ee;
    border-radius: 9px;
    background: #fff;
    color: #334155;
    text-decoration: none;
    cursor: pointer;
  }

  .btn-dokumen-tool:hover,
  .btn-dokumen-tool:focus { border-color: #93c5fd; color: #1d4ed8; background: #eff6ff; }
  .dokumen-zoom-level { width: 48px; color: #475569; font-size: .78rem; font-weight: 700; text-align: center; }
  .dokumen-akreditasi-stage { --dokumen-zoom: 1; position: relative; flex: 1; overflow: auto; background: #475569; }
  .dokumen-akreditasi-stage img { display: block; width: calc(100% - 56px); height: auto; margin: 28px auto; background: #fff; box-shadow: 0 6px 22px rgba(15, 23, 42, .32); transform: scale(var(--dokumen-zoom)); transform-origin: top center; }
  .modal-dokumen-dialog:fullscreen { width: 100vw; height: 100vh; border-radius: 0; }

  @media (max-width: 575.98px) {
    .modal-dokumen-akreditasi { padding: 10px; }
    .modal-dokumen-dialog { width: 100%; height: 96vh; border-radius: 13px; }
    .modal-dokumen-header { min-height: 66px; padding: 10px 12px; }
    .modal-dokumen-header p { display: none; }
    .modal-dokumen-tools { padding: 8px; }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('modal-dokumen-akreditasi');
    const dialog = modal ? modal.querySelector('.modal-dokumen-dialog') : null;
    const closeButton = document.getElementById('btn-tutup-dokumen-akreditasi');
    const title = document.getElementById('judul-dokumen-akreditasi');
    const description = document.getElementById('deskripsi-dokumen-akreditasi');
    const image = document.getElementById('gambar-dokumen-akreditasi');
    const stage = document.getElementById('dokumen-akreditasi-stage');
    const download = document.getElementById('btn-dokumen-download');
    const zoomLabel = document.getElementById('dokumen-zoom-level');
    const fullscreenButton = document.getElementById('btn-dokumen-fullscreen');
    let activeButton = null;
    let zoom = 1;

    if (!modal || !dialog || !closeButton || !image || !stage) return;
    if (modal.parentElement !== document.body) document.body.appendChild(modal);

    function setZoom(value) {
      zoom = Math.min(1.8, Math.max(.8, value));
      zoomLabel.textContent = Math.round(zoom * 100) + '%';
      stage.style.setProperty('--dokumen-zoom', zoom);
    }

    function updateFullscreenControl() {
      const isFullscreen = document.fullscreenElement === dialog;
      fullscreenButton.querySelector('i').className = isFullscreen ? 'fas fa-compress' : 'fas fa-expand';
      fullscreenButton.title = isFullscreen ? 'Kecilkan layar' : 'Layar penuh';
      fullscreenButton.setAttribute('aria-label', fullscreenButton.title);
    }

    document.querySelectorAll('.btn-lihat-dokumen').forEach(function (button) {
      button.addEventListener('click', function () {
        activeButton = button;
        zoom = 1;
        setZoom(zoom);
        title.textContent = button.dataset.documentTitle;
        description.textContent = button.dataset.documentDescription;
        image.src = button.dataset.documentImage;
        image.alt = button.dataset.documentTitle;
        image.hidden = false;
        download.href = button.dataset.documentImage;
        download.download = button.dataset.documentDownload;
        modal.hidden = false;
        document.body.classList.add('modal-dokumen-open');
        closeButton.focus();
      });
    });

    closeButton.addEventListener('click', function () {
      modal.hidden = true;
      document.body.classList.remove('modal-dokumen-open');
      if (activeButton) activeButton.focus();
    });
    document.getElementById('btn-dokumen-zoom-in').addEventListener('click', function () { setZoom(zoom + .1); });
    document.getElementById('btn-dokumen-zoom-out').addEventListener('click', function () { setZoom(zoom - .1); });
    fullscreenButton.addEventListener('click', function () {
      if (document.fullscreenElement) document.exitFullscreen();
      else if (dialog.requestFullscreen) dialog.requestFullscreen();
    });
    document.addEventListener('fullscreenchange', updateFullscreenControl);
  });
</script>

<?php
include __DIR__ . '/../partials/footer.php';
?>
