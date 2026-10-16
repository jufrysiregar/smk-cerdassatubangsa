<?php
require_once __DIR__ . '/../koneksi.php';

$page_title = "Informasi dan Alur PPDB 2026/2027";
$active_page = "ppdb_informasi";

$langkah_pendaftaran = [
    ['step' => '01', 'judul' => 'Pendaftaran Online', 'deskripsi' => 'Calon siswa mengisikan formulir pendaftaran secara online melalui halaman Formulir PPDB di website sekolah.', 'icon' => 'fas fa-laptop-code', 'color' => '#059669'],
    ['step' => '02', 'judul' => 'Verifikasi Berkas & Cetak Kartu', 'deskripsi' => 'Panitia PPDB akan memverifikasi berkas persyaratan yang diunggah. Cetak Kartu Peserta Ujian dari sistem.', 'icon' => 'fas fa-file-circle-check', 'color' => '#0284c7'],
    ['step' => '03', 'judul' => 'Tes Seleksi & Wawancara Minat', 'deskripsi' => 'Mengikuti tes tertulis potensi akademik, tes logika komputer, dan wawancara pemetaan minat bakat jurusan.', 'icon' => 'fas fa-user-check', 'color' => '#f59e0b'],
    ['step' => '04', 'judul' => 'Pengumuman Hasil Seleksi', 'deskripsi' => 'Pengumuman kelulusan dapat dicek secara transparan melalui menu Pengumuman Hasil di portal website.', 'icon' => 'fas fa-bullhorn', 'color' => '#a855f7'],
    ['step' => '05', 'judul' => 'Daftar Ulang & Orientasi (MPLS)', 'deskripsi' => 'Calon siswa yang dinyatakan LULUS melengkapi administrasi daftar ulang dan siap mengikuti Masa Pengenalan Lingkungan Sekolah.', 'icon' => 'fas fa-school', 'color' => '#10b981']
];

include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/navbar.php';
?>

<!-- Header Banner -->
<section class="subpage-header">
  <div class="container text-center">
    <h1 class="subpage-title">Informasi dan Alur PPDB</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom justify-content-center">
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Beranda</a></li>
        <li class="breadcrumb-item"><a href="#">PPDB</a></li>
        <li class="breadcrumb-item active" aria-current="page">Informasi dan Alur PPDB</li>
      </ol>
    </nav>
  </div>
</section>

<section class="ppdb-overview py-5">
  <div class="container">
    
    <!-- Hero Alert Banner -->
    <div class="ppdb-hero-card mb-5 text-center" data-aos="fade-up">
      <div class="ppdb-hero-orb ppdb-hero-orb-one"></div>
      <div class="ppdb-hero-orb ppdb-hero-orb-two"></div>
      <div class="position-relative">
        <h2>Penerimaan Peserta Didik Baru TA. 2026/2027</h2>
        <p>
        SMK Cerdas Satu Bangsa membuka kesempatan bagi lulusan SMP/MTs sederajat untuk bergabung dan dididik menjadi tenaga ahli kejuruan masa depan.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <button type="button" id="btn-biaya-pendidikan" class="btn btn-biaya-pendidikan btn-lg">
            <i class="fas fa-file-pdf me-2"></i> Biaya Pendidikan
          </button>
          <a href="<?= BASE_URL ?>ppdb/formulir.php" class="btn ppdb-cta-btn btn-lg"><i class="fas fa-edit me-2"></i> Isi Formulir Pendaftaran Online</a>
        </div>
      </div>
    </div>

    <!-- 3 Column Info Box -->
    <div class="ppdb-section-heading" data-aos="fade-up">
      <h2>Informasi Pendaftaran</h2>
      <p>Seluruh ketentuan, jadwal, dan pilihan program keahlian tersedia dalam satu halaman.</p>
    </div>
    <div class="row g-4 mb-5">
      <!-- Syarat -->
      <div class="col-lg-4">
        <div class="ppdb-info-card ppdb-info-card--requirements h-100" data-aos="fade-up" data-aos-delay="50">
          <div class="ppdb-info-card-title"><span class="ppdb-info-icon emerald"><i class="fas fa-clipboard-check"></i></span><h4>Syarat Pendaftaran</h4></div>
          <ul class="ppdb-requirement-list list-unstyled text-muted fs-7">
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Lulusan SMP / MTs / Sederajat</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Usia maksimal 18 tahun per 1 Juli 2026</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Fotokopi Ijazah / Surat Keterangan Lulus (SKL)</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Fotokopi Kartu Keluarga (KK) &amp; Akta Kelahiran</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Pas Foto Ukuran 3x4 (4 lembar, background sesuai tahun: ganjil = merah, genap = biru)</li>
          </ul>
        </div>
      </div>

      <!-- Jadwal -->
      <div class="col-lg-4">
        <div class="ppdb-info-card ppdb-info-card--schedule h-100" data-aos="fade-up" data-aos-delay="100">
          <div class="ppdb-info-card-title"><span class="ppdb-info-icon blue"><i class="fas fa-calendar-alt"></i></span><h4>Jadwal Gelombang</h4></div>
          <div class="ppdb-schedule-item mb-3">
            <h6 class="fw-bold text-emerald mb-1">Gelombang 1 (Jalur Beasiswa / Prestasi)</h6>
            <small class="text-muted d-block">Pendaftaran: 1 Okt 2025 - 31 Jan 2026</small>
            <small class="text-muted d-block">Tes &amp; Pengumuman: 05 Februari 2026</small>
          </div>
          <div class="ppdb-schedule-item">
            <h6 class="fw-bold text-primary mb-1">Gelombang 2 (Jalur Reguler)</h6>
            <small class="text-muted d-block">Pendaftaran: 1 Feb 2026 - 30 Jun 2026</small>
            <small class="text-muted d-block">Tes &amp; Pengumuman: 05 Juli 2026</small>
          </div>
        </div>
      </div>

      <!-- Kuota -->
      <div class="col-lg-4">
        <div class="ppdb-info-card ppdb-info-card--quota h-100" data-aos="fade-up" data-aos-delay="150">
          <div class="ppdb-info-card-title"><span class="ppdb-info-icon amber"><i class="fas fa-users"></i></span><h4>Kuota Penerimaan</h4></div>
          <ul class="ppdb-quota-list list-group list-group-flush fs-7">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span>Teknik Komputer &amp; Jaringan (TKJ)</span>
              <span class="badge bg-emerald rounded-pill" style="background:#059669;">108 Siswa (3 Rombel)</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span>Rekayasa Perangkat Lunak (RPL)</span>
              <span class="badge bg-primary rounded-pill">108 Siswa (3 Rombel)</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span>Teknik Audio Video (TAV)</span>
              <span class="badge bg-warning text-dark rounded-pill">72 Siswa (2 Rombel)</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span>Desain Komunikasi Visual (DKV)</span>
              <span class="badge bg-purple rounded-pill text-white" style="background:#a855f7;">72 Siswa (2 Rombel)</span>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <section class="ppdb-flow-section" aria-labelledby="judul-alur-ppdb">
      <div class="ppdb-section-heading" data-aos="fade-up">
        <h2 id="judul-alur-ppdb">5 Langkah Mudah Mendaftar di SMK Cerdas Satu Bangsa</h2>
      </div>

      <div class="ppdb-flow-grid">
        <?php foreach ($langkah_pendaftaran as $index => $langkah): ?>
          <article class="ppdb-flow-card" data-aos="fade-up" data-aos-delay="<?= $index * 70 ?>">
            <div class="ppdb-flow-number"><?= $langkah['step'] ?></div>
            <div class="ppdb-flow-icon" style="--step-color: <?= $langkah['color'] ?>;"><i class="<?= $langkah['icon'] ?>"></i></div>
            <h3><?= $langkah['judul'] ?></h3>
            <p><?= $langkah['deskripsi'] ?></p>
          </article>
        <?php endforeach; ?>
      </div>

    </section>

  </div>
</section>

<!-- Viewer PDF Biaya Pendidikan -->
<div id="modal-biaya-pendidikan" class="modal-biaya-pendidikan" role="dialog" aria-modal="true" aria-labelledby="judul-modal-biaya" hidden>
  <div class="modal-biaya-dialog">
    <header class="modal-biaya-header">
      <div class="d-flex align-items-center gap-2">
        <span class="modal-biaya-icon"><i class="fas fa-file-pdf"></i></span>
        <div>
          <h2 id="judul-modal-biaya">Biaya Pendidikan</h2>
          <p>Informasi PPDB Tahun Ajaran 2026/2027</p>
        </div>
      </div>
      <button type="button" id="btn-tutup-biaya" class="modal-biaya-close" aria-label="Tutup informasi biaya" title="Tutup">
        <i class="fas fa-times"></i>
      </button>
    </header>

    <div class="modal-biaya-tools" aria-label="Kontrol dokumen PDF">
      <div class="pdf-zoom-controls">
        <button type="button" id="btn-pdf-zoom-out" class="btn-pdf-tool" title="Kecilkan tampilan PDF" aria-label="Kecilkan tampilan PDF"><i class="fas fa-minus"></i></button>
        <output id="pdf-zoom-level" class="pdf-zoom-level" aria-live="polite">100%</output>
        <button type="button" id="btn-pdf-zoom-in" class="btn-pdf-tool" title="Perbesar tampilan PDF" aria-label="Perbesar tampilan PDF"><i class="fas fa-plus"></i></button>
      </div>
      <button type="button" id="btn-pdf-fullscreen" class="btn-pdf-tool" title="Layar penuh" aria-label="Layar penuh"><i class="fas fa-expand"></i></button>
      <a href="<?= BASE_URL ?>assets/img/brosur/2026.pdf" download="Biaya-Pendidikan-PPDB-2026-2027.pdf" class="btn-pdf-tool btn-pdf-download" title="Unduh PDF">
        <i class="fas fa-download"></i>
      </a>
      <div class="pdf-page-controls">
        <div class="pdf-page-nav-group">
          <button type="button" id="btn-pdf-prev" class="btn-pdf-tool" title="Halaman sebelumnya" aria-label="Halaman sebelumnya"><i class="fas fa-chevron-left"></i></button>
          <button type="button" id="btn-pdf-next" class="btn-pdf-tool" title="Halaman berikutnya" aria-label="Halaman berikutnya"><i class="fas fa-chevron-right"></i></button>
        </div>
        <output id="pdf-page-level" class="pdf-page-level" aria-live="polite"><strong>1</strong><span> / 2</span></output>
      </div>
    </div>

    <div id="pdf-viewer-stage" class="pdf-viewer-stage">
      <div id="pdf-viewer-loading" class="pdf-viewer-loading">Pilih tombol untuk memuat dokumen.</div>
      <img id="pdf-biaya-page" hidden alt="Halaman dokumen Biaya Pendidikan PPDB">
    </div>
  </div>
</div>

<style>
  .ppdb-overview { background: linear-gradient(180deg, #f8fbff 0%, #fff 52%, #f8fafc 100%); }
  .ppdb-hero-card { position: relative; overflow: hidden; padding: clamp(2.3rem, 5vw, 4.2rem) 1.5rem; border: 1px solid #d7e7e5; border-radius: 28px; background: linear-gradient(135deg, #f0fdfa 0%, #fff 48%, #eff6ff 100%); box-shadow: 0 22px 50px rgba(15, 118, 110, .12); }
  .ppdb-hero-orb { position: absolute; width: 220px; aspect-ratio: 1; border-radius: 50%; filter: blur(1px); opacity: .42; pointer-events: none; }
  .ppdb-hero-orb-one { top: -135px; left: -75px; background: #5eead4; }
  .ppdb-hero-orb-two { right: -80px; bottom: -155px; background: #93c5fd; }
  .ppdb-status-badge { display: inline-flex; align-items: center; gap: 7px; margin-bottom: 1rem; padding: .56rem .9rem; border: 1px solid #a7f3d0; border-radius: 999px; background: rgba(236, 253, 245, .9); color: #047857; font: 800 .7rem/1 'Poppins', sans-serif; letter-spacing: .08em; }
  .ppdb-hero-card h2 { margin: 0 0 .75rem; color: #0f172a; font: 800 clamp(1.65rem, 3.5vw, 2.45rem)/1.2 'Poppins', sans-serif; }
  .ppdb-hero-card p { max-width: 720px; margin: 0 auto 1.7rem; color: #526579; font-size: 1rem; line-height: 1.75; }
  .ppdb-cta-btn { border: 0; color: #fff !important; font-weight: 700; background: linear-gradient(135deg, #059669, #0d9488); box-shadow: 0 10px 22px rgba(5, 150, 105, .25); }
  .ppdb-cta-btn:hover, .ppdb-cta-btn:focus { transform: translateY(-2px); color: #fff; filter: brightness(1.04); box-shadow: 0 14px 28px rgba(5, 150, 105, .32); }
  .ppdb-section-heading { position: relative; max-width: 760px; margin: 0 auto 2.6rem; text-align: center; }
  .ppdb-section-heading > span { display: inline-flex; align-items: center; gap: 7px; margin-bottom: .75rem; padding: .48rem .72rem; border: 1px solid #c7f5e1; border-radius: 999px; background: #ecfdf5; color: #047857; font: 800 .69rem/1 'Poppins', sans-serif; letter-spacing: .1em; }
  .ppdb-section-heading > span::before { width: 6px; height: 6px; border-radius: 50%; background: #10b981; box-shadow: 0 0 0 4px #d1fae5; content: ''; }
  .ppdb-section-heading h2 { margin: 0; color: #0f172a; font: 800 clamp(1.55rem, 3vw, 2.15rem)/1.2 'Poppins', sans-serif; letter-spacing: -.025em; }
  .ppdb-section-heading p { margin: .85rem 0 0; color: #64748b; font-size: .97rem; }
  .ppdb-info-card { position: relative; isolation: isolate; overflow: hidden; padding: 1.7rem; border: 1px solid rgba(203, 213, 225, .9); border-radius: 24px; background: linear-gradient(145deg, #fff 0%, #f8fafc 100%); box-shadow: 0 20px 44px rgba(15, 23, 42, .08), inset 0 1px rgba(255, 255, 255, .95); transition: transform .3s cubic-bezier(.2,.8,.2,1), box-shadow .3s ease; }
  .ppdb-info-card::before { position: absolute; z-index: -1; top: -82px; right: -58px; width: 190px; height: 190px; border-radius: 50%; background: radial-gradient(circle, rgba(16, 185, 129, .16), transparent 69%); content: ''; }
  .ppdb-info-card::after { position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, #059669, #2dd4bf); content: ''; }
  .ppdb-info-card:hover { transform: translateY(-8px); box-shadow: 0 28px 55px rgba(15, 23, 42, .14), inset 0 1px rgba(255, 255, 255, .95); }
  .ppdb-info-card-title { display: flex; align-items: center; gap: 12px; margin-bottom: 1.55rem; padding-bottom: 1rem; border-bottom: 1px solid #e9eff5; }
  .ppdb-info-card-title h4 { margin: 0; color: #172033; font: 800 1.08rem/1.25 'Poppins', sans-serif; letter-spacing: -.018em; }
  .ppdb-info-icon { position: relative; display: inline-flex; align-items: center; justify-content: center; width: 48px; height: 48px; border-radius: 16px; font-size: 1.1rem; box-shadow: 0 9px 18px rgba(15, 23, 42, .12); }
  .ppdb-info-icon.emerald { color: #fff; background: linear-gradient(135deg, #059669, #14b8a6); } .ppdb-info-icon.blue { color: #fff; background: linear-gradient(135deg, #2563eb, #38bdf8); } .ppdb-info-icon.amber { color: #fff; background: linear-gradient(135deg, #f59e0b, #f97316); }
  .ppdb-info-card--schedule { background: linear-gradient(145deg, #f8fbff 0%, #fff 65%); }
  .ppdb-info-card--schedule::before { background: radial-gradient(circle, rgba(59, 130, 246, .18), transparent 69%); }
  .ppdb-info-card--schedule::after { background: linear-gradient(90deg, #2563eb, #38bdf8); }
  .ppdb-info-card--quota { background: linear-gradient(145deg, #fffaf0 0%, #fff 65%); }
  .ppdb-info-card--quota::before { background: radial-gradient(circle, rgba(245, 158, 11, .18), transparent 69%); }
  .ppdb-info-card--quota::after { background: linear-gradient(90deg, #f59e0b, #fb7185); }
  .ppdb-requirement-list { display: grid; gap: .62rem; margin-bottom: 0; }
  .ppdb-requirement-list li { display: grid; grid-template-columns: 20px 1fr; gap: 9px; align-items: start; padding: .62rem .68rem; border-radius: 12px; background: rgba(248, 250, 252, .78); color: #526579; font-size: .88rem; line-height: 1.55; }
  .ppdb-requirement-list li i { margin: .28rem 0 0 !important; color: #059669 !important; font-size: .76rem; }
  .ppdb-schedule-item { position: relative; padding: 1rem 1rem 1rem 1.1rem; border: 1px solid #dbeafe; border-radius: 15px; background: linear-gradient(135deg, #fff, #f0f7ff); box-shadow: inset 3px 0 #38bdf8; }
  .ppdb-schedule-item h6 { font: 800 .87rem/1.3 'Poppins', sans-serif; }
  .ppdb-schedule-item small { margin-top: .27rem; color: #64748b !important; font-size: .79rem; }
  .ppdb-schedule-item + .ppdb-schedule-item { border-color: #c7f5e1; background: linear-gradient(135deg, #fff, #f0fdf9); box-shadow: inset 3px 0 #10b981; }
  .ppdb-quota-list { display: grid; gap: .55rem; }
  .ppdb-quota-list .list-group-item { display: grid !important; grid-template-columns: minmax(0, 1fr) auto; gap: 10px; align-items: center !important; padding: .8rem .78rem; border: 1px solid #eef2f7 !important; border-radius: 13px !important; background: rgba(255, 255, 255, .75) !important; color: #475569; font-size: .82rem; line-height: 1.45; }
  .ppdb-quota-list .badge { justify-self: end; padding: .42rem .58rem; font-size: .7rem; box-shadow: 0 5px 10px rgba(15, 23, 42, .08); }
  .ppdb-flow-section { margin-top: 1.5rem; padding: clamp(1.7rem, 4vw, 3.4rem); border: 1px solid #dbe7ec; border-radius: 28px; background: linear-gradient(145deg, #fff 0%, #f0fdfa 100%); box-shadow: 0 18px 45px rgba(15, 23, 42, .06); }
  .ppdb-flow-grid { display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 14px; }
  .ppdb-flow-card { position: relative; min-height: 245px; padding: 1.35rem 1.15rem; border: 1px solid #e2e8f0; border-radius: 18px; background: #fff; box-shadow: 0 8px 20px rgba(15, 23, 42, .05); }
  .ppdb-flow-number { position: absolute; top: 13px; right: 14px; color: #cbd5e1; font: 800 1.25rem/1 'Poppins', sans-serif; }
  .ppdb-flow-icon { display: inline-flex; align-items: center; justify-content: center; width: 72px; height: 72px; margin-bottom: 1rem; border-radius: 50%; color: #fff; background: var(--step-color); box-shadow: 0 10px 22px color-mix(in srgb, var(--step-color) 35%, transparent); font-size: 1.7rem; }
  .ppdb-flow-card h3 { margin: 0 0 .65rem; color: #172033; font: 700 .95rem/1.35 'Poppins', sans-serif; }
  .ppdb-flow-card p { margin: 0; color: #64748b; font-size: .81rem; line-height: 1.65; }
  @media (max-width: 991.98px) { .ppdb-flow-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); } .ppdb-flow-card { min-height: 200px; } }
  @media (max-width: 575.98px) { .ppdb-hero-card { border-radius: 21px; } .ppdb-flow-section { padding: 1.25rem; border-radius: 21px; } .ppdb-flow-grid { grid-template-columns: 1fr; } .ppdb-flow-card { min-height: 0; } }

  .btn-biaya-pendidikan {
    border: 0;
    color: #ffffff;
    font-weight: 700;
    background: linear-gradient(135deg, #7c3aed, #2563eb 55%, #0891b2);
    box-shadow: 0 8px 18px rgba(79, 70, 229, 0.28);
    transition: transform 0.2s ease, box-shadow 0.2s ease, filter 0.2s ease;
  }

  .btn-biaya-pendidikan:hover,
  .btn-biaya-pendidikan:focus {
    color: #ffffff;
    transform: translateY(-2px);
    filter: brightness(1.08);
    box-shadow: 0 12px 24px rgba(79, 70, 229, 0.36);
  }

  .modal-biaya-pendidikan {
    position: fixed;
    inset: 0;
    z-index: 11000;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 24px;
    background: rgba(15, 23, 42, 0.62);
    backdrop-filter: blur(7px);
    -webkit-backdrop-filter: blur(7px);
  }

  .modal-biaya-dialog {
    width: min(1120px, 96vw);
    height: min(850px, 92vh);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    border-radius: 18px;
    background: #ffffff;
    box-shadow: 0 28px 80px rgba(2, 6, 23, 0.45);
  }

  .modal-biaya-header,
  .modal-biaya-tools {
    display: flex;
    align-items: center;
    flex-shrink: 0;
  }

  .modal-biaya-header {
    justify-content: space-between;
    min-height: 78px;
    padding: 14px 20px;
    border-bottom: 1px solid #e2e8f0;
  }

  .modal-biaya-header h2 {
    margin: 0;
    color: #0f172a;
    font: 700 1.05rem/1.25 'Poppins', sans-serif;
  }

  .modal-biaya-header p {
    margin: 2px 0 0;
    color: #64748b;
    font-size: 0.8rem;
  }

  .modal-biaya-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    border-radius: 10px;
    background: #fef2f2;
    color: #dc2626;
  }

  .modal-biaya-close {
    width: 40px;
    height: 40px;
    border: 1px solid #e2e8f0;
    border-radius: 50%;
    background: #ffffff;
    color: #111827;
    font-size: 1rem;
    cursor: pointer;
  }

  .modal-biaya-tools {
    justify-content: flex-end;
    gap: 12px;
    padding: 10px 16px;
    border-bottom: 1px solid #e2e8f0;
    background: #f8fafc;
  }

  .pdf-zoom-controls {
    display: flex;
    align-items: center;
    gap: 6px;
  }

  .pdf-page-controls {
    display: flex;
    align-items: center;
    gap: 6px;
  }

  .pdf-page-nav-group {
    display: inline-flex;
  }

  .pdf-page-nav-group .btn-pdf-tool {
    border-radius: 0;
  }

  .pdf-page-nav-group .btn-pdf-tool:first-child {
    border-radius: 9px 0 0 9px;
  }

  .pdf-page-nav-group .btn-pdf-tool + .btn-pdf-tool {
    margin-left: -1px;
  }

  .pdf-page-nav-group .btn-pdf-tool:last-child {
    border-radius: 0 9px 9px 0;
  }

  .btn-pdf-tool {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    min-width: 38px;
    height: 36px;
    padding: 0 11px;
    border: 1px solid #dbe3ee;
    border-radius: 9px;
    background: #ffffff;
    color: #334155;
    font-size: 0.82rem;
    font-weight: 700;
    text-decoration: none;
    cursor: pointer;
  }

  .btn-pdf-tool:hover,
  .btn-pdf-tool:focus {
    border-color: #93c5fd;
    color: #1d4ed8;
    background: #eff6ff;
  }

  .btn-pdf-tool:disabled,
  .btn-pdf-tool:disabled:hover,
  .btn-pdf-tool:disabled:focus {
    border-color: #e2e8f0;
    background: #f8fafc;
    color: #cbd5e1;
    cursor: not-allowed;
    box-shadow: none;
  }

  .btn-pdf-download {
    border-color: #dbe3ee;
    color: #334155;
    background: #ffffff;
  }

  .pdf-zoom-level {
    width: 48px;
    color: #475569;
    font-size: 0.78rem;
    font-weight: 700;
    text-align: center;
  }

  .pdf-page-level {
    width: auto;
    min-width: 38px;
    margin-left: 2px;
    color: #94a3b8;
    font-size: 0.78rem;
    font-weight: 600;
    text-align: left;
  }

  .pdf-page-level strong {
    color: #0f172a;
    font-weight: 800;
  }

  .pdf-viewer-stage {
    --pdf-zoom: 1;
    position: relative;
    flex: 1;
    overflow: auto;
    background: #475569;
  }

  .pdf-viewer-stage img {
    display: block;
    width: calc(100% - 56px);
    height: auto;
    background: #ffffff;
    margin: 28px auto;
    box-shadow: 0 6px 22px rgba(15, 23, 42, 0.32);
    transform: scale(var(--pdf-zoom));
    transform-origin: top center;
  }

  .pdf-viewer-loading {
    display: grid;
    min-height: 100%;
    place-items: center;
    padding: 24px;
    color: #e2e8f0;
    font-size: 0.92rem;
  }

  .modal-biaya-dialog:fullscreen {
    width: 100vw;
    height: 100vh;
    border-radius: 0;
  }

  @media (max-width: 575.98px) {
    .modal-biaya-pendidikan { padding: 10px; }
    .modal-biaya-dialog { width: 100%; height: 96vh; border-radius: 13px; }
    .modal-biaya-header { min-height: 66px; padding: 10px 12px; }
    .modal-biaya-header p { display: none; }
    .modal-biaya-tools { gap: 7px; padding: 8px; }
    .btn-pdf-tool { padding: 0 9px; }
    .btn-pdf-tool span { display: none; }
    .pdf-page-controls { order: 3; width: 100%; justify-content: center; }
    .modal-biaya-tools { flex-wrap: wrap; justify-content: space-between; }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('modal-biaya-pendidikan');
    const openButton = document.getElementById('btn-biaya-pendidikan');
    const closeButton = document.getElementById('btn-tutup-biaya');
    const stage = document.getElementById('pdf-viewer-stage');
    const zoomLabel = document.getElementById('pdf-zoom-level');
    const zoomInButton = document.getElementById('btn-pdf-zoom-in');
    const zoomOutButton = document.getElementById('btn-pdf-zoom-out');
    const fullscreenButton = document.getElementById('btn-pdf-fullscreen');
    const pageImage = document.getElementById('pdf-biaya-page');
    const loading = document.getElementById('pdf-viewer-loading');
    const prevButton = document.getElementById('btn-pdf-prev');
    const nextButton = document.getElementById('btn-pdf-next');
    const pageLabel = document.getElementById('pdf-page-level');
    const dialog = modal ? modal.querySelector('.modal-biaya-dialog') : null;
    let zoom = 1;
    const pdfPages = [
      '<?= BASE_URL ?>assets/img/brosur/2026-page-1.png',
      '<?= BASE_URL ?>assets/img/brosur/2026-page-2.png'
    ];
    let currentPage = 1;

    if (!modal || !openButton || !closeButton || !stage || !dialog || !pageImage) return;

    // Keluar dari page wrapper agar fixed selalu mengikuti viewport browser.
    if (modal.parentElement !== document.body) document.body.appendChild(modal);

    function setZoom(value) {
      zoom = Math.min(1.8, Math.max(0.8, value));
      zoomLabel.textContent = Math.round(zoom * 100) + '%';
      stage.style.setProperty('--pdf-zoom', zoom);
    }

    function updateFullscreenControl() {
      const isFullscreen = document.fullscreenElement === dialog;
      const icon = fullscreenButton.querySelector('i');
      icon.className = isFullscreen ? 'fas fa-compress' : 'fas fa-expand';
      fullscreenButton.title = isFullscreen ? 'Kecilkan layar' : 'Layar penuh';
      fullscreenButton.setAttribute('aria-label', fullscreenButton.title);
    }

    function updatePageControls() {
      const total = pdfPages.length;
      pageLabel.innerHTML = '<strong>' + currentPage + '</strong><span> / ' + total + '</span>';
      prevButton.disabled = currentPage <= 1;
      nextButton.disabled = currentPage >= total;
    }

    function renderPage() {
      loading.hidden = false;
      loading.textContent = 'Memuat halaman ' + currentPage + '...';
      pageImage.hidden = true;
      pageImage.onload = function () {
        pageImage.hidden = false;
        loading.hidden = true;
        updatePageControls();
      };
      pageImage.onerror = function () {
        loading.textContent = 'Halaman dokumen tidak dapat ditampilkan. Silakan gunakan tombol Unduh.';
      };
      pageImage.src = pdfPages[currentPage - 1];
    }

    function openModal() {
      modal.hidden = false;
      document.body.classList.add('modal-biaya-open');
      closeButton.focus();
      renderPage();
    }

    function closeModal() {
      modal.hidden = true;
      document.body.classList.remove('modal-biaya-open');
      openButton.focus();
    }

    openButton.addEventListener('click', openModal);
    closeButton.addEventListener('click', closeModal);
    zoomInButton.addEventListener('click', function () { setZoom(zoom + 0.1); });
    zoomOutButton.addEventListener('click', function () { setZoom(zoom - 0.1); });
    prevButton.addEventListener('click', function () {
      if (currentPage > 1) { currentPage--; renderPage(); }
    });
    nextButton.addEventListener('click', function () {
      if (currentPage < pdfPages.length) { currentPage++; renderPage(); }
    });
    fullscreenButton.addEventListener('click', function () {
      if (document.fullscreenElement) {
        document.exitFullscreen();
      } else if (dialog.requestFullscreen) {
        dialog.requestFullscreen();
      }
    });
    document.addEventListener('fullscreenchange', updateFullscreenControl);
  });
</script>

<?php include __DIR__ . '/../partials/footer.php'; ?>
