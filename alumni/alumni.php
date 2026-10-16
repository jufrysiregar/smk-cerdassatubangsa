<?php
require_once __DIR__ . '/../koneksi.php';

$page_title = "Profil & Jejak Alumni";
$active_page = "alumni_alumni";

// Data 12 Alumni SMK Cerdas Satu Bangsa (6 Perempuan [A-01 s.d A-06], 6 Laki-laki [B-01 s.d B-06])
$alumni_list = [
    // ── KELULUSAN 2025 ──
    [
        'id'          => 2,
        'nama'        => 'Natasha Aurelia',
        'gender'      => 'perempuan',
        'jurusan'     => 'Rekayasa Perangkat Lunak (RPL)',
        'jurusan_code'=> 'RPL',
        'tahun_lulus' => '2025',
        'pekerjaan'   => 'Junior Programmer',
        'perusahaan'  => 'PT ByteCraft Teknologi Indonesia',
        'industri'    => 'Teknologi Informasi',
        'foto'        => BASE_URL . 'assets/img/alumni/A-02.jpg',
        'testimoni'   => 'Nggak nyangka baru lulus langsung dapet kerja jadi programmer. Bekas kodingan dan logika pemrograman dari lab RPL Cerdas Satu Bangsa benar-benar fondasi utamanya.',
        'badge_icon'  => 'fas fa-code'
    ],
    [
        'id'          => 4,
        'nama'        => 'Rania Salma Salsabila',
        'gender'      => 'perempuan',
        'jurusan'     => 'Desain Komunikasi Visual (DKV)',
        'jurusan_code'=> 'DKV',
        'tahun_lulus' => '2025',
        'pekerjaan'   => 'Mahasiswi Program Studi Desain',
        'perusahaan'  => 'Institut Teknologi Bandung (ITB)',
        'industri'    => 'Pendidikan Tinggi PTN',
        'foto'        => BASE_URL . 'assets/img/alumni/A-04.jpg',
        'testimoni'   => 'Anak SMK bisa tembus ITB? Bisa banget! Portofolio desain waktu di jurusan DKV SMK Cerdas Satu Bangsa jadi modal utama aku lolos seleksi masuk kampus impian ini.',
        'badge_icon'  => 'fas fa-graduation-cap'
    ],
    [
        'id'          => 8,
        'nama'        => 'Rizky Ramadhan',
        'gender'      => 'laki-laki',
        'jurusan'     => 'Teknik Komputer dan Jaringan (TKJ)',
        'jurusan_code'=> 'TKJ',
        'tahun_lulus' => '2025',
        'pekerjaan'   => 'Field Technician',
        'perusahaan'  => 'PT Telkom Akses (IndiHome)',
        'industri'    => 'Infrastruktur Jaringan Fiber',
        'foto'        => BASE_URL . 'assets/img/alumni/B-03.jpg',
        'testimoni'   => 'Baru beberapa bulan lulus, langsung dapet job jadi teknisi lapangan. Masalah kabel fiber optik, router, dan jaringan udah biasa kita ulik di bengkel TKJ SMK Cerdas Satu Bangsa.',
        'badge_icon'  => 'fas fa-network-wired'
    ],

    // ── KELULUSAN 2024 ──
    [
        'id'          => 1,
        'nama'        => 'Siti Nurhaliza',
        'gender'      => 'perempuan',
        'jurusan'     => 'Teknik Komputer dan Jaringan (TKJ)',
        'jurusan_code'=> 'TKJ',
        'tahun_lulus' => '2024',
        'pekerjaan'   => 'Call Center Officer',
        'perusahaan'  => 'PT Telekomunikasi Selular (Telkomsel)',
        'industri'    => 'Telekomunikasi',
        'foto'        => BASE_URL . 'assets/img/alumni/A-01.jpg',
        'testimoni'   => 'Skill komunikasi dan dasar jaringan yang diajarin pas praktik di SMK Cerdas Satu Bangsa ngebantu banget pas kerja di dunia customer service operator seluler kayak gini.',
        'badge_icon'  => 'fas fa-headset'
    ],
    [
        'id'          => 3,
        'nama'        => 'Naura Prameswari',
        'gender'      => 'perempuan',
        'jurusan'     => 'Rekayasa Perangkat Lunak (RPL)',
        'jurusan_code'=> 'RPL',
        'tahun_lulus' => '2024',
        'pekerjaan'   => 'Staff Administrasi & Sistem',
        'perusahaan'  => 'PT Bank Mandiri (Persero) Tbk',
        'industri'    => 'BUMN Perbankan',
        'foto'        => BASE_URL . 'assets/img/alumni/A-03.jpg',
        'testimoni'   => 'Masuk BUMN impian ternyata bisa diwujudkan lulusan SMK. Disiplin dan etos kerja yang dibentuk di sekolah ngebantu aku beradaptasi cepat di lingkungan korporasi.',
        'badge_icon'  => 'fas fa-building-columns'
    ],
    [
        'id'          => 11,
        'nama'        => 'Nadira Zahra Kirana',
        'gender'      => 'perempuan',
        'jurusan'     => 'Desain Komunikasi Visual (DKV)',
        'jurusan_code'=> 'DKV',
        'tahun_lulus' => '2024',
        'pekerjaan'   => 'Digital Content Illustrator',
        'perusahaan'  => 'PT Creativa Digital Studio',
        'industri'    => 'Industri Kreatif & Digital Art',
        'foto'        => BASE_URL . 'assets/img/alumni/A-06.jpg',
        'testimoni'   => 'Terima kasih buat guru-guru DKV SMK Cerdas Satu Bangsa yang udah sabar ngajarin teknik dasar ilustrasi digital, komposisi warna, sampai cara bangun portofolio. Sangat ngebantu saya beradaptasi cepat di industri kreatif digital saat ini.',
        'badge_icon'  => 'fas fa-palette'
    ],
    [
        'id'          => 7,
        'nama'        => 'Bayu Saputra',
        'gender'      => 'laki-laki',
        'jurusan'     => 'Teknik Audio Video (TAV)',
        'jurusan_code'=> 'TAV',
        'tahun_lulus' => '2024',
        'pekerjaan'   => 'Electrical & Navigation Crew (ABK)',
        'perusahaan'  => 'PT Pelayaran Samudera Raya',
        'industri'    => 'Pelayaran & Kelautan',
        'foto'        => BASE_URL . 'assets/img/alumni/B-02.jpg',
        'testimoni'   => 'Kerja di perkapalan nuntut ketelitian tinggi, terutama bagian sistem kelistrikan dan navigasi kapal. Dasar teknik yang kuat dari sekolah ngebantu aku cepat beradaptasi di laut.',
        'badge_icon'  => 'fas fa-ship'
    ],
    [
        'id'          => 10,
        'nama'        => 'Fajar Nugroho',
        'gender'      => 'laki-laki',
        'jurusan'     => 'Teknik Audio Video (TAV)',
        'jurusan_code'=> 'TAV',
        'tahun_lulus' => '2024',
        'pekerjaan'   => 'Maintenance Technician',
        'perusahaan'  => 'PT Sinar Mitra Elektronika',
        'industri'    => 'Elektronika & Manufaktur',
        'foto'        => BASE_URL . 'assets/img/alumni/B-05.jpg',
        'testimoni'   => 'Praktek merakit dan perbaikan perangkat elektronik waktu sekolah relevan banget sama pekerjaan aku sekarang sebagai teknisi pemeliharaan mesin industri swasta.',
        'badge_icon'  => 'fas fa-wrench'
    ],

    // ── KELULUSAN 2023 ──
    [
        'id'          => 5,
        'nama'        => 'Kirana Maharani',
        'gender'      => 'perempuan',
        'jurusan'     => 'Teknik Audio Video (TAV)',
        'jurusan_code'=> 'TAV',
        'tahun_lulus' => '2023',
        'pekerjaan'   => 'Broadcast & Master Control Room Staff',
        'perusahaan'  => 'Nusa TV',
        'industri'    => 'Broadcasting & Media',
        'foto'        => BASE_URL . 'assets/img/alumni/A-05.jpg',
        'testimoni'   => 'Terbiasa pegang alat audio video dan peralatan studio di sekolah bikin aku nggak kaget lagi waktu terjun langsung kerja di dunia penyiaran televisi nasional.',
        'badge_icon'  => 'fas fa-tv'
    ],
    [
        'id'          => 6,
        'nama'        => 'Dimas Pratama',
        'gender'      => 'laki-laki',
        'jurusan'     => 'Desain Komunikasi Visual (DKV)',
        'jurusan_code'=> 'DKV',
        'tahun_lulus' => '2023',
        'pekerjaan'   => 'Property Consultant & Marketing',
        'perusahaan'  => 'PT Graha Indah Propertindo',
        'industri'    => 'Properti & Marketing',
        'foto'        => BASE_URL . 'assets/img/alumni/B-01.jpg',
        'testimoni'   => 'Ilmu visual dan presentasi produk dari DKV ngebantu banget pas bikin materi promosi dan nawarin perumahan ke klien. Skill komunikasi di sekolah kepake habis!',
        'badge_icon'  => 'fas fa-city'
    ],
    [
        'id'          => 9,
        'nama'        => 'Kevin Ardiansyah',
        'gender'      => 'laki-laki',
        'jurusan'     => 'Rekayasa Perangkat Lunak (RPL)',
        'jurusan_code'=> 'RPL',
        'tahun_lulus' => '2023',
        'pekerjaan'   => 'Distributor Sales Executive (DSE)',
        'perusahaan'  => 'PT Indosat Ooredoo Hutchison Tbk',
        'industri'    => 'Telekomunikasi Seluler',
        'foto'        => BASE_URL . 'assets/img/alumni/B-04.jpg',
        'testimoni'   => 'Walaupun lulusan RPL, mental problem-solving dan kerja tim dari sekolah ngebantu banget buat negosiasi dan nge-handle area distribusi produk telekomunikasi di Indosat.',
        'badge_icon'  => 'fas fa-chart-line'
    ],
    [
        'id'          => 12,
        'nama'        => 'Satria Mahendra',
        'gender'      => 'laki-laki',
        'jurusan'     => 'Teknik Audio Video (TAV)',
        'jurusan_code'=> 'TAV',
        'tahun_lulus' => '2023',
        'pekerjaan'   => 'IoT Hardware Technician',
        'perusahaan'  => 'PT Nusantara IoT Solutions',
        'industri'    => 'Teknologi IoT & Elektronika',
        'foto'        => BASE_URL . 'assets/img/alumni/B-06.jpg',
        'testimoni'   => 'Waktu sekolah di TAV Cerdas Satu Bangsa, saya nggak cuma belajar teori elektronik dasar, tapi juga diajarin cara merakit mikrokontroler dan sensor. Ilmu itu bener-bener jadi modal utama saya pas kerja megang perangkat IoT di perusahaan sekarang.',
        'badge_icon'  => 'fas fa-microchip'
    ]
];

// Pastikan selalu terurut berdasarkan tahun kelulusan terbaru ke terlama
usort($alumni_list, function ($a, $b) {
    if ((int)$b['tahun_lulus'] === (int)$a['tahun_lulus']) {
        return (int)$a['id'] <=> (int)$b['id'];
    }
    return (int)$b['tahun_lulus'] <=> (int)$a['tahun_lulus'];
});

include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/navbar.php';
?>

<!-- Header Banner -->
<section class="subpage-header">
  <div class="container text-center">
    <h1 class="subpage-title mb-2">Jejak Langkah &amp; Inspirasi Alumni</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Beranda</a></li>
        <li class="breadcrumb-item">Alumni &amp; Karir</li>
        <li class="breadcrumb-item active" aria-current="page">Alumni</li>
      </ol>
    </nav>
  </div>
</section>

<!-- Main Alumni Section -->
<section class="alumni-showcase-section py-5">
  <div class="container-fluid px-3 px-md-4 px-xl-5 py-lg-3">

    <!-- Section Intro Header -->
    <div class="text-center max-w-800 mx-auto mb-4" data-aos="fade-up">
      <h2 class="section-title">Kebanggaan SMK Cerdas Satu Bangsa</h2>
      <div class="title-line"></div>
      <p class="text-muted mt-3">
        Membuktikan kualitas lulusan vokasi yang kompeten, berkarakter, dan berdaya saing tinggi di dunia industri, korporasi, maritim, hingga kampus ternama.
      </p>
    </div>

    <!-- Filter Buttons (Semua, Jurusan) -->
    <div class="alumni-filter-wrapper text-center mb-5" data-aos="fade-up" data-aos-delay="100">
      <div class="d-inline-flex flex-wrap justify-content-center gap-2 p-2 bg-white rounded-pill shadow-sm border">
        <button type="button" class="btn btn-filter-pill active" data-filter="all">
          <i class="fas fa-users me-1"></i> Semua (<?= count($alumni_list) ?>)
        </button>
        <button type="button" class="btn btn-filter-pill" data-filter="RPL">
          <i class="fas fa-laptop-code me-1"></i> RPL
        </button>
        <button type="button" class="btn btn-filter-pill" data-filter="TKJ">
          <i class="fas fa-network-wired me-1"></i> TKJ
        </button>
        <button type="button" class="btn btn-filter-pill" data-filter="DKV">
          <i class="fas fa-palette me-1"></i> DKV
        </button>
        <button type="button" class="btn btn-filter-pill" data-filter="TAV">
          <i class="fas fa-bolt me-1"></i> TAV
        </button>
      </div>
    </div>

    <!-- Alumni Grid Cards (4 Card per Baris: col-xl-3 col-lg-4 col-md-6) -->
    <div class="row g-4 justify-content-center" id="alumni-cards-container">
      <?php foreach ($alumni_list as $index => $alumni): ?>
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 alumni-card-item" 
           data-jurusan="<?= htmlspecialchars($alumni['jurusan_code']) ?>"
           data-gender="<?= htmlspecialchars($alumni['gender']) ?>"
           data-aos="fade-up" 
           data-aos-delay="<?= ($index % 4) * 80 ?>">
        <div class="alumni-card">
          
          <!-- Card Header & Photo -->
          <div class="alumni-card-top">
            <div class="alumni-photo-box">
              <img src="<?= htmlspecialchars($alumni['foto']) ?>" 
                   alt="<?= htmlspecialchars($alumni['nama']) ?>" 
                   class="alumni-avatar"
                   loading="lazy"
                   onerror="this.onerror=null; this.src='https://placehold.co/400x500?text=Foto+Alumni';">
              <span class="alumni-badge-floating">
                <i class="<?= htmlspecialchars($alumni['badge_icon']) ?>"></i>
              </span>
            </div>
            
            <div class="alumni-identity">
              <div class="mb-1">
                <span class="alumni-batch">
                  <i class="far fa-calendar-check me-1"></i> Lulusan <?= htmlspecialchars($alumni['tahun_lulus']) ?>
                </span>
              </div>
              <h3 class="alumni-name" title="<?= htmlspecialchars($alumni['nama']) ?>"><?= htmlspecialchars($alumni['nama']) ?></h3>
              <p class="alumni-full-major text-muted" title="<?= htmlspecialchars($alumni['jurusan']) ?>">
                <i class="fas fa-graduation-cap me-1"></i> <?= htmlspecialchars($alumni['jurusan']) ?>
              </p>
            </div>
          </div>

          <!-- Career Detail Box -->
          <div class="alumni-career-box">
            <div class="career-icon-pill">
              <i class="fas fa-briefcase"></i>
            </div>
            <div class="career-text">
              <span class="career-role"><?= htmlspecialchars($alumni['pekerjaan']) ?></span>
              <span class="career-company"><?= htmlspecialchars($alumni['perusahaan']) ?></span>
            </div>
          </div>

          <!-- Testimonial Quote -->
          <div class="alumni-quote-wrap">
            <i class="fas fa-quote-left quote-mark"></i>
            <p class="alumni-quote-text">
              <?= htmlspecialchars($alumni['testimoni']) ?>
            </p>
          </div>

          <!-- Card Bottom Info -->
          <div class="alumni-card-footer">
            <span class="verified-tag">
              <i class="fas fa-circle-check text-success me-1"></i> Terverifikasi
            </span>
            <span class="industry-tag" title="<?= htmlspecialchars($alumni['industri']) ?>">
              <i class="fas fa-tag me-1"></i> <?= htmlspecialchars($alumni['industri']) ?>
            </span>
          </div>

        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Pagination Alumni (Sama seperti Berita & Galeri) -->
    <div class="pagination-wrapper" id="alumni-pagination"></div>

    <!-- Empty Filter Notice (Hidden by Default) -->
    <div id="alumni-empty-state" class="text-center py-5 d-none">
      <div class="empty-icon-wrap mb-3">
        <i class="fas fa-user-slash fa-3x text-muted opacity-50"></i>
      </div>
      <h5 class="fw-bold text-dark">Tidak ada alumni yang sesuai kategori ini</h5>
      <p class="text-muted">Silakan pilih kategori jurusan lain untuk melihat data alumni kami.</p>
    </div>

    <!-- Banner 1: Pendaftaran & Lowongan Kerja -->
    <div class="alumni-cta-card cta-card-join mt-5 p-4 p-lg-5">
      <div class="row align-items-center g-4">
        <div class="col-lg-7 text-center text-lg-start">
          <span class="cta-pill-badge mb-2">
            <i class="fas fa-rocket me-1"></i> Waktunya Giliran Anda
          </span>
          <h3 class="cta-main-title mb-2">Siap Mengukir Cerita Sukses Berikutnya?</h3>
          <p class="cta-main-desc mb-0">
            Bergabunglah dengan SMK Cerdas Satu Bangsa. Dapatkan kurikulum berbasis industri terkini, laboratorium modern, serta bimbingan penyaluran karir langsung dari Bursa Kerja Khusus (BKK).
          </p>
        </div>
        <div class="col-lg-5 text-center text-lg-end">
          <div class="d-inline-flex flex-wrap justify-content-center justify-content-lg-end gap-3">
            <a href="<?= BASE_URL ?>ppdb/informasi.php" class="btn-cta-action btn-cta-ppdb">
              Daftar PPDB
            </a>
            <a href="<?= BASE_URL ?>alumni/karir.php" class="btn-cta-action btn-cta-lowongan">
              Info Lowongan Kerja
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Banner 2: Khusus Alumni (Terpisah) -->
    <div class="alumni-cta-card cta-card-alumni mt-4 p-4 px-lg-5 py-lg-4">
      <div class="row align-items-center g-3">
        <div class="col-lg-8 text-center text-lg-start">
          <div class="d-flex flex-column flex-sm-row align-items-center gap-3">
            <div class="alumni-callout-icon">
              <i class="fas fa-user-graduate"></i>
            </div>
            <div>
              <h4 class="alumni-callout-title mb-1">Kamu Alumni SMK Cerdas Satu Bangsa?</h4>
              <p class="alumni-callout-desc mb-0">
                Daftarkan diri dan bagikan jejak kariermu agar namamu tampil di halaman alumni ini.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
          <button type="button" class="btn-cta-action btn-cta-alumni" onclick="openAlumniModal()">
            Halo Alumni.!
          </button>
        </div>
      </div>
    </div>

  </div>
</section>




<!-- Modal Form: Saya Alumni -->
<div id="modalSayaAlumni" class="alumni-modal-overlay" style="display:none;" role="dialog" aria-modal="true" aria-labelledby="modalAlumniTitle">
  <div class="alumni-modal-box">

    <!-- Header Modal -->
    <div class="alumni-modal-header">
      <div>
        <h4 id="modalAlumniTitle" class="alumni-modal-title">
          <i class="fas fa-user-graduate me-2"></i> Daftarkan Diri Sebagai Alumni
        </h4>
        <p class="alumni-modal-subtitle">Isi data berikut untuk menambahkan profil Anda ke halaman alumni kami.</p>
      </div>
      <button type="button" class="alumni-modal-close" onclick="closeAlumniModal()" aria-label="Tutup Modal">
        <i class="fas fa-times"></i>
      </button>
    </div>

    <!-- Body Modal -->
    <div class="alumni-modal-body">
      <form id="formSayaAlumni" novalidate onsubmit="submitAlumniForm(event)">

        <div class="row g-3">

          <!-- Nama Lengkap -->
          <div class="col-sm-6">
            <label class="alumni-form-label" for="al_nama">Nama Lengkap <span class="text-danger">*</span></label>
            <input type="text" id="al_nama" name="nama"
                   class="alumni-form-input"
                   placeholder="Contoh: Budi Santoso"
                   minlength="3" maxlength="80" required>
            <div class="alumni-field-error" id="err_al_nama"></div>
          </div>

          <!-- Email Aktif -->
          <div class="col-sm-6">
            <label class="alumni-form-label" for="al_email">Alamat Email Aktif <span class="text-danger">*</span></label>
            <input type="email" id="al_email" name="email"
                   class="alumni-form-input"
                   placeholder="Contoh: budi@gmail.com"
                   autocomplete="email"
                   required>
            <div class="alumni-field-error" id="err_al_email"></div>
          </div>

          <!-- Jenis Kelamin -->
          <div class="col-sm-6">
            <label class="alumni-form-label" for="al_gender">Jenis Kelamin <span class="text-danger">*</span></label>
            <select id="al_gender" name="jenis_kelamin" class="alumni-form-input" required>
              <option value="" disabled selected>Pilih Jenis Kelamin</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
            <div class="alumni-field-error" id="err_al_gender"></div>
          </div>

          <!-- NISN -->
          <div class="col-sm-6">
            <label class="alumni-form-label" for="al_nisn">NISN <span class="text-danger">*</span></label>
            <input type="text" id="al_nisn" name="nisn"
                   class="alumni-form-input"
                   placeholder="10 digit angka"
                   maxlength="10"
                   inputmode="numeric"
                   required>
            <div class="alumni-field-error" id="err_al_nisn"></div>
          </div>

          <!-- Tahun Lulus -->
          <div class="col-sm-6">
            <label class="alumni-form-label" for="al_tahun">Tahun Lulus <span class="text-danger">*</span></label>
            <input type="number" id="al_tahun" name="tahun_lulus"
                   class="alumni-form-input"
                   placeholder="Contoh: 2023"
                   min="2000" max="<?= date('Y') ?>"
                   required>
            <div class="alumni-field-error" id="err_al_tahun"></div>
          </div>

          <!-- PT / Tempat Pekerjaan -->
          <div class="col-sm-6">
            <label class="alumni-form-label" for="al_perusahaan">Perusahaan / Instansi Saat Ini <span class="text-danger">*</span></label>
            <input type="text" id="al_perusahaan" name="perusahaan"
                   class="alumni-form-input"
                   placeholder="Contoh: PT Telkom Indonesia"
                   minlength="3" maxlength="100" required>
            <div class="alumni-field-error" id="err_al_perusahaan"></div>
          </div>

          <!-- Posisi Kerja -->
          <div class="col-12">
            <label class="alumni-form-label" for="al_posisi">Posisi / Jabatan Saat Ini <span class="text-danger">*</span></label>
            <input type="text" id="al_posisi" name="posisi"
                   class="alumni-form-input"
                   placeholder="Contoh: Network Engineer"
                   minlength="3" maxlength="80" required>
            <div class="alumni-field-error" id="err_al_posisi"></div>
          </div>

          <!-- Pesan Singkat -->
          <div class="col-12">
            <label class="alumni-form-label" for="al_pesan">Pesan Singkat Alumni <span class="text-danger">*</span></label>
            <textarea id="al_pesan" name="pesan"
                      class="alumni-form-input alumni-form-textarea"
                      placeholder="Tuliskan pesan dan kesan..."
                      minlength="80" maxlength="400" required
                      rows="3"></textarea>
            <div class="alumni-field-error" id="err_al_pesan"></div>
            <div class="alumni-form-char-info d-flex justify-content-between align-items-center mt-1">
              <span id="al_pesan_status" style="font-size: 0.76rem; color: #94A3B8; font-family: 'Poppins', sans-serif;">Minimal 80 karakter</span>
              <span class="alumni-char-counter" id="al_pesan_counter">0 / 400</span>
            </div>
          </div>

        </div><!-- /row -->

        <!-- Alert success (hidden) -->
        <div id="alumni-form-success" class="alumni-success-msg" style="display:none;">
          <i class="fas fa-circle-check me-2"></i>
          Data berhasil dikirim, silahkan tunggu respon operator melalui email. Terimakasih atas masukan anda dan tetap semangat.
        </div>

      </form>
    </div>

    <!-- Footer Modal -->
    <div class="alumni-modal-footer">
      <button type="submit" form="formSayaAlumni" class="btn-alumni-submit" id="btn-alumni-submit">
        <i class="fas fa-paper-plane me-2"></i> Kirim Data
      </button>
    </div>

  </div>
</div>

<style>
/* ── Tombol Saya Alumni ── */
.btn-alumni-register {
  background: #FFFFFF;
  border: 1.5px solid #059669;
  color: #059669;
  font-family: 'Poppins', sans-serif;
  transition: all 0.25s ease;
}
.btn-alumni-register:hover {
  background: #059669;
  color: #FFFFFF;
  box-shadow: 0 6px 16px rgba(5,150,105,0.25);
  transform: translateY(-2px);
}

/* ── Modal Overlay ── */
.alumni-modal-overlay {
  position: fixed;
  inset: 0;
  background: rgba(15, 23, 42, 0.55);
  backdrop-filter: blur(4px);
  z-index: 9999;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 16px;
  animation: modalFadeIn 0.2s ease;
}
@keyframes modalFadeIn {
  from { opacity: 0; }
  to   { opacity: 1; }
}

/* ── Modal Box ── */
.alumni-modal-box {
  background: #FFFFFF;
  border-radius: 20px;
  width: 100%;
  max-width: 640px;
  max-height: 92vh;
  display: flex;
  flex-direction: column;
  box-shadow: 0 25px 60px rgba(15, 23, 42, 0.2);
  animation: modalSlideUp 0.25s ease;
}
@keyframes modalSlideUp {
  from { transform: translateY(24px); opacity: 0; }
  to   { transform: translateY(0);    opacity: 1; }
}

/* ── Modal Header ── */
.alumni-modal-header {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  gap: 12px;
  padding: 22px 24px 18px;
  border-bottom: 1px solid #E2E8F0;
}
.alumni-modal-title {
  font-family: 'Poppins', sans-serif;
  font-size: 1.05rem;
  font-weight: 700;
  color: #0F172A;
  margin: 0 0 4px;
}
.alumni-modal-subtitle {
  font-size: 0.82rem;
  color: #64748B;
  margin: 0;
}
.alumni-modal-close {
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #111827;
  font-size: 1rem;
  cursor: pointer;
  transition: all 0.2s ease;
  flex-shrink: 0;
}
.alumni-modal-close:hover {
  background: #F8FAFC;
  border-color: #CBD5E1;
  color: #DC2626;
}

/* ── Modal Body ── */
.alumni-modal-body {
  overflow-y: auto;
  padding: 22px 24px;
  flex: 1;
}

/* ── Form Elements ── */
.alumni-form-label {
  display: block;
  font-family: 'Poppins', sans-serif;
  font-size: 0.82rem;
  font-weight: 600;
  color: #374151;
  margin-bottom: 6px;
}
.alumni-form-input {
  width: 100%;
  padding: 10px 14px;
  border: 1.5px solid #E2E8F0;
  border-radius: 10px;
  font-family: 'Poppins', sans-serif;
  font-size: 0.875rem;
  color: #0F172A;
  background: #FAFAFA;
  transition: border-color 0.2s ease, box-shadow 0.2s ease;
  outline: none;
  appearance: auto;
}
.alumni-form-input:focus {
  border-color: #059669;
  box-shadow: 0 0 0 3px rgba(5,150,105,0.12);
  background: #FFFFFF;
}
.alumni-form-input.is-invalid {
  border-color: #DC2626 !important;
  box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.12) !important;
  background-color: #FEF2F2 !important;
}
.alumni-field-error {
  display: none;
  align-items: center;
  gap: 5px;
  font-size: 0.78rem;
  font-weight: 500;
  color: #DC2626;
  margin-top: 5px;
  margin-bottom: 2px;
  line-height: 1.35;
  animation: alumniFadeInDown 0.2s ease;
}
.alumni-field-error.show {
  display: flex;
}
.alumni-field-error::before {
  content: "\f071";
  font-family: "Font Awesome 6 Free", "Font Awesome 5 Free";
  font-weight: 900;
  font-size: 0.72rem;
  flex-shrink: 0;
  color: #DC2626;
}
@keyframes alumniFadeInDown {
  from { opacity: 0; transform: translateY(-3px); }
  to   { opacity: 1; transform: translateY(0); }
}
.alumni-form-textarea {
  resize: vertical;
  min-height: 100px;
}
.alumni-form-hint {
  font-size: 0.76rem;
  color: #94A3B8;
  margin-top: 4px;
}
.alumni-form-char-info {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 4px;
}
.alumni-char-counter {
  font-size: 0.76rem;
  font-weight: 600;
  color: #94A3B8;
  font-family: 'Poppins', sans-serif;
}
.alumni-char-counter.warn  { color: #F59E0B; }
.alumni-char-counter.limit { color: #EF4444; }

/* ── Success Message ── */
.alumni-success-msg {
  margin-top: 18px;
  padding: 14px 18px;
  background: #ECFDF5;
  border: 1.5px solid #A7F3D0;
  border-radius: 12px;
  color: #065F46;
  font-family: 'Poppins', sans-serif;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 1.55;
}

/* ── Modal Footer ── */
.alumni-modal-footer {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  gap: 10px;
  padding: 16px 24px 20px;
  border-top: 1px solid #E2E8F0;
}
.btn-alumni-cancel {
  padding: 9px 20px;
  border-radius: 40px;
  border: 1.5px solid #E2E8F0;
  background: #F8FAFC;
  color: #64748B;
  font-family: 'Poppins', sans-serif;
  font-size: 0.84rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.2s ease;
}
.btn-alumni-cancel:hover {
  border-color: #CBD5E1;
  background: #F1F5F9;
  color: #374151;
}
.btn-alumni-submit {
  padding: 10px 24px;
  border-radius: 40px;
  border: none;
  background: #059669;
  color: #FFFFFF;
  font-family: 'Poppins', sans-serif;
  font-size: 0.84rem;
  font-weight: 700;
  cursor: pointer;
  transition: all 0.25s ease;
  box-shadow: 0 4px 12px rgba(5,150,105,0.25);
}
.btn-alumni-submit:hover {
  background: #047857;
  transform: translateY(-1px);
  box-shadow: 0 6px 18px rgba(5,150,105,0.3);
}
.btn-alumni-submit:disabled {
  opacity: 0.6;
  cursor: not-allowed;
  transform: none;
}

@media (max-width: 576px) {
  .alumni-modal-header { padding: 18px 18px 14px; }
  .alumni-modal-body   { padding: 18px; }
  .alumni-modal-footer { padding: 14px 18px 18px; }
  .alumni-modal-box    { border-radius: 16px; }
}
</style>

<script>
/* ── Alumni Modal & Inline Validation ── */
function setFieldError(fieldId, errorId, message) {
  const field = document.getElementById(fieldId);
  const errEl = document.getElementById(errorId);
  if (!field || !errEl) return !message;

  if (message) {
    field.classList.add('is-invalid');
    errEl.textContent = message;
    errEl.classList.add('show');
    return false;
  } else {
    field.classList.remove('is-invalid');
    errEl.textContent = '';
    errEl.classList.remove('show');
    return true;
  }
}

function clearAllErrors() {
  document.querySelectorAll('#formSayaAlumni .is-invalid').forEach(el => el.classList.remove('is-invalid'));
  document.querySelectorAll('#formSayaAlumni .alumni-field-error').forEach(el => {
    el.textContent = '';
    el.classList.remove('show');
  });
}

function validateNama(showEmpty = false) {
  const field = document.getElementById('al_nama');
  if (!field) return true;
  const val = field.value.trim();
  let msg = '';
  if (!val) {
    if (showEmpty) msg = 'Nama lengkap wajib diisi.';
  } else if (val.length < 3) {
    msg = 'Nama lengkap minimal 3 karakter.';
  } else if (!/^[a-zA-Z\s\.\,\']+$/.test(val)) {
    msg = "Nama hanya boleh berisi huruf, spasi, titik (.), koma (,), dan petik satu (').";
  }
  return setFieldError('al_nama', 'err_al_nama', msg);
}

function validateEmail(showEmpty = false) {
  const field = document.getElementById('al_email');
  if (!field) return true;
  const val = field.value.trim();
  let msg = '';
  if (!val) {
    if (showEmpty) msg = 'Alamat email aktif wajib diisi.';
  } else if (!/^[^\s@]+@gmail\.com$/i.test(val)) {
    msg = 'Gunakan alamat email dengan domain @gmail.com.';
  }
  return setFieldError('al_email', 'err_al_email', msg);
}

function validateGender(showEmpty = false) {
  const field = document.getElementById('al_gender');
  if (!field) return true;
  const val = field.value;
  let msg = '';
  if (!val) {
    if (showEmpty) msg = 'Silakan pilih jenis kelamin.';
  }
  return setFieldError('al_gender', 'err_al_gender', msg);
}

function validateNisn(showEmpty = false) {
  const field = document.getElementById('al_nisn');
  if (!field) return true;
  const val = field.value.trim();
  let msg = '';
  if (!val) {
    if (showEmpty) msg = 'NISN wajib diisi.';
  } else if (!/^\d{10}$/.test(val)) {
    msg = 'NISN harus berisi tepat 10 digit angka.';
  }
  return setFieldError('al_nisn', 'err_al_nisn', msg);
}

function validateTahun(showEmpty = false) {
  const field = document.getElementById('al_tahun');
  if (!field) return true;
  const val = field.value.trim();
  const currentYear = new Date().getFullYear();
  let msg = '';
  if (!val) {
    if (showEmpty) msg = 'Tahun kelulusan wajib diisi.';
  } else {
    const num = parseInt(val, 10);
    if (isNaN(num) || num < 2000 || num > currentYear) {
      msg = 'Masukkan tahun kelulusan yang valid (antara 2000 - ' + currentYear + ').';
    }
  }
  return setFieldError('al_tahun', 'err_al_tahun', msg);
}

function validatePerusahaan(showEmpty = false) {
  const field = document.getElementById('al_perusahaan');
  if (!field) return true;
  const val = field.value.trim();
  let msg = '';
  if (!val) {
    if (showEmpty) msg = 'Perusahaan / instansi saat ini wajib diisi.';
  } else if (val.length < 3) {
    msg = 'Nama instansi / perusahaan minimal 3 karakter.';
  }
  return setFieldError('al_perusahaan', 'err_al_perusahaan', msg);
}

function validatePosisi(showEmpty = false) {
  const field = document.getElementById('al_posisi');
  if (!field) return true;
  const val = field.value.trim();
  let msg = '';
  if (!val) {
    if (showEmpty) msg = 'Posisi / jabatan saat ini wajib diisi.';
  } else if (val.length < 3) {
    msg = 'Posisi atau jabatan minimal 3 karakter.';
  }
  return setFieldError('al_posisi', 'err_al_posisi', msg);
}

function updatePesanInfoAndValidity(showEmpty = false) {
  const el = document.getElementById('al_pesan');
  const counter = document.getElementById('al_pesan_counter');
  const status = document.getElementById('al_pesan_status');
  if (!el) return true;

  const len = el.value.length;

  if (counter) {
    counter.textContent = len + ' / 400';
    counter.className = 'alumni-char-counter' + (len >= 400 ? ' limit' : len >= 350 ? ' warn' : '');
  }

  let msg = '';
  if (len === 0) {
    if (showEmpty) msg = 'Pesan singkat alumni wajib diisi.';
    if (status) {
      status.style.color = '#94A3B8';
      status.innerHTML = 'Minimal 80 karakter';
    }
  } else if (len < 80) {
    msg = 'Harap perpanjang teks ini hingga 80 karakter atau lebih (saat ini ' + len + ' karakter).';
    if (status) {
      status.style.color = '#D97706';
      status.innerHTML = '<i class="fas fa-circle-exclamation me-1"></i>Kurang ' + (80 - len) + ' karakter lagi (minimal 80)';
    }
  } else if (len > 400) {
    msg = 'Pesan singkat tidak boleh melebihi 400 karakter.';
    if (status) {
      status.style.color = '#EF4444';
      status.innerHTML = 'Melebihi batas 400 karakter';
    }
  } else {
    if (status) {
      status.style.color = '#10B981';
      status.innerHTML = '<i class="fas fa-circle-check me-1"></i>Panjang pesan memenuhi syarat';
    }
  }

  return setFieldError('al_pesan', 'err_al_pesan', msg);
}

function openAlumniModal() {
  const overlay = document.getElementById('modalSayaAlumni');
  overlay.style.display = 'flex';
  document.body.style.overflow = 'hidden';
  updatePesanInfoAndValidity(false);
  document.getElementById('al_nama').focus();
}

function closeAlumniModal() {
  const overlay = document.getElementById('modalSayaAlumni');
  overlay.style.display = 'none';
  document.body.style.overflow = '';
}

function resetAlumniForm() {
  const form = document.getElementById('formSayaAlumni');
  if (form) form.reset();
  clearAllErrors();
  const successMsg = document.getElementById('alumni-form-success');
  if (successMsg) successMsg.style.display = 'none';
  const btn = document.getElementById('btn-alumni-submit');
  if (btn) {
    btn.disabled = false;
    btn.innerHTML = '<i class="fas fa-paper-plane me-2"></i> Kirim Data';
    btn.style.background = '';
    btn.style.display = '';
  }
  updatePesanInfoAndValidity(false);
}

// Tutup saat klik overlay luar
document.getElementById('modalSayaAlumni').addEventListener('click', function(e) {
  if (e.target === this) closeAlumniModal();
});

// Tutup saat Escape
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') closeAlumniModal();
});

// Real-time Event Listeners
const elNama = document.getElementById('al_nama');
if (elNama) {
  elNama.addEventListener('input', function() {
    this.value = this.value.replace(/[^a-zA-Z\s\.\,\']/g, '');
    if (this.classList.contains('is-invalid')) validateNama(true);
  });
  elNama.addEventListener('blur', function() {
    if (this.value.trim()) validateNama(false);
  });
}

const elEmail = document.getElementById('al_email');
if (elEmail) {
  elEmail.addEventListener('input', function() {
    if (this.classList.contains('is-invalid')) validateEmail(true);
  });
  elEmail.addEventListener('blur', function() {
    if (this.value.trim()) validateEmail(false);
  });
}

const elGender = document.getElementById('al_gender');
if (elGender) {
  elGender.addEventListener('change', function() {
    if (this.classList.contains('is-invalid')) validateGender(true);
  });
}

const elNisn = document.getElementById('al_nisn');
if (elNisn) {
  elNisn.addEventListener('input', function() {
    this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
    if (this.classList.contains('is-invalid')) validateNisn(true);
  });
  elNisn.addEventListener('blur', function() {
    if (this.value.trim()) validateNisn(false);
  });
}

const elTahun = document.getElementById('al_tahun');
if (elTahun) {
  elTahun.addEventListener('input', function() {
    this.value = this.value.replace(/[^0-9]/g, '').slice(0, 4);
    if (this.classList.contains('is-invalid')) validateTahun(true);
  });
  elTahun.addEventListener('blur', function() {
    if (this.value.trim()) validateTahun(false);
  });
}

const elPerusahaan = document.getElementById('al_perusahaan');
if (elPerusahaan) {
  elPerusahaan.addEventListener('input', function() {
    if (this.classList.contains('is-invalid')) validatePerusahaan(true);
  });
  elPerusahaan.addEventListener('blur', function() {
    if (this.value.trim()) validatePerusahaan(false);
  });
}

const elPosisi = document.getElementById('al_posisi');
if (elPosisi) {
  elPosisi.addEventListener('input', function() {
    if (this.classList.contains('is-invalid')) validatePosisi(true);
  });
  elPosisi.addEventListener('blur', function() {
    if (this.value.trim()) validatePosisi(false);
  });
}

const elPesan = document.getElementById('al_pesan');
if (elPesan) {
  elPesan.addEventListener('input', function() {
    updatePesanInfoAndValidity(elPesan.classList.contains('is-invalid'));
  });
  elPesan.addEventListener('blur', function() {
    if (this.value.trim()) updatePesanInfoAndValidity(false);
  });
}

/* ── Submit Form ── */
function submitAlumniForm(e) {
  e.preventDefault();

  // Validasi seluruh kolom secara inline
  const vNama       = validateNama(true);
  const vEmail      = validateEmail(true);
  const vGender     = validateGender(true);
  const vNisn       = validateNisn(true);
  const vTahun      = validateTahun(true);
  const vPerusahaan = validatePerusahaan(true);
  const vPosisi     = validatePosisi(true);
  const vPesan      = updatePesanInfoAndValidity(true);

  const isValid = vNama && vEmail && vGender && vNisn && vTahun && vPerusahaan && vPosisi && vPesan;

  if (!isValid) {
    const firstInvalid = document.querySelector('#formSayaAlumni .is-invalid');
    if (firstInvalid) {
      firstInvalid.focus();
      firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
    return;
  }

  // Simulasi loading submit
  const btn = document.getElementById('btn-alumni-submit');
  btn.disabled = true;
  btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Mengirim...';

  setTimeout(function() {
    // Sembunyikan tombol submit & tampilkan sukses
    btn.style.display = 'none';
    document.getElementById('alumni-form-success').style.display = 'block';
    document.getElementById('alumni-form-success').scrollIntoView({ behavior: 'smooth', block: 'center' });

    // Auto-close dan reset setelah 4 detik
    setTimeout(function() {
      closeAlumniModal();
      resetAlumniForm();
    }, 4000);
  }, 1200);
}
</script>

<!-- Interactive Filter & 8-Item Pagination Script (Sama seperti Berita & Galeri) -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  const ITEMS_PER_PAGE = 8;
  let currentPage = 1;
  let currentFilter = 'all';

  const filterButtons = document.querySelectorAll('.btn-filter-pill');
  const allCards = Array.from(document.querySelectorAll('.alumni-card-item'));
  const emptyState = document.getElementById('alumni-empty-state');
  const pgWrap = document.getElementById('alumni-pagination');

  function getFilteredCards() {
    if (currentFilter === 'all') {
      return allCards;
    }
    return allCards.filter(card => card.getAttribute('data-jurusan') === currentFilter);
  }

  function totalPages() {
    return Math.ceil(getFilteredCards().length / ITEMS_PER_PAGE);
  }

  function render(page) {
    currentPage = page;
    const filtered = getFilteredCards();
    const totalItems = filtered.length;
    const total = totalPages() || 1;

    if (currentPage > total) currentPage = total;
    if (currentPage < 1) currentPage = 1;

    allCards.forEach(card => card.classList.add('d-none'));

    if (totalItems === 0) {
      if (emptyState) emptyState.classList.remove('d-none');
      if (pgWrap) pgWrap.innerHTML = '';
      return;
    }

    if (emptyState) emptyState.classList.add('d-none');

    const startIndex = (currentPage - 1) * ITEMS_PER_PAGE;
    const endIndex = Math.min(startIndex + ITEMS_PER_PAGE, totalItems);

    for (let i = startIndex; i < endIndex; i++) {
      const card = filtered[i];
      card.classList.remove('d-none');
      card.style.animation = 'fadeInUp 0.35s ease forwards';
    }

    renderPagination();

    // Refresh trigger kalkulasi AOS agar footer dan elemen bawah tidak stuck tersembunyi
    if (typeof AOS !== 'undefined') {
      AOS.refresh();
      setTimeout(function () {
        AOS.refresh();
      }, 120);
    }
  }

  function renderPagination() {
    const total = totalPages();
    if (!pgWrap) return;
    if (total <= 1) {
      pgWrap.innerHTML = '';
      return;
    }

    pgWrap.innerHTML = `
      <div class="pagination-bar">
        <button type="button" class="pg-btn pg-prev" onclick="window.__alumniPage(${currentPage - 1})" ${currentPage === 1 ? 'disabled' : ''}>
          <i class="fas fa-arrow-left"></i>
          <span>Sebelumnya</span>
        </button>
        <div class="pg-info">
          <span class="pg-current">${currentPage}</span>
          <span class="pg-sep">/</span>
          <span class="pg-total">${total}</span>
        </div>
        <button type="button" class="pg-btn pg-next" onclick="window.__alumniPage(${currentPage + 1})" ${currentPage === total ? 'disabled' : ''}>
          <span>Selanjutnya</span>
          <i class="fas fa-arrow-right"></i>
        </button>
      </div>`;
  }

  window.__alumniPage = function (page) {
    const total = totalPages();
    if (page < 1 || page > total) return;
    render(page);
    const container = document.getElementById('alumni-cards-container');
    if (container) {
      const topOffset = container.getBoundingClientRect().top + window.pageYOffset - 100;
      window.scrollTo({ top: topOffset, behavior: 'smooth' });
    }
  };

  filterButtons.forEach(btn => {
    btn.addEventListener('click', function () {
      filterButtons.forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      currentFilter = this.getAttribute('data-filter');
      render(1);
    });
  });

  // Inisialisasi awal
  render(1);
});
</script>

<?php include __DIR__ . '/../partials/footer.php'; ?>
