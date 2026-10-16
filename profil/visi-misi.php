<?php
require_once __DIR__ . '/../koneksi.php';

$page_title = "Visi dan Misi";
$active_page = "profil_visi_misi";

include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/navbar.php';
?>

<!-- Header Banner -->
<section class="subpage-header">
  <div class="container text-center">
    <h1 class="subpage-title">Visi dan Misi Sekolah</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom justify-content-center">
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Beranda</a></li>
        <li class="breadcrumb-item"><a href="#">Profil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Visi dan Misi</li>
      </ol>
    </nav>
  </div>
</section>

<section class="py-5">
  <div class="container">
    
    <!-- Visi Box -->
    <div class="vision-primary-card mb-5">
      <div class="vision-orbit vision-orbit-one"></div>
      <div class="vision-orbit vision-orbit-two"></div>
      <div class="vision-threads" aria-hidden="true"><span></span><span></span><span></span></div>
      <div class="vision-main-label">VISI UTAMA</div>
      <h2 class="vision-statement font-poppins">
        "Menjadi Sekolah Kejuruan Unggul yang Mencetak Lulusan Berintegritas, Profesional di Bidang Teknologi, Berjiwa Wirausaha, dan Berdaya Saing Global pada Tahun 2030."
      </h2>
    </div>

    <!-- Misi Box -->
    <div class="row g-4 mb-5">
      <div class="col-lg-6">
        <div class="mission-panel h-100">
          <div class="mission-panel-header">
            <div class="mission-header-icon"><i class="fas fa-bullseye"></i></div>
            <div>
              <h3>Misi Sekolah</h3>
            </div>
          </div>
          <ol class="mission-list">
            <li><span class="mission-number">01</span><p>Menyelenggarakan pembelajaran berbasis Industri &amp; Project-Based Learning (PBL) yang selaras dengan perkembangan era digital.</p></li>
            <li><span class="mission-number">02</span><p>Menanamkan nilai-nilai karakter beriman, bertaqwa, disiplin, jujur, dan berwawasan kebangsaan kepada seluruh civitas akademika.</p></li>
            <li><span class="mission-number">03</span><p>Memperluas kemitraan strategis dengan Dunia Usaha dan Dunia Industri (DUDI) skala nasional maupun internasional.</p></li>
            <li><span class="mission-number">04</span><p>Meningkatkan kompetensi pendidik dan tenaga kependidikan melalui sertifikasi profesi berkala.</p></li>
            <li><span class="mission-number">05</span><p>Mendorong budaya inovasi, riset terapan, dan kewirausahaan (technopreneurship) bagi seluruh siswa.</p></li>
          </ol>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="core-values-panel h-100">
          <div class="core-values-heading"><h3><i class="fas fa-star"></i> 4 Nilai Utama (Core Values)</h3></div>
          
          <div class="core-value-card core-value-integrity">
            <h5 class="fw-bold text-emerald mb-1"><i class="fas fa-heart me-2"></i> Integrity (Integritas)</h5>
            <p class="text-light-muted small mb-0">Jujur, bertanggung jawab, dan memegang teguh moralitas tinggi dalam setiap tindakan.</p>
          </div>

          <div class="core-value-card core-value-innovation">
            <h5 class="fw-bold text-primary mb-1"><i class="fas fa-lightbulb me-2"></i> Innovation (Inovasi)</h5>
            <p class="text-light-muted small mb-0">Berani mencoba hal baru, kreatif dalam memecahkan masalah teknis berbasis teknologi.</p>
          </div>

          <div class="core-value-card core-value-excellence">
            <h5 class="fw-bold text-warning mb-1"><i class="fas fa-trophy me-2"></i> Excellence (Prestasi)</h5>
            <p class="text-light-muted small mb-0">Selalu berusaha memberikan hasil karya dan kualitas terbaik tanpa kompromi.</p>
          </div>

          <div class="core-value-card core-value-synergy">
            <h5 class="fw-bold text-info mb-1"><i class="fas fa-hands-helping me-2"></i> Synergy (Sinergi)</h5>
            <p class="text-light-muted small mb-0">Bekerja sama secara harmonis antara sekolah, industri, orang tua, dan masyarakat.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<style>
  .vision-primary-card {
    position: relative;
    isolation: isolate;
    overflow: hidden;
    padding: 3.4rem 3rem 3rem;
    border: 1px solid #dcecf5;
    border-radius: 1.75rem;
    background: linear-gradient(135deg, #f8fcff 0%, #eaf8f4 100%);
    box-shadow: 0 20px 45px rgba(19, 63, 91, .10), inset 0 1px 0 rgba(255, 255, 255, .95);
    text-align: center;
  }

  .vision-orbit {
    position: absolute;
    z-index: -1;
    border-radius: 50%;
    pointer-events: none;
  }

  .vision-orbit-one {
    top: -8rem;
    left: -5rem;
    width: 19rem;
    height: 19rem;
    border: 2.5rem solid rgba(16, 185, 129, .09);
  }

  .vision-orbit-two {
    right: -4rem;
    bottom: -9rem;
    width: 18rem;
    height: 18rem;
    border: 2rem solid rgba(14, 165, 233, .09);
  }

  .vision-threads {
    position: absolute;
    z-index: -1;
    top: 1.1rem;
    right: 1.4rem;
    width: 12rem;
    height: 8rem;
    opacity: .7;
    pointer-events: none;
  }

  .vision-threads span {
    position: absolute;
    width: 11rem;
    height: 5.2rem;
    border: 2px solid rgba(14, 165, 233, .26);
    border-bottom: 0;
    border-left: 0;
    border-radius: 0 100% 0 0;
    transform: rotate(-22deg);
  }

  .vision-threads span:nth-child(1) { top: .2rem; right: .2rem; }
  .vision-threads span:nth-child(2) { top: 1.35rem; right: 1.5rem; border-color: rgba(16, 185, 129, .30); }
  .vision-threads span:nth-child(3) { top: 2.5rem; right: 2.8rem; border-color: rgba(15, 76, 129, .20); }

  .vision-main-label {
    position: relative;
    display: inline-block;
    margin-bottom: 1.2rem;
    color: #10315a;
    font-family: 'Poppins', sans-serif;
    font-size: clamp(2.35rem, 5vw, 4.25rem);
    font-weight: 800;
    letter-spacing: -.055em;
    line-height: 1;
  }

  .vision-main-label::after {
    content: '';
    position: absolute;
    right: 5%;
    bottom: -.65rem;
    left: 5%;
    height: .28rem;
    border-radius: 999px;
    background: linear-gradient(90deg, #10b981, #38bdf8);
  }

  .vision-statement {
    max-width: 58rem;
    margin: 1.7rem auto 1.35rem;
    color: #4a5d75;
    font-size: clamp(1.05rem, 1.8vw, 1.35rem);
    font-weight: 500;
    line-height: 1.8;
  }

  .mission-panel {
    overflow: hidden;
    border: 1px solid #e3e9f0;
    border-radius: 1.4rem;
    background: #fff;
    box-shadow: 0 18px 38px rgba(25, 47, 78, .09);
  }

  .mission-panel-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.65rem 1.75rem;
    color: #fff;
    background: linear-gradient(120deg, #132f52 0%, #155e75 100%);
  }

  .mission-header-icon {
    display: grid;
    width: 3rem;
    height: 3rem;
    flex: 0 0 3rem;
    place-items: center;
    border-radius: .95rem;
    color: #073b4c;
    background: linear-gradient(145deg, #a7f3d0, #5eead4);
    box-shadow: inset 1px 1px 1px rgba(255, 255, 255, .7), 0 7px 14px rgba(0, 0, 0, .16);
  }

  .mission-panel-header span {
    display: block;
    margin-bottom: .2rem;
    color: #9ee7db;
    font-size: .67rem;
    font-weight: 800;
    letter-spacing: .14em;
  }

  .mission-panel-header h3 {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    font-size: 1.4rem;
    font-weight: 700;
  }

  .mission-list {
    display: grid;
    gap: .7rem;
    margin: 0;
    padding: 1.1rem;
    list-style: none;
    counter-reset: mission;
  }

  .mission-list li {
    display: grid;
    grid-template-columns: 2.7rem minmax(0, 1fr);
    align-items: start;
    gap: .85rem;
    padding: .85rem;
    border: 1px solid #edf1f5;
    border-radius: .85rem;
    background: linear-gradient(105deg, #f8fbfc, #ffffff);
    transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
  }

  .mission-list li:hover {
    border-color: #a7f3d0;
    box-shadow: 0 8px 17px rgba(19, 94, 117, .09);
    transform: translateX(4px);
  }

  .mission-number {
    display: grid;
    width: 2.35rem;
    height: 2.35rem;
    place-items: center;
    border-radius: .72rem;
    color: #047857;
    background: #d1fae5;
    font-size: .75rem;
    font-weight: 800;
    letter-spacing: .03em;
  }

  .mission-list li:nth-child(2) .mission-number { color: #0369a1; background: #e0f2fe; }
  .mission-list li:nth-child(3) .mission-number { color: #6d28d9; background: #ede9fe; }
  .mission-list li:nth-child(4) .mission-number { color: #b45309; background: #fef3c7; }
  .mission-list li:nth-child(5) .mission-number { color: #be123c; background: #ffe4e6; }

  .mission-list p {
    margin: .18rem 0 0;
    color: #475569;
    font-size: .84rem;
    line-height: 1.55;
  }

  .core-values-panel {
    position: relative;
    overflow: hidden;
    padding: 1.6rem;
    border: 1px solid rgba(148, 163, 184, .28);
    border-radius: 1.4rem;
    color: #fff;
    background: linear-gradient(145deg, #10243f 0%, #172f4a 52%, #0f4c5c 100%);
    box-shadow: 0 18px 38px rgba(15, 35, 64, .18), inset 0 1px 0 rgba(255, 255, 255, .13);
  }

  .core-values-panel::before,
  .core-values-panel::after {
    content: '';
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
  }

  .core-values-panel::before {
    top: -7rem;
    right: -4rem;
    width: 16rem;
    height: 16rem;
    background: radial-gradient(circle, rgba(56, 189, 248, .17), transparent 66%);
  }

  .core-values-panel::after {
    bottom: -8rem;
    left: -5rem;
    width: 15rem;
    height: 15rem;
    background: radial-gradient(circle, rgba(16, 185, 129, .14), transparent 66%);
  }

  .core-values-heading {
    position: relative;
    z-index: 1;
    margin-bottom: 1.15rem;
  }

  .core-values-heading h3 {
    margin: 0;
    color: #f8fafc;
    font-family: 'Poppins', sans-serif;
    font-size: 1.3rem;
    font-weight: 700;
  }

  .core-values-heading i { margin-right: .45rem; color: #fbbf24; }

  .core-value-card {
    position: relative;
    z-index: 1;
    overflow: hidden;
    margin-bottom: .8rem;
    padding: 1rem 1.05rem;
    border: 1px solid rgba(255, 255, 255, .14);
    border-radius: .95rem;
    background: linear-gradient(120deg, rgba(255, 255, 255, .13), rgba(255, 255, 255, .045));
    box-shadow: inset 1px 1px 1px rgba(255, 255, 255, .16), 0 8px 15px rgba(0, 0, 0, .10);
    backdrop-filter: blur(9px);
    -webkit-backdrop-filter: blur(9px);
    transition: transform .25s ease, border-color .25s ease, box-shadow .25s ease;
  }

  .core-value-card::after {
    content: '';
    position: absolute;
    top: -45%;
    left: -130%;
    width: 46%;
    height: 190%;
    background: linear-gradient(100deg, transparent 0%, rgba(255, 255, 255, 0) 20%, rgba(255, 255, 255, .5) 50%, rgba(255, 255, 255, 0) 80%, transparent 100%);
    transform: rotate(15deg);
    animation: core-glass-shine 10s ease-in-out infinite;
    pointer-events: none;
  }

  .core-value-card:last-child { margin-bottom: 0; }
  .core-value-card:hover { border-color: rgba(255, 255, 255, .31); transform: translateY(-3px); }
  .core-value-card h5 { position: relative; z-index: 1; font-size: .98rem; }
  .core-value-card p { position: relative; z-index: 1; color: rgba(235, 245, 255, .83); line-height: 1.55; }
  .core-value-card:nth-of-type(3)::after { animation-delay: 2.1s; }
  .core-value-card:nth-of-type(4)::after { animation-delay: 4.2s; }
  .core-value-card:nth-of-type(5)::after { animation-delay: 6.3s; }

  @keyframes core-glass-shine {
    0%, 66% { left: -130%; opacity: 0; }
    69% { opacity: .25; }
    79% { left: 150%; opacity: .7; }
    82%, 100% { left: 150%; opacity: 0; }
  }

  @media (max-width: 575.98px) {
    .vision-primary-card { padding: 2.6rem 1.4rem 2.2rem; border-radius: 1.25rem; }
    .vision-statement { line-height: 1.7; }
    .vision-threads { right: -3.5rem; opacity: .45; }
    .mission-panel-header { padding: 1.35rem; }
    .mission-list { padding: .85rem; }
    .core-values-panel { padding: 1.2rem; }
  }
</style>

<?php include __DIR__ . '/../partials/footer.php'; ?>
