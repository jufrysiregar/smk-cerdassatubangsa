<?php
require_once __DIR__ . '/../koneksi.php';

$page_title = "Teknik Komputer dan Jaringan (TKJ)";
$active_page = "program_tkj";

include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/navbar.php';
?>

<!-- Header Banner Futuristik dengan Breadcrumb -->
<section class="jurusan-hero-section tkj-theme">
  <!-- Breadcrumb Integrasi -->
  <nav aria-label="breadcrumb" class="jurusan-breadcrumb-nav">
    <ol class="breadcrumb breadcrumb-custom mb-0">
      <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Beranda</a></li>
      <li class="breadcrumb-item">Program Keahlian</li>
      <li class="breadcrumb-item active" aria-current="page">TKJ</li>
    </ol>
  </nav>

  <div class="container text-center position-relative" style="z-index: 2;">
    <h1 class="jurusan-hero-title" data-aos="fade-up" data-aos-delay="100">
      Teknik Komputer dan Jaringan (TKJ)
    </h1>
    <p class="jurusan-hero-subtitle" data-aos="fade-up" data-aos-delay="150">
      Membangun, Mengelola, dan Mengamankan Infrastruktur Komputer, Server Enterprise, serta Jaringan Internet Skala Luas.
    </p>

    <!-- Badge Jurusan — di bawah subtitle -->
    <div class="d-inline-flex flex-wrap justify-content-center align-items-center gap-2 mt-4" data-aos="fade-up" data-aos-delay="200">
      <span class="jurusan-badge-code">PROGRAM KEAHLIAN UNGGULAN</span>
      <span class="jurusan-badge-akreditasi"><i class="fas fa-certificate text-warning me-1"></i> Akreditasi A Unggul</span>
      <span class="jurusan-badge-mitra"><i class="fas fa-network-wired text-info me-1"></i> Standar Mikrotik Academy</span>
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
          <h2 class="jurusan-section-title mb-3">Tentang Jurusan TKJ</h2>
          <p class="jurusan-overview-text">
            Teknik Komputer dan Jaringan (TKJ) adalah jurusan kejuruan yang berfokus pada pemahaman tentang cara kerja komputer, perakitan perangkat keras, instalasi sistem operasi, dan pengoperasian jaringan komputer lokal (LAN) hingga internet skala luas (WAN). Jurusan ini mempersiapkan siswa agar mahir dalam membangun, mengelola, dan mengamankan infrastruktur teknologi informasi.
          </p>
          <div class="jurusan-focus-tags">
            <span class="focus-tag"><i class="fas fa-check-circle text-emerald me-1"></i> Hardware &amp; Troubleshooting</span>
            <span class="focus-tag"><i class="fas fa-check-circle text-emerald me-1"></i> Routing &amp; Switching Mikrotik</span>
            <span class="focus-tag"><i class="fas fa-check-circle text-emerald me-1"></i> Fiber Optic &amp; Server Linux</span>
            <span class="focus-tag"><i class="fas fa-check-circle text-emerald me-1"></i> Cybersecurity Fundamentals</span>
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <div class="jurusan-logo-wrapper mx-auto">
            <div class="jurusan-logo-glow"></div>
            <img src="<?= BASE_URL ?>assets/img/smk/TKJ.jpg" alt="Logo Jurusan TKJ" class="jurusan-logo-round jurusan-logo-xl">
          </div>
        </div>
      </div>
    </div>

    <!-- 2. SILABUS KEGIATAN BELAJAR MENGAJAR (KBM) -->
    <div class="mb-5">
      <div class="text-center max-w-750 mx-auto mb-5" data-aos="fade-up">
        <h2 class="jurusan-section-title">Silabus Kegiatan Belajar Mengajar (KBM)</h2>
        <div class="jurusan-title-line"></div>
        <p class="text-muted mt-2">Kurikulum vokasi berbasis kompetensi praktis yang dirancang berkesinambungan sesuai standar industri teknologi informasi.</p>
      </div>

      <div class="row g-4">
        <!-- Modul 1 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50">
          <div class="silabus-card h-100">
            <div class="silabus-card-top">
              <span class="silabus-num">01</span>
              <div class="silabus-icon-wrap"><i class="fas fa-screwdriver-wrench"></i></div>
            </div>
            <h4 class="silabus-title">Dasar-Dasar Teknik Jaringan Komputer &amp; Telekomunikasi</h4>
            <p class="silabus-desc">Pengenalan perangkat keras, komponen PC, dan keselamatan kerja (K3).</p>
          </div>
        </div>

        <!-- Modul 2 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="silabus-card h-100">
            <div class="silabus-card-top">
              <span class="silabus-num">02</span>
              <div class="silabus-icon-wrap"><i class="fas fa-desktop"></i></div>
            </div>
            <h4 class="silabus-title">Komputer &amp; Jaringan Dasar</h4>
            <p class="silabus-desc">Perakitan PC, instalasi sistem operasi (Windows/Linux), dan dasar pengalamatan IP.</p>
          </div>
        </div>

        <!-- Modul 3 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
          <div class="silabus-card h-100">
            <div class="silabus-card-top">
              <span class="silabus-num">03</span>
              <div class="silabus-icon-wrap"><i class="fas fa-network-wired"></i></div>
            </div>
            <h4 class="silabus-title">Administrasi Infrastruktur Jaringan</h4>
            <p class="silabus-desc">Konfigurasi perangkat router, switch, VLAN, routing statis &amp; dinamis, serta manajemen bandwidth menggunakan Mikrotik (MTCNA).</p>
          </div>
        </div>

        <!-- Modul 4 -->
        <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="silabus-card h-100">
            <div class="silabus-card-top">
              <span class="silabus-num">04</span>
              <div class="silabus-icon-wrap"><i class="fas fa-tower-broadcast"></i></div>
            </div>
            <h4 class="silabus-title">Teknologi Layanan Jaringan (TLJ)</h4>
            <p class="silabus-desc">Konfigurasi server VoIP, server lokal, keamanan jaringan (Firewall), dan pemeliharaan kabel fiber optik (FO).</p>
          </div>
        </div>

        <!-- Modul 5 -->
        <div class="col-md-12 col-lg-6" data-aos="fade-up" data-aos-delay="250">
          <div class="silabus-card h-100">
            <div class="silabus-card-top">
              <span class="silabus-num">05</span>
              <div class="silabus-icon-wrap"><i class="fas fa-shield-halved"></i></div>
            </div>
            <h4 class="silabus-title">Keamanan Jaringan</h4>
            <p class="silabus-desc">Dasar-dasar enkripsi, pencegahan peretasan jaringan (penetration testing dasar), dan manajemen backup data.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- 3. PELUANG / PROSPEK KARIR -->
    <div class="mb-5">
      <div class="text-center max-w-750 mx-auto mb-5" data-aos="fade-up">
        <h2 class="jurusan-section-title">Peluang / Prospek Karir</h2>
        <div class="jurusan-title-line"></div>
        <p class="text-muted mt-2">Lulusan TKJ SMK Cerdas Satu Bangsa terserap luas di berbagai sektor industri telekomunikasi, data center, perbankan, dan IT enterprise.</p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Karir 1 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50">
          <div class="karir-pathway-card">
            <div class="karir-pathway-icon"><i class="fas fa-sitemap"></i></div>
            <div class="karir-pathway-content">
              <span class="karir-pathway-badge">Infrastruktur Enterprise</span>
              <h4 class="karir-pathway-name">Network &amp; System Infrastructure Engineer</h4>
              <p class="karir-pathway-desc">Merancang, membangun, dan memelihara kehandalan arsitektur jaringan lokal hingga cloud perusahaan.</p>
            </div>
          </div>
        </div>

        <!-- Karir 2 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="karir-pathway-card">
            <div class="karir-pathway-icon"><i class="fas fa-headset"></i></div>
            <div class="karir-pathway-content">
              <span class="karir-pathway-badge">Operasional IT</span>
              <h4 class="karir-pathway-name">IT Support Specialist / Helpdesk</h4>
              <p class="karir-pathway-desc">Menangani insiden teknis komputer pengguna, pemeliharaan printer, instalasi aplikasi, dan troubleshooting jaringan kantor.</p>
            </div>
          </div>
        </div>

        <!-- Karir 3 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
          <div class="karir-pathway-card">
            <div class="karir-pathway-icon"><i class="fas fa-cable-car"></i></div>
            <div class="karir-pathway-content">
              <span class="karir-pathway-badge">Telekomunikasi &amp; ISP</span>
              <h4 class="karir-pathway-name">Field Network Technician (Teknisi Fiber Optik)</h4>
              <p class="karir-pathway-desc">Melakukan penarikan kabel fiber optik, penyambungan core (splicing), dan instalasi modem pelanggan internet.</p>
            </div>
          </div>
        </div>

        <!-- Karir 4 -->
        <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="karir-pathway-card">
            <div class="karir-pathway-icon"><i class="fas fa-chart-line"></i></div>
            <div class="karir-pathway-content">
              <span class="karir-pathway-badge">Monitoring &amp; Surveillance</span>
              <h4 class="karir-pathway-name">Junior NOC (Network Operations Center) Engineer</h4>
              <p class="karir-pathway-desc">Memantau ketersediaan koneksi jaringan secara real-time, mendeteksi gangguan link, dan melakukan mitigasi cepat.</p>
            </div>
          </div>
        </div>

        <!-- Karir 5 -->
        <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="250">
          <div class="karir-pathway-card">
            <div class="karir-pathway-icon"><i class="fas fa-server"></i></div>
            <div class="karir-pathway-content">
              <span class="karir-pathway-badge">Pusat Data Enterprise</span>
              <h4 class="karir-pathway-name">Data Center Technician</h4>
              <p class="karir-pathway-desc">Mengelola perkabelan rak server, pemantauan suhu fasilitas data center, dan perawatan perangkat keras server.</p>
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
        <p class="text-muted mt-2">Jika ingin melanjutkan kuliah ke perguruan tinggi negeri maupun swasta, siswa TKJ sangat cocok mengambil rumpun ilmu komputer dan teknik dengan pilihan fakultas dan program studi:</p>
      </div>

      <div class="row g-4">
        <!-- Fakultas 1 -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="kuliah-faculty-card h-100">
            <div class="faculty-card-header">
              <div class="faculty-icon"><i class="fas fa-laptop-code"></i></div>
              <div>
                <h3 class="faculty-name">Fakultas Ilmu Komputer (Fasilkom) / Fakultas Teknologi Informasi (Fasil-TI)</h3>
              </div>
            </div>
            <div class="faculty-card-body">
              <p class="faculty-lead">Program studi favorit yang linier dengan dasar pengalamatan, logika komputasi, dan arsitektur sistem TKJ:</p>
              <ul class="faculty-prodi-list">
                <li>
                  <i class="fas fa-circle-check text-emerald"></i>
                  <div>
                    <strong>S1 Teknik Informatika</strong>
                    <span>Mendalami rekayasa algoritma, arsitektur software, kecerdasan buatan, dan komputasi jaringan.</span>
                  </div>
                </li>
                <li>
                  <i class="fas fa-circle-check text-emerald"></i>
                  <div>
                    <strong>S1 Sistem Informasi</strong>
                    <span>Mengintegrasikan solusi infrastruktur IT dengan proses manajemen bisnis dan pengambilan keputusan korporat.</span>
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
              <div class="faculty-icon"><i class="fas fa-microchip"></i></div>
              <div>
                <h3 class="faculty-name">Fakultas Teknik (FT)</h3>
              </div>
            </div>
            <div class="faculty-card-body">
              <p class="faculty-lead">Program studi rekayasa keras yang memperdalam sisi teknologi transmisi, telekomunikasi satelit, dan hardware:</p>
              <ul class="faculty-prodi-list">
                <li>
                  <i class="fas fa-circle-check text-emerald"></i>
                  <div>
                    <strong>S1 Teknik Komputer</strong>
                    <span>Fokus pada perancangan chip mikroprosesor, integrasi embedded system, dan arsitektur perangkat keras.</span>
                  </div>
                </li>
                <li>
                  <i class="fas fa-circle-check text-emerald"></i>
                  <div>
                    <strong>S1 Teknik Telekomunikasi</strong>
                    <span>Mempelajari sistem komunikasi radio, gelombang mikro, sinyal seluler (4G/5G), dan jaringan fiber optik global.</span>
                  </div>
                </li>
                <li>
                  <i class="fas fa-circle-check text-emerald"></i>
                  <div>
                    <strong>S1 Teknologi Informasi</strong>
                    <span>Penerapan infrastruktur cloud, keamanan siber, dan integrasi enterprise data center modern.</span>
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
          <h3 class="cta-title mb-2">Tertarik Menjadi Ahli Jaringan &amp; Infrastruktur IT?</h3>
          <p class="cta-desc mb-0">
            Daftarkan diri Anda sekarang di Program Keahlian Teknik Komputer &amp; Jaringan (TKJ) SMK Cerdas Satu Bangsa. Kuota kelas terbatas untuk menjamin rasio perangkat lab 1 siswa 1 perangkat.
          </p>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
          <div class="d-inline-flex flex-wrap justify-content-center justify-content-lg-end gap-3">
            <a href="<?= BASE_URL ?>ppdb/informasi.php" class="btn-cta-jurusan btn-cta-primary">
              <i class="fas fa-file-signature me-1"></i> Info &amp; Alur PPDB
            </a>
            <a href="<?= BASE_URL ?>alumni/karir.php" class="btn-cta-jurusan btn-cta-secondary">
              <i class="fas fa-briefcase me-1"></i> Bursa Karir TKJ
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<style>
/* ── Universal Theme Variables & Layout ── */
.tkj-theme {
  --primary-accent: #059669;
  --secondary-accent: #10B981;
  --glow-color: rgba(16, 185, 129, 0.35);
  --hero-gradient: linear-gradient(135deg, #064E3B 0%, #065F46 45%, #0F172A 100%);
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
  color: #D1FAE5;
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
  background: linear-gradient(180deg, #FFFFFF 0%, #D1FAE5 100%);
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
  background: #ECFDF5;
  border: 1px solid #A7F3D0;
  color: #065F46;
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
  background: linear-gradient(90deg, #059669 0%, #10B981 100%);
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
  background: linear-gradient(135deg, #064E3B 0%, #0F172A 100%);
  color: #FFFFFF;
  border-radius: 18px;
  padding: 28px 22px;
  text-align: center;
  box-shadow: 0 12px 28px rgba(6, 78, 59, 0.25);
}
.stat-badge-icon {
  font-size: 2.2rem;
  color: #34D399;
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
  color: #6EE7B7;
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
  border-color: #A7F3D0;
  box-shadow: 0 16px 32px -8px rgba(5, 150, 105, 0.12), 0 4px 12px rgba(15, 23, 42, 0.04);
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
  background: #ECFDF5;
  color: #059669;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 1.15rem;
  transition: all 0.3s ease;
}
.silabus-card:hover .silabus-icon-wrap {
  background: #059669;
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
  border-color: #6EE7B7;
  box-shadow: 0 14px 28px -6px rgba(5, 150, 105, 0.12);
}
.karir-pathway-icon {
  width: 48px;
  height: 48px;
  border-radius: 12px;
  background: #0F172A;
  color: #34D399;
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
  color: #059669;
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
  border-color: #A7F3D0;
  box-shadow: 0 16px 36px rgba(5, 150, 105, 0.1);
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
  background: linear-gradient(135deg, #059669 0%, #064E3B 100%);
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
  color: #059669;
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
  background: linear-gradient(135deg, #064E3B 0%, #065F46 50%, #0F172A 100%);
  color: #FFFFFF;
  border-radius: 20px;
  box-shadow: 0 20px 45px rgba(6, 78, 59, 0.25);
  position: relative;
  overflow: hidden;
}
.cta-pill-badge {
  display: inline-flex;
  align-items: center;
  background: rgba(255, 255, 255, 0.15);
  color: #34D399;
  border: 1px solid rgba(52, 211, 153, 0.3);
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
  background: #34D399;
  color: #064E3B;
  box-shadow: 0 4px 14px rgba(52, 211, 153, 0.35);
}
.btn-cta-primary:hover {
  background: #6EE7B7;
  color: #064E3B;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(52, 211, 153, 0.45);
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
