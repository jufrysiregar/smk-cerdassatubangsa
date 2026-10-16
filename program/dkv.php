<?php
require_once __DIR__ . '/../koneksi.php';

$page_title = "Desain Komunikasi Visual (DKV)";
$active_page = "program_dkv";

include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/navbar.php';
?>

<!-- Header Banner Futuristik dengan Breadcrumb -->
<section class="jurusan-hero-section dkv-theme">
  <!-- Breadcrumb Integrasi -->
  <nav aria-label="breadcrumb" class="jurusan-breadcrumb-nav">
    <ol class="breadcrumb breadcrumb-custom mb-0">
      <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Beranda</a></li>
      <li class="breadcrumb-item">Program Keahlian</li>
      <li class="breadcrumb-item active" aria-current="page">DKV</li>
    </ol>
  </nav>

  <div class="container text-center position-relative" style="z-index: 2;">
    <h1 class="jurusan-hero-title" data-aos="fade-up" data-aos-delay="100">
      Desain Komunikasi Visual (DKV)
    </h1>
    <p class="jurusan-hero-subtitle" data-aos="fade-up" data-aos-delay="150">
      Memadukan Seni Estetika, Ilustrasi Digital, Videografi, serta Desain Antarmuka Kreatif yang Berdaya Saing Komersial Global.
    </p>

    <!-- Badge Jurusan — di bawah subtitle -->
    <div class="d-inline-flex flex-wrap justify-content-center align-items-center gap-2 mt-4" data-aos="fade-up" data-aos-delay="200">
      <span class="jurusan-badge-code">PROGRAM KEAHLIAN KREATIF DIGITAL</span>
      <span class="jurusan-badge-akreditasi"><i class="fas fa-certificate text-warning me-1"></i> Akreditasi B (Baik Sekali)</span>
      <span class="jurusan-badge-mitra"><i class="fas fa-palette text-info me-1"></i> Studio Kreatif &amp; Lab Mac</span>
    </div>
  </div>
</section>

<!-- Main Content Section -->
<section class="jurusan-body-section py-5">
  <div class="container py-lg-3">

    <!-- 1. TENTANG JURUSAN (Overview Card Modern) -->
    <div class="jurusan-card-overview mb-5" data-aos="fade-up">
      <div class="row align-items-center g-4">
        <div class="col-lg-8">
          <h2 class="jurusan-section-title mb-3">Tentang Jurusan DKV</h2>
          <p class="jurusan-overview-text">
            Desain Komunikasi Visual (DKV) adalah jurusan yang mempelajari seni menyampaikan pesan secara visual melalui media cetak, digital, audio, maupun interaktif. Siswa diajarkan bagaimana memadukan unsur estetika, ilustrasi, tipografi, fotografi, dan teknologi digital untuk menciptakan karya kreatif yang bernilai komersial dan komunikatif.
          </p>
          <div class="jurusan-focus-tags">
            <span class="focus-tag"><i class="fas fa-check-circle text-purple me-1"></i> Sketsa &amp; Nirmana Dwimatra</span>
            <span class="focus-tag"><i class="fas fa-check-circle text-purple me-1"></i> Digital Illustration &amp; Tablet Art</span>
            <span class="focus-tag"><i class="fas fa-check-circle text-purple me-1"></i> Graphic Design &amp; Adobe CC</span>
            <span class="focus-tag"><i class="fas fa-check-circle text-purple me-1"></i> Videografi &amp; UI/UX Figma Design</span>
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <div class="jurusan-logo-wrapper mx-auto">
            <div class="jurusan-logo-glow"></div>
            <img src="<?= BASE_URL ?>assets/img/smk/DKV.jpg" alt="Logo Jurusan DKV" class="jurusan-logo-round jurusan-logo-xl">
          </div>
        </div>
      </div>
    </div>

    <!-- 2. SILABUS KEGIATAN BELAJAR MENGAJAR (KBM) -->
    <div class="mb-5">
      <div class="text-center max-w-750 mx-auto mb-5" data-aos="fade-up">
        <h2 class="jurusan-section-title">Silabus Kegiatan Belajar Mengajar (KBM)</h2>
        <div class="jurusan-title-line"></div>
        <p class="text-muted mt-2">Kurikulum kreatif aplikatif yang memadukan kepekaan estetika seni dengan penguasaan software grafis dan teknologi media modern.</p>
      </div>

      <div class="row g-4">
        <!-- Modul 1 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50">
          <div class="silabus-card h-100">
            <div class="silabus-card-top">
              <span class="silabus-num">01</span>
              <div class="silabus-icon-wrap"><i class="fas fa-shapes"></i></div>
            </div>
            <h4 class="silabus-title">Dasar-Dasar Seni Rupa &amp; Desain</h4>
            <p class="silabus-desc">Prinsip tata letak (layout), komposisi warna, nirmana dwimatra dan trimatra, serta pengenalan sketsa manual.</p>
          </div>
        </div>

        <!-- Modul 2 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="silabus-card h-100">
            <div class="silabus-card-top">
              <span class="silabus-num">02</span>
              <div class="silabus-icon-wrap"><i class="fas fa-pen-nib"></i></div>
            </div>
            <h4 class="silabus-title">Gambar Ilustrasi &amp; Digital Painting</h4>
            <p class="silabus-desc">Teknik menggambar digital menggunakan perangkat drawing tablet, ilustrasi vektor, dan pembuatan aset karakter 2D.</p>
          </div>
        </div>

        <!-- Modul 3 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
          <div class="silabus-card h-100">
            <div class="silabus-card-top">
              <span class="silabus-num">03</span>
              <div class="silabus-icon-wrap"><i class="fas fa-layer-group"></i></div>
            </div>
            <h4 class="silabus-title">Desain Grafis Percetakan &amp; Media Sosial</h4>
            <p class="silabus-desc">Pengoperasian software desain standar industri (Adobe Photoshop, Illustrator, CorelDraw, atau Canva Pro) untuk pembuatan poster, banner, dan feed media sosial.</p>
          </div>
        </div>

        <!-- Modul 4 -->
        <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="silabus-card h-100">
            <div class="silabus-card-top">
              <span class="silabus-num">04</span>
              <div class="silabus-icon-wrap"><i class="fas fa-video"></i></div>
            </div>
            <h4 class="silabus-title">Videografi &amp; Editing Video Dasar</h4>
            <p class="silabus-desc">Teknik pengambilan gambar dasar, pencahayaan, sudut kamera, serta penyuntingan video menggunakan software editor (Adobe Premiere Pro / CapCut Desktop).</p>
          </div>
        </div>

        <!-- Modul 5 -->
        <div class="col-md-12 col-lg-6" data-aos="fade-up" data-aos-delay="250">
          <div class="silabus-card h-100">
            <div class="silabus-card-top">
              <span class="silabus-num">05</span>
              <div class="silabus-icon-wrap"><i class="fas fa-object-group"></i></div>
            </div>
            <h4 class="silabus-title">UI/UX Design Dasar</h4>
            <p class="silabus-desc">Pengenalan dasar perancangan antarmuka aplikasi/website yang ramah pengguna menggunakan aplikasi desain kolaboratif (Figma).</p>
          </div>
        </div>
      </div>
    </div>

    <!-- 3. PELUANG / PROSPEK KARIR -->
    <div class="mb-5">
      <div class="text-center max-w-750 mx-auto mb-5" data-aos="fade-up">
        <h2 class="jurusan-section-title">Peluang / Prospek Karir</h2>
        <div class="jurusan-title-line"></div>
        <p class="text-muted mt-2">Kebutuhan talenta kreatif visual sangat tinggi di industri media massa, agensi periklanan, studio animasi, game developer, hingga startup teknologi.</p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Karir 1 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50">
          <div class="karir-pathway-card">
            <div class="karir-pathway-icon"><i class="fas fa-bezier-curve"></i></div>
            <div class="karir-pathway-content">
              <span class="karir-pathway-badge">Branding &amp; Advertising</span>
              <h4 class="karir-pathway-name">Junior Graphic Designer</h4>
              <p class="karir-pathway-desc">Merancang materi promosi visual, logo, brand guidelines, kemasan produk, dan materi publikasi cetak maupun digital.</p>
            </div>
          </div>
        </div>

        <!-- Karir 2 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="karir-pathway-card">
            <div class="karir-pathway-icon"><i class="fas fa-bullhorn"></i></div>
            <div class="karir-pathway-content">
              <span class="karir-pathway-badge">Digital Marketing</span>
              <h4 class="karir-pathway-name">Social Media Content Creator &amp; Designer</h4>
              <p class="karir-pathway-desc">Memproduksi konten visual feeds, carousel edukatif, serta aset grafis campaign untuk menaikkan engagement brand.</p>
            </div>
          </div>
        </div>

        <!-- Karir 3 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
          <div class="karir-pathway-card">
            <div class="karir-pathway-icon"><i class="fas fa-palette"></i></div>
            <div class="karir-pathway-content">
              <span class="karir-pathway-badge">Ilustrasi &amp; Art</span>
              <h4 class="karir-pathway-name">Digital Content Illustrator</h4>
              <p class="karir-pathway-desc">Membuat ilustrasi buku anak, aset karakter game 2D, vektor, dan visual storytelling menggunakan drawing pen tablet.</p>
            </div>
          </div>
        </div>

        <!-- Karir 4 -->
        <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="karir-pathway-card">
            <div class="karir-pathway-icon"><i class="fas fa-clapperboard"></i></div>
            <div class="karir-pathway-content">
              <span class="karir-pathway-badge">Multimedia &amp; Broadcast</span>
              <h4 class="karir-pathway-name">Junior Video Editor &amp; Motion Graphic Assistant</h4>
              <p class="karir-pathway-desc">Memotong dan menyusun rekaman video, color grading dasar, sound effect, serta animasi teks untuk kebutuhan video promosi.</p>
            </div>
          </div>
        </div>

        <!-- Karir 5 -->
        <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="250">
          <div class="karir-pathway-card">
            <div class="karir-pathway-icon"><i class="fas fa-compass-drafting"></i></div>
            <div class="karir-pathway-content">
              <span class="karir-pathway-badge">Product Design</span>
              <h4 class="karir-pathway-name">UI/UX Design Assistant / Wireframe Creator</h4>
              <p class="karir-pathway-desc">Menyusun kerangka kawat tata letak tombol antarmuka aplikasi/website di Figma yang mudah dioperasikan pengguna.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 4. REFERENSI JURUSAN & FAKULTAS KULIAH LANJUTAN -->
    <div class="mb-5">
      <div class="text-center max-w-750 mx-auto mb-5" data-aos="fade-up">
        <h2 class="jurusan-section-title">Referensi Jurusan &amp; Fakultas Kuliah Lanjutan</h2>
        <div class="jurusan-title-line"></div>
        <p class="text-muted mt-2">Bagi siswa DKV yang ingin mendalami dunia seni rupa, desain murni, maupun media kreatif digital, pilihan fakultas yang tepat meliputi:</p>
      </div>

      <div class="row g-4">
        <!-- Fakultas 1 -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="kuliah-faculty-card h-100">
            <div class="faculty-card-header">
              <div class="faculty-icon"><i class="fas fa-paintbrush"></i></div>
              <div>
                <h3 class="faculty-name">Fakultas Seni Rupa dan Desain (FSRD)</h3>
              </div>
            </div>
            <div class="faculty-card-body">
              <p class="faculty-lead">Program studi favorit yang memperdalam estetika seni visual, branding, dan perancangan ruang/produk:</p>
              <ul class="faculty-prodi-list">
                <li>
                  <i class="fas fa-circle-check text-purple"></i>
                  <div>
                    <strong>S1 Desain Komunikasi Visual (DKV)</strong>
                    <span>Studi lanjutan perancangan komunikasi grafis komprehensif, psikologi persepsi visual, dan art directing.</span>
                  </div>
                </li>
                <li>
                  <i class="fas fa-circle-check text-purple"></i>
                  <div>
                    <strong>S1 Seni Rupa Murni / Kriya Seni</strong>
                    <span>Pendalaman karya seni lukis, patung, seni grafis kontemporer, dan eksplorasi material kriya artistik.</span>
                  </div>
                </li>
                <li>
                  <i class="fas fa-circle-check text-purple"></i>
                  <div>
                    <strong>S1 Desain Interior / Desain Produk</strong>
                    <span>Perancangan estetika ruang hunian/komersial serta inovasi bentuk fisik produk industri bernilai jual tinggi.</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Fakultas 2 -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="kuliah-faculty-card h-100">
            <div class="faculty-card-header">
              <div class="faculty-icon"><i class="fas fa-film"></i></div>
              <div>
                <h3 class="faculty-name">Fakultas Industri Kreatif / Fakultas Ilmu Komunikasi</h3>
              </div>
            </div>
            <div class="faculty-card-body">
              <p class="faculty-lead">Program studi industri hiburan dan media digital yang berfokus pada storytelling, film, dan game design:</p>
              <ul class="faculty-prodi-list">
                <li>
                  <i class="fas fa-circle-check text-purple"></i>
                  <div>
                    <strong>S1 Animasi &amp; Film</strong>
                    <span>Memperdalam produksi animasi 2D/3D, karakter rigging, storyboard storytelling, dan penyutradaraan animasi.</span>
                  </div>
                </li>
                <li>
                  <i class="fas fa-circle-check text-purple"></i>
                  <div>
                    <strong>S1 Televisi dan Film (TvF)</strong>
                    <span>Mendalami manajemen produksi sinematografi, penataan kamera, tata artistik layar lebar, dan penulisan naskah.</span>
                  </div>
                </li>
                <li>
                  <i class="fas fa-circle-check text-purple"></i>
                  <div>
                    <strong>S1 Desain Game (Game Art/Design)</strong>
                    <span>Perancangan aset visual game, level environment 3D, konsep karakter hero, dan interaktivitas pemain game.</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 5. CTA PENDAFTARAN & KONSULTASI -->
    <div class="jurusan-cta-card mt-5 p-4 p-lg-5" data-aos="fade-up">
      <div class="row align-items-center g-4">
        <div class="col-lg-8 text-center text-lg-start">
          <span class="cta-pill-badge mb-2">
            <i class="fas fa-rocket me-1"></i> PPDB TAHUN AJARAN 2026/2027
          </span>
          <h3 class="cta-title mb-2">Wujudkan Karya Visual Kreatifmu Bersama DKV!</h3>
          <p class="cta-desc mb-0">
            Bergabunglah dengan Desain Komunikasi Visual (DKV) SMK Cerdas Satu Bangsa. Didukung studio foto profesional, drawing pen tablet, serta iMac Lab berstandar agensi periklanan.
          </p>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
          <div class="d-inline-flex flex-wrap justify-content-center justify-content-lg-end gap-3">
            <a href="<?= BASE_URL ?>ppdb/informasi.php" class="btn-cta-jurusan btn-cta-primary">
              <i class="fas fa-file-signature me-1"></i> Info &amp; Alur PPDB
            </a>
            <a href="<?= BASE_URL ?>alumni/karir.php" class="btn-cta-jurusan btn-cta-secondary">
              <i class="fas fa-briefcase me-1"></i> Bursa Karir DKV
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<style>
/* ── Universal Theme Variables & Layout ── */
.dkv-theme {
  --primary-accent: #7C3AED;
  --secondary-accent: #A855F7;
  --glow-color: rgba(168, 85, 247, 0.4);
  --hero-gradient: linear-gradient(135deg, #4C1D95 0%, #6D28D9 45%, #0F172A 100%);
}

.text-purple {
  color: #9333EA !important;
}

/* ── Hero Section ── */
.jurusan-hero-section {
  background: var(--hero-gradient);
  color: #FFFFFF;
  padding: 60px 0 50px;
  position: relative;
  overflow: hidden;
}
.jurusan-hero-section::before {
  content: "";
  position: absolute;
  top: -40%;
  right: -10%;
  width: 600px;
  height: 600px;
  background: radial-gradient(circle, var(--glow-color) 0%, transparent 70%);
  border-radius: 50%;
  pointer-events: none;
}
.jurusan-breadcrumb-nav {
  position: absolute;
  top: 22px;
  right: clamp(16px, 2vw, 32px);
  z-index: 5;
}
@media (max-width: 768px) {
  .jurusan-breadcrumb-nav {
    position: static;
    display: flex;
    justify-content: center;
    margin-bottom: 16px;
  }
}

/* ── Logo Bulat Futuristik ── */
.jurusan-logo-wrapper {
  position: relative;
  display: inline-block;
}
.jurusan-logo-round {
  width: 135px;
  height: 135px;
  border-radius: 50%;
  object-fit: cover;
  aspect-ratio: 1 / 1;
  border: 4px solid #FFFFFF;
  box-shadow: 0 4px 16px rgba(15, 23, 42, 0.2);
  position: relative;
  z-index: 2;
  background: #FFFFFF;
  padding: 3px;
}
.jurusan-logo-round:hover {
  box-shadow: 0 6px 20px rgba(15, 23, 42, 0.25);
}
.jurusan-logo-glow {
  display: none;
}
.jurusan-logo-xl {
  width: 190px !important;
  height: 190px !important;
}

/* ── Hero Badges & Typography ── */
.jurusan-badge-code {
  background: rgba(255, 255, 255, 0.12);
  border: 1px solid rgba(255, 255, 255, 0.25);
  color: #F3E8FF;
  font-family: 'Poppins', sans-serif;
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.8px;
  padding: 4px 12px;
  border-radius: 50px;
}
.jurusan-badge-akreditasi,
.jurusan-badge-mitra {
  background: rgba(15, 23, 42, 0.6);
  border: 1px solid rgba(255, 255, 255, 0.15);
  color: #FFFFFF;
  font-family: 'Poppins', sans-serif;
  font-size: 0.72rem;
  font-weight: 600;
  padding: 4px 12px;
  border-radius: 50px;
  backdrop-filter: blur(8px);
}
.jurusan-hero-title {
  font-family: 'Poppins', sans-serif;
  font-size: 2.3rem;
  font-weight: 800;
  line-height: 1.25;
  margin-bottom: 12px;
  background: linear-gradient(180deg, #FFFFFF 0%, #E9D5FF 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.jurusan-hero-subtitle {
  font-family: 'Poppins', sans-serif;
  font-size: 0.98rem;
  color: #E2E8F0;
  max-width: 820px;
  margin: 0 auto;
  line-height: 1.6;
}

/* ── Section Titles ── */
.jurusan-section-pill {
  display: inline-flex;
  align-items: center;
  background: #FAF5FF;
  border: 1px solid #E9D5FF;
  color: #7E22CE;
  font-family: 'Poppins', sans-serif;
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.8px;
  padding: 4px 12px;
  border-radius: 50px;
}
.jurusan-section-title {
  font-family: 'Poppins', sans-serif;
  font-size: 1.75rem;
  font-weight: 800;
  color: #0F172A;
  margin-bottom: 8px;
}
.jurusan-title-line {
  width: 60px;
  height: 3.5px;
  background: linear-gradient(90deg, #7C3AED 0%, #C084FC 100%);
  border-radius: 4px;
  margin: 0 auto;
}

/* ── Overview Card ── */
.jurusan-card-overview {
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  border-radius: 20px;
  padding: 36px 32px;
  box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04);
}
.jurusan-overview-text {
  font-size: 0.95rem;
  color: #475569;
  line-height: 1.75;
  margin-bottom: 20px;
}
.jurusan-focus-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}
.focus-tag {
  background: #F8FAFC;
  border: 1px solid #E2E8F0;
  padding: 6px 14px;
  border-radius: 10px;
  font-size: 0.8rem;
  font-weight: 600;
  color: #1E293B;
  display: inline-flex;
  align-items: center;
}
.jurusan-stat-badge-box {
  background: linear-gradient(135deg, #4C1D95 0%, #0F172A 100%);
  color: #FFFFFF;
  border-radius: 18px;
  padding: 28px 22px;
  text-align: center;
  box-shadow: 0 12px 28px rgba(76, 29, 149, 0.25);
}
.stat-badge-icon {
  font-size: 2.2rem;
  color: #C084FC;
  margin-bottom: 8px;
}
.stat-badge-val {
  font-family: 'Poppins', sans-serif;
  font-size: 2.2rem;
  font-weight: 800;
  color: #FFFFFF;
  line-height: 1;
}
.stat-badge-lbl {
  font-family: 'Poppins', sans-serif;
  font-size: 0.85rem;
  font-weight: 700;
  color: #E9D5FF;
  margin-bottom: 8px;
}
.stat-badge-desc {
  font-size: 0.76rem;
  color: #CBD5E1;
  margin: 0;
  line-height: 1.45;
}

/* ── Silabus Cards ── */
.silabus-card {
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  border-radius: 16px;
  padding: 24px 22px;
  transition: all 0.3s ease;
  position: relative;
  display: flex;
  flex-direction: column;
}
.silabus-card:hover {
  transform: translateY(-5px);
  border-color: #E9D5FF;
  box-shadow: 0 16px 32px -8px rgba(124, 58, 237, 0.14), 0 4px 12px rgba(15, 23, 42, 0.04);
}
.silabus-card-top {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 16px;
}
.silabus-num {
  font-family: 'Poppins', sans-serif;
  font-size: 1.1rem;
  font-weight: 800;
  color: #94A3B8;
  letter-spacing: 0.5px;
}
.silabus-icon-wrap {
  width: 44px;
  height: 44px;
  border-radius: 12px;
  background: #FAF5FF;
  color: #7C3AED;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 1.15rem;
  transition: all 0.3s ease;
}
.silabus-card:hover .silabus-icon-wrap {
  background: #7C3AED;
  color: #FFFFFF;
  transform: scale(1.08);
}
.silabus-title {
  font-family: 'Poppins', sans-serif;
  font-size: 1rem;
  font-weight: 700;
  color: #0F172A;
  margin-bottom: 10px;
  line-height: 1.4;
}
.silabus-desc {
  font-size: 0.83rem;
  color: #64748B;
  line-height: 1.6;
  margin: 0;
}

/* ── Karir Pathway Cards ── */
.karir-pathway-card {
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  border-radius: 16px;
  padding: 22px 20px;
  display: flex;
  align-items: flex-start;
  gap: 16px;
  transition: all 0.3s ease;
  height: 100%;
}
.karir-pathway-card:hover {
  transform: translateY(-4px);
  border-color: #D8B4FE;
  box-shadow: 0 14px 28px -6px rgba(124, 58, 237, 0.12);
}
.karir-pathway-icon {
  width: 48px;
  height: 48px;
  border-radius: 12px;
  background: #0F172A;
  color: #C084FC;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 1.25rem;
  flex-shrink: 0;
  margin-top: 2px;
}
.karir-pathway-content {
  flex: 1;
}
.karir-pathway-badge {
  display: inline-block;
  font-family: 'Poppins', sans-serif;
  font-size: 0.68rem;
  font-weight: 700;
  color: #7C3AED;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  margin-bottom: 3px;
}
.karir-pathway-name {
  font-family: 'Poppins', sans-serif;
  font-size: 0.95rem;
  font-weight: 700;
  color: #0F172A;
  margin-bottom: 6px;
  line-height: 1.35;
}
.karir-pathway-desc {
  font-size: 0.8rem;
  color: #64748B;
  line-height: 1.5;
  margin: 0;
}

/* ── Fakultas & Kuliah Lanjutan Cards ── */
.kuliah-faculty-card {
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  border-radius: 20px;
  padding: 30px 26px;
  box-shadow: 0 8px 24px rgba(15, 23, 42, 0.04);
  transition: all 0.3s ease;
}
.kuliah-faculty-card:hover {
  border-color: #E9D5FF;
  box-shadow: 0 16px 36px rgba(124, 58, 237, 0.1);
}
.faculty-card-header {
  display: flex;
  align-items: flex-start;
  gap: 16px;
  padding-bottom: 20px;
  border-bottom: 1px solid #F1F5F9;
  margin-bottom: 20px;
}
.faculty-icon {
  width: 50px;
  height: 50px;
  border-radius: 14px;
  background: linear-gradient(135deg, #7C3AED 0%, #4C1D95 100%);
  color: #FFFFFF;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 1.35rem;
  flex-shrink: 0;
}
.faculty-type {
  font-family: 'Poppins', sans-serif;
  font-size: 0.72rem;
  font-weight: 700;
  color: #7C3AED;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  display: block;
}
.faculty-name {
  font-family: 'Poppins', sans-serif;
  font-size: 1.1rem;
  font-weight: 800;
  color: #0F172A;
  margin: 2px 0 0;
  line-height: 1.3;
}
.faculty-lead {
  font-size: 0.84rem;
  color: #475569;
  margin-bottom: 18px;
  line-height: 1.55;
}
.faculty-prodi-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 14px;
}
.faculty-prodi-list li {
  display: flex;
  align-items: flex-start;
  gap: 12px;
}
.faculty-prodi-list li i {
  font-size: 1rem;
  margin-top: 3px;
  flex-shrink: 0;
}
.faculty-prodi-list li strong {
  display: block;
  font-family: 'Poppins', sans-serif;
  font-size: 0.88rem;
  color: #0F172A;
  margin-bottom: 2px;
}
.faculty-prodi-list li span {
  display: block;
  font-size: 0.78rem;
  color: #64748B;
  line-height: 1.45;
}

/* ── CTA Card ── */
.jurusan-cta-card {
  background: linear-gradient(135deg, #4C1D95 0%, #6D28D9 50%, #0F172A 100%);
  color: #FFFFFF;
  border-radius: 20px;
  box-shadow: 0 20px 45px rgba(76, 29, 149, 0.25);
  position: relative;
  overflow: hidden;
}
.cta-pill-badge {
  display: inline-flex;
  align-items: center;
  background: rgba(255, 255, 255, 0.15);
  color: #C084FC;
  border: 1px solid rgba(192, 132, 252, 0.3);
  padding: 4px 12px;
  border-radius: 50px;
  font-family: 'Poppins', sans-serif;
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.5px;
}
.cta-title {
  font-family: 'Poppins', sans-serif;
  font-size: 1.5rem;
  font-weight: 800;
  color: #FFFFFF;
  line-height: 1.3;
}
.cta-desc {
  font-size: 0.88rem;
  color: #E2E8F0;
  line-height: 1.6;
}
.btn-cta-jurusan {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-family: 'Poppins', sans-serif;
  font-size: 0.85rem;
  font-weight: 600;
  padding: 10px 22px;
  border-radius: 12px;
  text-decoration: none;
  transition: all 0.25s ease;
  white-space: nowrap;
}
.btn-cta-primary {
  background: #C084FC;
  color: #3B0764;
  box-shadow: 0 4px 14px rgba(192, 132, 252, 0.35);
}
.btn-cta-primary:hover {
  background: #D8B4FE;
  color: #3B0764;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(192, 132, 252, 0.45);
}
.btn-cta-secondary {
  background: rgba(255, 255, 255, 0.12);
  color: #FFFFFF;
  border: 1px solid rgba(255, 255, 255, 0.25);
  backdrop-filter: blur(8px);
}
.btn-cta-secondary:hover {
  background: rgba(255, 255, 255, 0.22);
  color: #FFFFFF;
  transform: translateY(-2px);
}
</style>

<?php include __DIR__ . '/../partials/footer.php'; ?>
