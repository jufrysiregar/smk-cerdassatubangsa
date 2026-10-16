<?php
require_once __DIR__ . '/../koneksi.php';

$page_title = "Rekayasa Perangkat Lunak (RPL)";
$active_page = "program_rpl";

include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/navbar.php';
?>

<!-- Header Banner Futuristik dengan Breadcrumb -->
<section class="jurusan-hero-section rpl-theme">
  <!-- Breadcrumb Integrasi -->
  <nav aria-label="breadcrumb" class="jurusan-breadcrumb-nav">
    <ol class="breadcrumb breadcrumb-custom mb-0">
      <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Beranda</a></li>
      <li class="breadcrumb-item">Program Keahlian</li>
      <li class="breadcrumb-item active" aria-current="page">RPL</li>
    </ol>
  </nav>

  <div class="container text-center position-relative" style="z-index: 2;">
    <h1 class="jurusan-hero-title" data-aos="fade-up" data-aos-delay="100">
      Rekayasa Perangkat Lunak (RPL)
    </h1>
    <p class="jurusan-hero-subtitle" data-aos="fade-up" data-aos-delay="150">
      Menguasai Arsitektur Pemrograman Modern, Pengembangan Aplikasi Web &amp; Mobile, serta Pengujian Perangkat Lunak Skala Industri.
    </p>

    <!-- Badge Jurusan — di bawah subtitle -->
    <div class="d-inline-flex flex-wrap justify-content-center align-items-center gap-2 mt-4" data-aos="fade-up" data-aos-delay="200">
      <span class="jurusan-badge-code">PROGRAM KEAHLIAN DIGITAL</span>
      <span class="jurusan-badge-akreditasi"><i class="fas fa-certificate text-warning me-1"></i> Akreditasi A Unggul</span>
      <span class="jurusan-badge-mitra"><i class="fas fa-code-branch text-info me-1"></i> Kurikulum Startup &amp; Industri</span>
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
          <h2 class="jurusan-section-title mb-3">Tentang Jurusan RPL</h2>
          <p class="jurusan-overview-text">
            Rekayasa Perangkat Lunak (RPL) adalah jurusan yang mendalami cara-cara pengembangan perangkat lunak, meliputi pembuatan, pemeliharaan, manajemen kualitas, dan manajemen organisasi pembangunan perangkat lunak. Siswa diajarkan cara membuat aplikasi berbasis web, mobile (smartphone), maupun sistem desktop yang fungsional.
          </p>
          <div class="jurusan-focus-tags">
            <span class="focus-tag"><i class="fas fa-check-circle text-primary me-1"></i> Logika &amp; Algoritma Pemrograman</span>
            <span class="focus-tag"><i class="fas fa-check-circle text-primary me-1"></i> Fullstack Web Development</span>
            <span class="focus-tag"><i class="fas fa-check-circle text-primary me-1"></i> Mobile App Development</span>
            <span class="focus-tag"><i class="fas fa-check-circle text-primary me-1"></i> Database Architecture &amp; QA Testing</span>
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <div class="jurusan-logo-wrapper mx-auto">
            <div class="jurusan-logo-glow"></div>
            <img src="<?= BASE_URL ?>assets/img/smk/RPL.jpg" alt="Logo Jurusan RPL" class="jurusan-logo-round jurusan-logo-xl">
          </div>
        </div>
      </div>
    </div>

    <!-- 2. SILABUS KEGIATAN BELAJAR MENGAJAR (KBM) -->
    <div class="mb-5">
      <div class="text-center max-w-750 mx-auto mb-5" data-aos="fade-up">
        <h2 class="jurusan-section-title">Silabus Kegiatan Belajar Mengajar (KBM)</h2>
        <div class="jurusan-title-line"></div>
        <p class="text-muted mt-2">Kurikulum vokasi berbasis industri software engineering global dengan pembiasaan standar clean code dan git workflow.</p>
      </div>

      <div class="row g-4">
        <!-- Modul 1 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50">
          <div class="silabus-card h-100">
            <div class="silabus-card-top">
              <span class="silabus-num">01</span>
              <div class="silabus-icon-wrap"><i class="fas fa-brain"></i></div>
            </div>
            <h4 class="silabus-title">Pemrograman Dasar</h4>
            <p class="silabus-desc">Memahami logika pemrograman, algoritma dasar, flowchart, serta penggunaan bahasa pemrograman awal (seperti Python atau JavaScript dasar).</p>
          </div>
        </div>

        <!-- Modul 2 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="silabus-card h-100">
            <div class="silabus-card-top">
              <span class="silabus-num">02</span>
              <div class="silabus-icon-wrap"><i class="fas fa-cubes"></i></div>
            </div>
            <h4 class="silabus-title">Pemrograman Berorientasi Objek (PBO)</h4>
            <p class="silabus-desc">Mempelajari konsep kelas, objek, pewarisan, dan enkapsulasi dalam bahasa pemrograman populer (Java/C++).</p>
          </div>
        </div>

        <!-- Modul 3 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
          <div class="silabus-card h-100">
            <div class="silabus-card-top">
              <span class="silabus-num">03</span>
              <div class="silabus-icon-wrap"><i class="fas fa-database"></i></div>
            </div>
            <h4 class="silabus-title">Basis Data (Database)</h4>
            <p class="silabus-desc">Perancangan tabel basis data, relasi antar data, serta penggunaan bahasa SQL (MySQL/PostgreSQL) untuk pengolahan data aplikasi.</p>
          </div>
        </div>

        <!-- Modul 4 -->
        <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="silabus-card h-100">
            <div class="silabus-card-top">
              <span class="silabus-num">04</span>
              <div class="silabus-icon-wrap"><i class="fas fa-mobile-screen-button"></i></div>
            </div>
            <h4 class="silabus-title">Pemrograman Web &amp; Perangkat Bergerak (Mobile)</h4>
            <p class="silabus-desc">Pembuatan website interaktif (HTML, CSS, JavaScript, PHP/Node.js) serta dasar pembuatan aplikasi Android (Flutter/Kotlin).</p>
          </div>
        </div>

        <!-- Modul 5 -->
        <div class="col-md-12 col-lg-6" data-aos="fade-up" data-aos-delay="250">
          <div class="silabus-card h-100">
            <div class="silabus-card-top">
              <span class="silabus-num">05</span>
              <div class="silabus-icon-wrap"><i class="fas fa-bug"></i></div>
            </div>
            <h4 class="silabus-title">Pengujian Perangkat Lunak (QA/Testing) &amp; Git</h4>
            <p class="silabus-desc">Pengujian fungsionalitas program (bug testing) dan kolaborasi kode menggunakan sistem kontrol versi (Git/GitHub).</p>
          </div>
        </div>
      </div>
    </div>

    <!-- 3. PELUANG / PROSPEK KARIR -->
    <div class="mb-5">
      <div class="text-center max-w-750 mx-auto mb-5" data-aos="fade-up">
        <h2 class="jurusan-section-title">Peluang / Prospek Karir</h2>
        <div class="jurusan-title-line"></div>
        <p class="text-muted mt-2">Lulusan RPL SMK Cerdas Satu Bangsa memiliki prospek kerja luas di industri startup, software house, tech company multinasional, dan perbankan digital.</p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Karir 1 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50">
          <div class="karir-pathway-card">
            <div class="karir-pathway-icon"><i class="fas fa-code"></i></div>
            <div class="karir-pathway-content">
              <span class="karir-pathway-badge">Web Engineering</span>
              <h4 class="karir-pathway-name">Junior Web Developer / Programmer</h4>
              <p class="karir-pathway-desc">Membangun website responsif, REST API backend, dan antarmuka web interaktif untuk berbagai sektor bisnis.</p>
            </div>
          </div>
        </div>

        <!-- Karir 2 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="karir-pathway-card">
            <div class="karir-pathway-icon"><i class="fas fa-mobile-android"></i></div>
            <div class="karir-pathway-content">
              <span class="karir-pathway-badge">Mobile Engineering</span>
              <h4 class="karir-pathway-name">Junior Mobile App Developer</h4>
              <p class="karir-pathway-desc">Mengembangkan aplikasi smartphone Android dan iOS berbasis Flutter atau native untuk kebutuhan pengguna modern.</p>
            </div>
          </div>
        </div>

        <!-- Karir 3 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
          <div class="karir-pathway-card">
            <div class="karir-pathway-icon"><i class="fas fa-vial-circle-check"></i></div>
            <div class="karir-pathway-content">
              <span class="karir-pathway-badge">Quality Assurance</span>
              <h4 class="karir-pathway-name">QA (Quality Assurance) Tester Junior</h4>
              <p class="karir-pathway-desc">Menjalankan pengujian fungsionalitas fitur aplikasi, mendeteksi error/bug tampilan, dan mencatat laporan evaluasi mutu sistem.</p>
            </div>
          </div>
        </div>

        <!-- Karir 4 -->
        <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="karir-pathway-card">
            <div class="karir-pathway-icon"><i class="fas fa-table"></i></div>
            <div class="karir-pathway-content">
              <span class="karir-pathway-badge">Data Management</span>
              <h4 class="karir-pathway-name">Database Support / Data Entry Administrator</h4>
              <p class="karir-pathway-desc">Mengelola integritas relasi tabel basis data perusahaan, optimasi query SQL, serta perawatan backup data digital.</p>
            </div>
          </div>
        </div>

        <!-- Karir 5 -->
        <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="250">
          <div class="karir-pathway-card">
            <div class="karir-pathway-icon"><i class="fas fa-file-code"></i></div>
            <div class="karir-pathway-content">
              <span class="karir-pathway-badge">Technical Operation</span>
              <h4 class="karir-pathway-name">Software Documentation &amp; Support Staff</h4>
              <p class="karir-pathway-desc">Menyusun manual teknis dan dokumentasi rilis fitur software untuk kemudahan kolaborasi tim developer dan pengguna.</p>
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
        <p class="text-muted mt-2">Lulusan RPL yang ingin memperdalam ilmu sains data dan rekayasa perangkat lunak lanjutan dapat memilih fakultas berikut:</p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Fakultas Utama -->
        <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
          <div class="kuliah-faculty-card">
            <div class="faculty-card-header">
              <div class="faculty-icon"><i class="fas fa-laptop-code"></i></div>
              <div>
                <h3 class="faculty-name">Fakultas Ilmu Komputer / Fakultas Teknologi Informasi</h3>
              </div>
            </div>
            <div class="faculty-card-body">
              <p class="faculty-lead">Program studi lanjutan yang sangat linier dengan penguasaan koding, arsitektur software, dan teknologi kecerdasan buatan:</p>
              
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="prodi-item-box">
                    <div class="prodi-item-icon"><i class="fas fa-circle-check text-primary"></i></div>
                    <div>
                      <strong>S1 Rekayasa Perangkat Lunak (Software Engineering)</strong>
                      <span>Mendalami metodologi pengembangan software skala besar, cloud native, microservices, dan arsitektur enterprise.</span>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="prodi-item-box">
                    <div class="prodi-item-icon"><i class="fas fa-circle-check text-primary"></i></div>
                    <div>
                      <strong>S1 Teknik Informatika</strong>
                      <span>Fokus pada rekayasa algoritma tingkat tinggi, kecerdasan buatan (AI), machine learning, dan komputasi sains.</span>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="prodi-item-box">
                    <div class="prodi-item-icon"><i class="fas fa-circle-check text-primary"></i></div>
                    <div>
                      <strong>S1 Ilmu Komputer (Computer Science)</strong>
                      <span>Mendalami fondasi teoretis komputasi, struktur data kompleks, kompilator, dan keamanan siber lanjutan.</span>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="prodi-item-box">
                    <div class="prodi-item-icon"><i class="fas fa-circle-check text-primary"></i></div>
                    <div>
                      <strong>S1 Sistem Informasi / Bisnis Digital</strong>
                      <span>Menghubungkan arsitektur software dan database dengan analisis kebutuhan proses bisnis serta transformasi digital perusahaan.</span>
                    </div>
                  </div>
                </div>
              </div>

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
          <h3 class="cta-title mb-2">Siap Menjadi Software Developer Andal?</h3>
          <p class="cta-desc mb-0">
            Bergabunglah dengan Program Keahlian Rekayasa Perangkat Lunak (RPL) SMK Cerdas Satu Bangsa. Praktik langsung dengan kurikulum industri dan bimbingan mentor praktisi teknologi.
          </p>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
          <div class="d-inline-flex flex-wrap justify-content-center justify-content-lg-end gap-3">
            <a href="<?= BASE_URL ?>ppdb/informasi.php" class="btn-cta-jurusan btn-cta-primary">
              <i class="fas fa-file-signature me-1"></i> Info &amp; Alur PPDB
            </a>
            <a href="<?= BASE_URL ?>alumni/karir.php" class="btn-cta-jurusan btn-cta-secondary">
              <i class="fas fa-briefcase me-1"></i> Bursa Karir RPL
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<style>
/* ── Universal Theme Variables & Layout ── */
.rpl-theme {
  --primary-accent: #2563EB;
  --secondary-accent: #3B82F6;
  --glow-color: rgba(37, 99, 235, 0.4);
  --hero-gradient: linear-gradient(135deg, #1E3A8A 0%, #1D4ED8 45%, #0F172A 100%);
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
  color: #DBEAFE;
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
  background: linear-gradient(180deg, #FFFFFF 0%, #BFDBFE 100%);
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
  background: #EFF6FF;
  border: 1px solid #BFDBFE;
  color: #1E40AF;
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
  background: linear-gradient(90deg, #2563EB 0%, #3B82F6 100%);
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
  background: linear-gradient(135deg, #1E3A8A 0%, #0F172A 100%);
  color: #FFFFFF;
  border-radius: 18px;
  padding: 28px 22px;
  text-align: center;
  box-shadow: 0 12px 28px rgba(30, 58, 138, 0.25);
}
.stat-badge-icon {
  font-size: 2.2rem;
  color: #60A5FA;
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
  color: #93C5FD;
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
  border-color: #BFDBFE;
  box-shadow: 0 16px 32px -8px rgba(37, 99, 235, 0.12), 0 4px 12px rgba(15, 23, 42, 0.04);
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
  background: #EFF6FF;
  color: #2563EB;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 1.15rem;
  transition: all 0.3s ease;
}
.silabus-card:hover .silabus-icon-wrap {
  background: #2563EB;
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
  border-color: #93C5FD;
  box-shadow: 0 14px 28px -6px rgba(37, 99, 235, 0.12);
}
.karir-pathway-icon {
  width: 48px;
  height: 48px;
  border-radius: 12px;
  background: #0F172A;
  color: #60A5FA;
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
  color: #2563EB;
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
  padding: 32px 28px;
  box-shadow: 0 8px 24px rgba(15, 23, 42, 0.04);
  transition: all 0.3s ease;
}
.kuliah-faculty-card:hover {
  border-color: #BFDBFE;
  box-shadow: 0 16px 36px rgba(37, 99, 235, 0.1);
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
  background: linear-gradient(135deg, #2563EB 0%, #1E3A8A 100%);
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
  color: #2563EB;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  display: block;
}
.faculty-name {
  font-family: 'Poppins', sans-serif;
  font-size: 1.15rem;
  font-weight: 800;
  color: #0F172A;
  margin: 2px 0 0;
  line-height: 1.3;
}
.faculty-lead {
  font-size: 0.86rem;
  color: #475569;
  margin-bottom: 20px;
  line-height: 1.55;
}
.prodi-item-box {
  background: #F8FAFC;
  border: 1px solid #E2E8F0;
  border-radius: 12px;
  padding: 14px 16px;
  display: flex;
  align-items: flex-start;
  gap: 12px;
  height: 100%;
  transition: border-color 0.2s ease, background 0.2s ease;
}
.prodi-item-box:hover {
  border-color: #93C5FD;
  background: #EFF6FF;
}
.prodi-item-icon {
  font-size: 1rem;
  margin-top: 2px;
  flex-shrink: 0;
}
.prodi-item-box strong {
  display: block;
  font-family: 'Poppins', sans-serif;
  font-size: 0.88rem;
  color: #0F172A;
  margin-bottom: 2px;
}
.prodi-item-box span {
  display: block;
  font-size: 0.78rem;
  color: #64748B;
  line-height: 1.45;
}

/* ── CTA Card ── */
.jurusan-cta-card {
  background: linear-gradient(135deg, #1E3A8A 0%, #1D4ED8 50%, #0F172A 100%);
  color: #FFFFFF;
  border-radius: 20px;
  box-shadow: 0 20px 45px rgba(30, 58, 138, 0.25);
  position: relative;
  overflow: hidden;
}
.cta-pill-badge {
  display: inline-flex;
  align-items: center;
  background: rgba(255, 255, 255, 0.15);
  color: #60A5FA;
  border: 1px solid rgba(96, 165, 250, 0.3);
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
  background: #3B82F6;
  color: #FFFFFF;
  box-shadow: 0 4px 14px rgba(59, 130, 246, 0.35);
}
.btn-cta-primary:hover {
  background: #60A5FA;
  color: #FFFFFF;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(59, 130, 246, 0.45);
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
