<?php
require_once __DIR__ . '/../koneksi.php';

$page_title = "Pusat Karir & Lowongan Kerja";
$active_page = "alumni_karir";

// 30 Data Lowongan Kerja Resmi Mitra Industri
$lowongan = [
    // --- 1 to 8 ---
    [
        'id' => 1,
        'judul' => 'Junior Network Support',
        'perusahaan' => 'PT. Telkom Indonesia (Persero) Tbk',
        'lokasi' => 'Jakarta Selatan',
        'tipe' => 'On-site',
        'tanggal_posting' => '01 Oktober 2026',
        'deadline' => '30 November 2026',
        'deskripsi' => 'Membantu senior teknisi dalam pemasangan kabel jaringan lokal (LAN) dan pengecekan koneksi internet kantor.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan TKJ',
            'Memahami dasar pengalamatan IP Address dan crimping kabel UTP',
            'Mau belajar dan disiplin dalam bekerja'
        ]
    ],
    [
        'id' => 2,
        'judul' => 'IT Helpdesk & Computer Maintenance',
        'perusahaan' => 'PT. Bank Central Asia Tbk (BCA)',
        'lokasi' => 'Tangerang',
        'tipe' => 'On-site',
        'tanggal_posting' => '05 Oktober 2026',
        'deadline' => '15 Desember 2026',
        'deskripsi' => 'Membantu merawat perangkat komputer kantor serta mengatasi masalah ringan pada printer dan jaringan lokal.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan TKJ',
            'Menguasai perakitan komputer dan instalasi Windows dasar',
            'Ramah dan komunikatif'
        ]
    ],
    [
        'id' => 3,
        'judul' => 'Field Installation Assistant',
        'perusahaan' => 'PT. Indosat Ooredoo Hutchison Tbk',
        'lokasi' => 'Bandung',
        'tipe' => 'On-site',
        'tanggal_posting' => '10 Oktober 2026',
        'deadline' => '20 Desember 2026',
        'deskripsi' => 'Mendampingi tim lapangan untuk pengecekan perangkat jaringan telekomunikasi area perumahan.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan TKJ',
            'Memiliki kondisi fisik yang sehat dan aktif',
            'Memiliki SIM C (diutamakan)'
        ]
    ],
    [
        'id' => 4,
        'judul' => 'Junior NOC Operator',
        'perusahaan' => 'PT. Cyberindo Aditama (CBN)',
        'lokasi' => 'Jakarta Pusat',
        'tipe' => 'Hybrid',
        'tanggal_posting' => '02 Oktober 2026',
        'deadline' => '30 November 2026',
        'deskripsi' => 'Memantau layar monitor status jaringan internet dan mencatat laporan gangguan harian.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan TKJ',
            'Mengetahui konsep dasar jaringan internet (LAN/Wi-Fi)',
            'Bersedia bekerja sistem shift'
        ]
    ],
    [
        'id' => 5,
        'judul' => 'IT Inventory & Support Staff',
        'perusahaan' => 'PT. Astra International Tbk',
        'lokasi' => 'Surabaya',
        'tipe' => 'On-site',
        'tanggal_posting' => '08 Oktober 2026',
        'deadline' => '10 Desember 2026',
        'deskripsi' => 'Mendata inventaris perangkat keras komputer dan membantu instalasi aplikasi standar kantor.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan TKJ / RPL',
            'Teliti dalam pencatatan data inventaris',
            'Bisa mengoperasikan MS Office / Google Workspace'
        ]
    ],
    [
        'id' => 6,
        'judul' => 'Server Room Assistant',
        'perusahaan' => 'PT. Darta Media Indonesia (KapanLagi Youniverse)',
        'lokasi' => 'Jakarta Selatan',
        'tipe' => 'On-site',
        'tanggal_posting' => '12 Oktober 2026',
        'deadline' => '31 Desember 2026',
        'deskripsi' => 'Membantu merapikan kabel rak server dan memantau suhu ruangan perangkat server.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan TKJ',
            'Rapi dan teliti dalam pengelolaan perangkat',
            'Bisa bekerja sama dalam tim'
        ]
    ],
    [
        'id' => 7,
        'judul' => 'Station Network Assistant',
        'perusahaan' => 'PT. Kereta Api Indonesia (Persero)',
        'lokasi' => 'Medan',
        'tipe' => 'On-site',
        'tanggal_posting' => '03 Oktober 2026',
        'deadline' => '25 November 2026',
        'deskripsi' => 'Membantu perawatan jalur kabel dan perangkat komunikasi ringan di area stasiun.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan TKJ',
            'Sehat jasmani dan rohani',
            'Disiplin dan tepat waktu'
        ]
    ],
    [
        'id' => 8,
        'judul' => 'Data Center Helper',
        'perusahaan' => 'PT. DCI Indonesia Tbk',
        'lokasi' => 'Bekasi',
        'tipe' => 'On-site',
        'tanggal_posting' => '06 Oktober 2026',
        'deadline' => '15 Desember 2026',
        'deskripsi' => 'Membantu petugas kebersihan dan teknisi dalam merapikan area fasilitas perangkat server.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan TKJ / TAV',
            'Cekatan dan taat aturan keselamatan kerja',
            'Niat kerja tinggi'
        ]
    ],

    // --- 9 to 15 ---
    [
        'id' => 9,
        'judul' => 'Junior Web Content Assistant',
        'perusahaan' => 'PT. Tokopedia (Tokopedia-TikTok)',
        'lokasi' => 'Jakarta Selatan',
        'tipe' => 'Hybrid',
        'tanggal_posting' => '01 Oktober 2026',
        'deadline' => '30 November 2026',
        'deskripsi' => 'Membantu memperbarui teks dan tata letak halaman web sederhana menggunakan HTML/CSS dasar.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan RPL',
            'Paham dasar HTML dan CSS',
            'Memiliki kemauan belajar hal baru yang tinggi'
        ]
    ],
    [
        'id' => 10,
        'judul' => 'App Testing Support (QA Junior)',
        'perusahaan' => 'PT. GoTo Gojek Tokopedia Tbk',
        'lokasi' => 'Jakarta Selatan',
        'tipe' => 'Remote',
        'tanggal_posting' => '04 Oktober 2026',
        'deadline' => '10 Desember 2026',
        'deskripsi' => 'Mencoba tombol-tombol pada aplikasi versi uji coba dan melaporkan jika ada error tampilan.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan RPL',
            'Teliti dalam mengecek detail aplikasi di HP/Laptop',
            'Rajin mencatat temuan bug sederhana'
        ]
    ],
    [
        'id' => 11,
        'judul' => 'Junior Software Data Checker',
        'perusahaan' => 'PT. Traveloka Indonesia',
        'lokasi' => 'Tangerang',
        'tipe' => 'Hybrid',
        'tanggal_posting' => '07 Oktober 2026',
        'deadline' => '20 Desember 2026',
        'deskripsi' => 'Membantu merapikan dan mengecek kesesuaian data teks produk pada sistem aplikasi.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan RPL / TKJ',
            'Teliti dan sabar',
            'Terbiasa menggunakan komputer'
        ]
    ],
    [
        'id' => 12,
        'judul' => 'Junior Coding Trainee',
        'perusahaan' => 'PT. Bukalapak.com Tbk',
        'lokasi' => 'Jakarta Pusat',
        'tipe' => 'On-site',
        'tanggal_posting' => '09 Oktober 2026',
        'deadline' => '30 November 2026',
        'deskripsi' => 'Mengikuti program bimbingan untuk membantu membuat skrip program kecil bagian backend.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan RPL',
            'Mengerti dasar logika pemrograman (PHP/JS)',
            'Punya portofolio tugas project web kecil'
        ]
    ],
    [
        'id' => 13,
        'judul' => 'Frontend HTML/CSS Trainee',
        'perusahaan' => 'PT. Ruang Raya Indonesia (Ruangguru)',
        'lokasi' => 'Jakarta Selatan',
        'tipe' => 'Hybrid',
        'tanggal_posting' => '11 Oktober 2026',
        'deadline' => '15 Desember 2026',
        'deskripsi' => 'Membantu mengubah desain tampilan gambar menjadi kode HTML/CSS sederhana.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan RPL / DKV',
            'Memahami pemotongan aset desain ke web',
            'Kreatif dan teliti'
        ]
    ],
    [
        'id' => 14,
        'judul' => 'Data Entry & Admin IT',
        'perusahaan' => 'PT. Bank Mandiri (Persero) Tbk',
        'lokasi' => 'Jakarta Pusat',
        'tipe' => 'On-site',
        'tanggal_posting' => '02 Oktober 2026',
        'deadline' => '20 November 2026',
        'deskripsi' => 'Memasukkan data digital laporan harian perusahaan ke dalam sistem aplikasi database internal.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan RPL',
            'Cepat dan teliti mengetik',
            'Menguasai Microsoft Excel dasar'
        ]
    ],
    [
        'id' => 15,
        'judul' => 'Junior Programmer Support',
        'perusahaan' => 'PT. Global Digital Niaga Tbk (Blibli)',
        'lokasi' => 'Jakarta Barat',
        'tipe' => 'On-site',
        'tanggal_posting' => '05 Oktober 2026',
        'deadline' => '30 Desember 2026',
        'deskripsi' => 'Membantu tim pengembang senior merapikan baris kode program dan mendokumentasikan fitur aplikasi.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan RPL',
            'Paham dasar penggunaan GitHub / Git',
            'Semangat kerja dan rasa ingin tahu tinggi'
        ]
    ],

    // --- 16 to 21 ---
    [
        'id' => 16,
        'judul' => 'Studio Broadcast Assistant',
        'perusahaan' => 'PT. Televisi Transformasi Indonesia (Trans TV)',
        'lokasi' => 'Jakarta Selatan',
        'tipe' => 'On-site',
        'tanggal_posting' => '01 Oktober 2026',
        'deadline' => '30 November 2026',
        'deskripsi' => 'Membantu kru senior menyiapkan kabel kamera, lampu studio, dan merapikan perangkat audio sebelum syuting.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan TAV',
            'Mengerti jenis-jenis kabel audio dan video',
            'Cekatan dan sigap di lapangan'
        ]
    ],
    [
        'id' => 17,
        'judul' => 'Sound System Crew Helper',
        'perusahaan' => 'PT. DSS Sound System Indonesia',
        'lokasi' => 'Tangerang',
        'tipe' => 'On-site',
        'tanggal_posting' => '03 Oktober 2026',
        'deadline' => '15 Desember 2026',
        'deskripsi' => 'Membantu mengangkat, merakit, dan merapikan perangkat speaker serta perkabelan panggung acara.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan TAV',
            'Sehat jasmani dan kuat fisik',
            'Disiplin waktu dan komunikatif'
        ]
    ],
    [
        'id' => 18,
        'judul' => 'Assembly Electronics Assistant',
        'perusahaan' => 'PT. Panasonic Manufacturing Indonesia',
        'lokasi' => 'Jakarta Timur',
        'tipe' => 'On-site',
        'tanggal_posting' => '06 Oktober 2026',
        'deadline' => '20 Desember 2026',
        'deskripsi' => 'Membantu pengecekan fisik komponen alat elektronik di bagian jalur perakitan pabrik.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan TAV / Teknik Elektro',
            'Teliti dan sabar',
            'Bisa membaca kode warna komponen dasar'
        ]
    ],
    [
        'id' => 19,
        'judul' => 'CCTV Installation Helper',
        'perusahaan' => 'PT. Securicor Indonesia',
        'lokasi' => 'Surabaya',
        'tipe' => 'On-site',
        'tanggal_posting' => '08 Oktober 2026',
        'deadline' => '10 Desember 2026',
        'deskripsi' => 'Membantu teknisi utama memasang jalur kabel dan posisi kamera pengawas di dinding atau plafon.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan TAV / TKJ',
            'Terbiasa menggunakan bor tangan & perkakas',
            'Cekatan dan memperhatikan K3'
        ]
    ],
    [
        'id' => 20,
        'judul' => 'AV Meeting Room Assistant',
        'perusahaan' => 'PT. Multimedia Nusantara (Telkom Metra)',
        'lokasi' => 'Bandung',
        'tipe' => 'On-site',
        'tanggal_posting' => '10 Oktober 2026',
        'deadline' => '31 Desember 2026',
        'deskripsi' => 'Menyalakan dan mengecek proyektor, layar TV, serta mikrofon ruang rapat sebelum acara dimulai.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan TAV',
            'Rapi, sopan, dan sigap melayani',
            'Paham menyambungkan display laptop ke proyektor'
        ]
    ],
    [
        'id' => 21,
        'judul' => 'Service Center Repair Helper',
        'perusahaan' => 'PT. Sony Indonesia Service Center',
        'lokasi' => 'Jakarta Pusat',
        'tipe' => 'On-site',
        'tanggal_posting' => '12 Oktober 2026',
        'deadline' => '15 Desember 2026',
        'deskripsi' => 'Membantu membuka casing perangkat elektronik rusak dan merapikan komponen sparepart di meja servis.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan TAV',
            'Ketelitian tinggi dalam memegang komponen kecil',
            'Jujur, tekun, dan rajin'
        ]
    ],

    // --- 22 to 30 ---
    [
        'id' => 22,
        'judul' => 'Junior Graphic Design Assistant',
        'perusahaan' => 'PT. Gojek Indonesia',
        'lokasi' => 'Jakarta Selatan',
        'tipe' => 'Hybrid',
        'tanggal_posting' => '01 Oktober 2026',
        'deadline' => '30 November 2026',
        'deskripsi' => 'Membantu tim kreatif membuat gambar poster sederhana atau mengubah ukuran banner feed media sosial.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan DKV',
            'Menguasai Adobe Photoshop / CorelDraw / Canva',
            'Punya portofolio desain tugas sekolah'
        ]
    ],
    [
        'id' => 23,
        'judul' => 'Social Media Content Creator Support',
        'perusahaan' => 'PT. Paragon Technology and Innovation (Wardah)',
        'lokasi' => 'Tangerang',
        'tipe' => 'On-site',
        'tanggal_posting' => '04 Oktober 2026',
        'deadline' => '20 Desember 2026',
        'deskripsi' => 'Membantu mengambil foto produk sederhana dan mengedit video pendek vertikal untuk TikTok/Reels.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan DKV',
            'Kreatif dan aktif mengikuti tren media sosial',
            'Bisa menggunakan aplikasi CapCut / VN'
        ]
    ],
    [
        'id' => 24,
        'judul' => 'Junior Video Editing Assistant',
        'perusahaan' => 'PT. Narasi Media Pracipta (Narasi)',
        'lokasi' => 'Jakarta Selatan',
        'tipe' => 'Hybrid',
        'tanggal_posting' => '06 Oktober 2026',
        'deadline' => '15 Desember 2026',
        'deskripsi' => 'Memotong klip video mentah dan merapikan susunan file video sebelum diedit oleh editor senior.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan DKV / TAV',
            'Menguasai dasar Premiere Pro / CapCut Desktop',
            'Sabar dan teliti dalam timeline editing'
        ]
    ],
    [
        'id' => 25,
        'judul' => 'UI/UX Design Intern (Magang)',
        'perusahaan' => 'PT. Tiket Com Indonesia',
        'lokasi' => 'Jakarta Pusat',
        'tipe' => 'Remote',
        'tanggal_posting' => '07 Oktober 2026',
        'deadline' => '30 November 2026',
        'deskripsi' => 'Membantu merapikan ikon tombol atau membuat kotak sketsa tampilan layar aplikasi (wireframe).',
        'kualifikasi' => [
            'Lulusan SMK Jurusan DKV / RPL',
            'Menguasai aplikasi Figma dasar',
            'Mau belajar membuat antarmuka yang rapi'
        ]
    ],
    [
        'id' => 26,
        'judul' => 'Store Visual Display Assistant',
        'perusahaan' => 'PT. Matahari Department Store Tbk',
        'lokasi' => 'Surabaya',
        'tipe' => 'On-site',
        'tanggal_posting' => '09 Oktober 2026',
        'deadline' => '10 Desember 2026',
        'deskripsi' => 'Membantu menata dekorasi manekin baju dan memasang papan petunjuk diskon di area toko.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan DKV',
            'Memiliki selera estetika & tata letak ruang',
            'Energik dan berpenampilan rapi'
        ]
    ],
    [
        'id' => 27,
        'judul' => 'Pre-Press Printing Helper',
        'perusahaan' => 'PT. Gramedia Printing',
        'lokasi' => 'Jakarta Barat',
        'tipe' => 'On-site',
        'tanggal_posting' => '11 Oktober 2026',
        'deadline' => '31 Desember 2026',
        'deskripsi' => 'Memeriksa apakah file gambar dari pemesan sudah pas ukurannya sebelum masuk mesin cetak.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan DKV',
            'Teliti mengecek resolusi gambar & warna CMYK',
            'Cekatan dan teliti'
        ]
    ],
    [
        'id' => 28,
        'judul' => 'Junior 2D Asset Helper',
        'perusahaan' => 'PT. Anantarupa Studios (Game Developer)',
        'lokasi' => 'Jakarta Selatan',
        'tipe' => 'Hybrid',
        'tanggal_posting' => '02 Oktober 2026',
        'deadline' => '15 Desember 2026',
        'deskripsi' => 'Membantu membuat sketsa warna dasar untuk objek latar belakang game sederhana.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan DKV',
            'Bisa menggambar menggunakan drawing tablet',
            'Imajinatif dan komunikatif'
        ]
    ],
    [
        'id' => 29,
        'judul' => 'Corporate Design Support',
        'perusahaan' => 'PT. Telkomsel Ekosistem Digital',
        'lokasi' => 'Jakarta Selatan',
        'tipe' => 'On-site',
        'tanggal_posting' => '05 Oktober 2026',
        'deadline' => '20 Desember 2026',
        'deskripsi' => 'Membantu merapikan file presentasi kantor dan mendesain kartu nama atau sertifikat internal.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan DKV',
            'Rapi, teliti, dan komunikatif',
            'Menguasai software desain grafis standar'
        ]
    ],
    [
        'id' => 30,
        'judul' => 'E-commerce Banner Designer',
        'perusahaan' => 'PT. Shopee International Indonesia',
        'lokasi' => 'Jakarta Selatan',
        'tipe' => 'On-site',
        'tanggal_posting' => '10 Oktober 2026',
        'deadline' => '30 November 2026',
        'deskripsi' => 'Membuat gambar banner diskon harian dan poster promosi produk toko online sesuai panduan.',
        'kualifikasi' => [
            'Lulusan SMK Jurusan DKV',
            'Bisa bekerja cepat mengejar tenggat waktu',
            'Kreatif dan terbiasa dengan desain komersial'
        ]
    ]
];

include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/navbar.php';
?>

<!-- Header Banner Futuristik -->
<section class="karir-hero-section">
  <!-- Breadcrumb Integrasi -->
  <nav aria-label="breadcrumb" class="karir-breadcrumb-nav">
    <ol class="breadcrumb breadcrumb-custom mb-0">
      <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Beranda</a></li>
      <li class="breadcrumb-item">Alumni &amp; Karir</li>
      <li class="breadcrumb-item active" aria-current="page">Pengembangan Karir</li>
    </ol>
  </nav>

  <div class="karir-container-wide text-center">
    <h1 class="karir-hero-title" data-aos="fade-up">
      Pusat Pengembangan Karir &amp; Lowongan Kerja
    </h1>
    <p class="karir-hero-subtitle" data-aos="fade-up" data-aos-delay="100">
      Membuka gerbang profesional masa depan bagi lulusan SMK Cerdas Satu Bangsa menuju karir impian di perusahaan mitra nasional &amp; multinasional.
    </p>
  </div>
</section>

<!-- Main Job Listing Section -->
<section class="karir-main-section">
  <div class="karir-container-wide">

    <!-- Toolbar Pencarian & Status Lowongan (Informatif & Fungsional) -->
    <div class="karir-toolbar-wrapper mb-4" data-aos="fade-up">
      <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
        
        <!-- Info Status Lowongan -->
        <div class="karir-info-pill">
          <div class="info-pill-icon"><i class="fas fa-briefcase"></i></div>
          <div class="info-pill-text">
            <span class="info-pill-title">Daftar Lowongan Kerja Terbuka</span>
            <span class="info-pill-desc">Menampilkan <strong id="karir-range-info" class="text-dark">1 – 10</strong> dari total <strong id="karir-total-count" class="text-dark"><?= count($lowongan) ?></strong> posisi yang sedang aktif</span>
          </div>
        </div>

        <!-- Kolom Pencarian Cepat -->
        <div class="karir-search-box">
          <i class="fas fa-search karir-search-icon"></i>
          <input type="text" id="karir-search-input" class="karir-search-input" placeholder="Cari posisi kerja, perusahaan, atau kota...">
          <button type="button" id="karir-search-clear" class="karir-search-clear" style="display:none;" title="Bersihkan pencarian">
            <i class="fas fa-times"></i>
          </button>
        </div>

      </div>
    </div>

    <!-- Job Cards Grid (5 Cards Per Row on Desktop) -->
    <div class="karir-cards-grid" id="karir-cards-container">
      <?php foreach ($lowongan as $job): ?>
        <?php
          // Work Type Badge
          $tipeBadgeClass = 'badge-onsite';
          $tipeIcon = 'fa-building';
          if ($job['tipe'] === 'Remote') {
            $tipeBadgeClass = 'badge-remote';
            $tipeIcon = 'fa-globe';
          } elseif ($job['tipe'] === 'Hybrid') {
            $tipeBadgeClass = 'badge-hybrid';
            $tipeIcon = 'fa-laptop-house';
          }

        ?>
        <div class="karir-card-item" data-id="<?= $job['id'] ?>" data-lokasi="<?= htmlspecialchars(strtolower($job['lokasi'])) ?>" data-perusahaan="<?= htmlspecialchars(strtolower($job['perusahaan'])) ?>" data-judul="<?= htmlspecialchars(strtolower($job['judul'])) ?>">
          <div class="karir-card-inner">
            
            <!-- Card Top: Work Model Badge & Deadline Chip -->
            <div class="karir-card-header">
              <span class="badge-tipe <?= $tipeBadgeClass ?>">
                <i class="fas <?= $tipeIcon ?> me-1"></i> <?= $job['tipe'] ?>
              </span>
              <span class="karir-chip-deadline" title="Batas Waktu Lamaran">
                <i class="far fa-clock me-1"></i> s/d <?= htmlspecialchars($job['deadline']) ?>
              </span>
            </div>

            <!-- Job Title & Company -->
            <div class="karir-card-body">
              <h3 class="karir-job-title" title="<?= htmlspecialchars($job['judul']) ?>">
                <?= htmlspecialchars($job['judul']) ?>
              </h3>
              
              <div class="karir-company-name">
                <i class="fas fa-building text-emerald me-1"></i>
                <span title="<?= htmlspecialchars($job['perusahaan']) ?>"><?= htmlspecialchars($job['perusahaan']) ?></span>
                <i class="fas fa-circle-check text-primary ms-1" title="Mitra Resmi BKK"></i>
              </div>

              <!-- Location Row -->
              <div class="karir-location-row">
                <i class="fas fa-location-dot text-danger me-1"></i>
                <span><?= htmlspecialchars($job['lokasi']) ?></span>
              </div>

              <!-- Description -->
              <p class="karir-job-desc">
                <?= htmlspecialchars($job['deskripsi']) ?>
              </p>

              <!-- Key Qualification Points Box -->
              <div class="karir-job-reqs">
                <div class="reqs-title">
                  <i class="fas fa-list-check text-emerald me-1"></i> Kualifikasi Utama:
                </div>
                <ul class="reqs-list">
                  <?php foreach ($job['kualifikasi'] as $req): ?>
                    <li>
                      <i class="fas fa-check text-success"></i>
                      <span><?= htmlspecialchars($req) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>

            <!-- Card Action Footer -->
            <div class="karir-card-footer">
              <button type="button" class="btn-karir-apply" onclick="openLamarModal(<?= htmlspecialchars(json_encode($job), ENT_QUOTES, 'UTF-8') ?>)">
                <span>Lamar Lowongan</span>
              </button>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Empty State Filter Notice -->
    <div id="karir-empty-state" class="text-center py-5 d-none">
      <div class="karir-empty-icon mb-3">
        <i class="fas fa-search"></i>
      </div>
      <h5 class="fw-bold text-dark font-poppins">Lowongan Tidak Ditemukan</h5>
      <p class="text-muted fs-7">Kata kunci yang Anda cari tidak cocok dengan posisi pekerjaan manapun. Silakan coba kata kunci lain.</p>
    </div>

    <!-- Pagination Wrapper (UI Sama Seperti Daftar Alumni) -->
    <div class="pagination-wrapper mt-5" id="karir-pagination"></div>

  </div>
</section>

<!-- Modal Lamar Loker Futuristik -->
<div id="modalLamarLoker" class="karir-modal-overlay" style="display:none;" role="dialog" aria-modal="true" aria-labelledby="modalLokerTitle">
  <div class="karir-modal-box">
    
    <!-- Modal Header -->
    <div class="karir-modal-header">
      <div>
        <h4 id="modalLokerTitle" class="karir-modal-title">Formulir Lamaran Kerja</h4>
        <p class="karir-modal-subtitle" id="modalJobCompanySubtitle">PT. Telkom Indonesia</p>
      </div>
      <button type="button" class="karir-modal-close" onclick="closeLamarModal()" aria-label="Tutup Modal">
        <i class="fas fa-times"></i>
      </button>
    </div>

    <!-- Modal Body -->
    <div class="karir-modal-body">
      <!-- Info Ringkas Pekerjaan -->
      <div class="karir-modal-job-summary mb-4">
        <div class="d-flex align-items-center gap-2 mb-1">
          <i class="fas fa-briefcase text-emerald"></i>
          <strong id="modalJobTitleText" class="text-dark fs-7">Junior Network Support</strong>
        </div>
        <div class="d-flex flex-wrap gap-3 text-muted fs-8">
          <span><i class="fas fa-map-marker-alt text-danger me-1"></i> <span id="modalJobLocationText">Jakarta Selatan</span></span>
          <span><i class="far fa-calendar-check text-success me-1"></i> Batas: <span id="modalJobDeadlineText">30 November 2026</span></span>
        </div>
      </div>

      <form id="formLamarLoker" novalidate onsubmit="submitLamaran(event)" enctype="multipart/form-data">
        <div class="row g-3">
          
          <!-- Nama Lengkap -->
          <div class="col-sm-6">
            <label class="karir-form-label" for="lamar_nama">Nama Lengkap <span class="text-danger">*</span></label>
            <input type="text" id="lamar_nama" name="nama" class="karir-form-input" placeholder="Contoh: Budi Santoso" required>
            <div class="karir-field-error" id="err_lamar_nama"></div>
          </div>

          <!-- Alamat Email -->
          <div class="col-sm-6">
            <label class="karir-form-label" for="lamar_email">Alamat Email Aktif <span class="text-danger">*</span></label>
            <input type="email" id="lamar_email" name="email" class="karir-form-input" placeholder="Contoh: budi@gmail.com" required>
            <div class="karir-field-error" id="err_lamar_email"></div>
          </div>

          <!-- No. WhatsApp / HP -->
          <div class="col-sm-6">
            <label class="karir-form-label" for="lamar_telepon">No. WhatsApp / HP <span class="text-danger">*</span></label>
            <input type="tel" id="lamar_telepon" name="telepon" class="karir-form-input" placeholder="Contoh: 081234567890" maxlength="14" required>
            <div class="karir-field-error" id="err_lamar_telepon"></div>
          </div>

          <!-- NISN / Tahun Lulus -->
          <div class="col-sm-6">
            <label class="karir-form-label" for="lamar_nisn">NISN Siswa / Alumni <span class="text-danger">*</span></label>
            <input type="text" id="lamar_nisn" name="nisn" class="karir-form-input" placeholder="10 digit angka" maxlength="10" required>
            <div class="karir-field-error" id="err_lamar_nisn"></div>
          </div>

          <!-- Link Portofolio / CV -->
          <div class="col-12">
            <label class="karir-form-label" for="lamar_link">Tautan Portofolio / CV Online (Google Drive / GitHub / LinkedIn)</label>
            <input type="url" id="lamar_link" name="link_cv" class="karir-form-input" placeholder="https://drive.google.com/...">
          </div>

          <!-- Motivasi & Catatan Tambahan + Lampiran Berkas PDF (Paperclip Pin) -->
          <div class="col-12">
            <label class="karir-form-label" for="lamar_pesan">Motivasi &amp; Catatan Tambahan</label>
            <div class="karir-textarea-box">
              <textarea id="lamar_pesan" name="pesan" class="karir-textarea" rows="3" placeholder="Tuliskan motivasi singkat Anda mengenai posisi ini..."></textarea>
              
              <!-- Action Bar: Kliping Pin Upload File PDF -->
              <div class="karir-upload-zone">
                <!-- Input File PDF (1 File, Max 15MB, PDF Only) -->
                <input type="file" id="lamar_pdf" name="file_pdf" accept=".pdf,application/pdf" style="display:none;" onchange="handlePdfUpload(this)">

                <!-- Tombol Kliping Pin (Upload PDF) -->
                <button type="button" class="btn-paperclip-pin" id="btn-paperclip-upload" onclick="document.getElementById('lamar_pdf').click()" title="Lampirkan Dokumen PDF (Maks. 15 MB)">
                  <i class="fas fa-paperclip"></i>
                  <span>Lampirkan Berkas PDF (Maks. 15 MB)</span>
                </button>

                <!-- Box File Terpilih & Tombol X Batalkan -->
                <div id="pdf-preview-chip" class="pdf-file-chip" style="display:none;">
                  <div class="pdf-chip-info">
                    <i class="fas fa-file-pdf text-danger fs-6"></i>
                    <span class="pdf-chip-name" id="pdf-file-name-text">dokumen.pdf</span>
                    <span class="pdf-chip-size" id="pdf-file-size-text">(0 MB)</span>
                  </div>
                  <button type="button" class="btn-cancel-pdf" onclick="cancelPdfUpload()" title="Batalkan file yang dimasukkan" aria-label="Batalkan file">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- Pesan Error Khusus PDF -->
            <div class="karir-field-error" id="err_lamar_pdf"></div>

            <!-- Catatan Informasi Tegas & Profesional -->
            <div class="karir-note-tegas mt-3">
              <div class="note-tegas-icon-wrap">
                <i class="fas fa-circle-exclamation"></i>
              </div>
              <p class="note-tegas-text">Pastikan seluruh informasi dan file pdf lamaran yang kamu masukkan sudah sesuai agar bisa di proses pihak perusahaan. Terimakasih.</p>
            </div>
          </div>

        </div>

        <!-- Alert Sukses (Hidden) -->
        <div id="lamar-form-success" class="karir-success-msg" style="display:none;">
          <i class="fas fa-circle-check me-2"></i>
          Lamaran Anda telah diteruskan ke database Bursa Kerja Khusus (BKK) SMK Cerdas Satu Bangsa. Tim BKK &amp; HRD perusahaan akan menghubungi Anda melalui WhatsApp / Email.
        </div>

      </form>
    </div>

    <!-- Modal Footer -->
    <div class="karir-modal-footer">
      <button type="submit" form="formLamarLoker" class="btn-karir-submit" id="btn-lamar-submit">
        Kirim Berkas Lamaran
      </button>
    </div>

  </div>
</div>

<style>
/* ── Container Extra Wide untuk Mengisi Layar ── */
.karir-container-wide {
  width: 100%;
  max-width: 1780px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 28px;
  padding-right: 28px;
}
@media (max-width: 768px) {
  .karir-container-wide {
    padding-left: 16px;
    padding-right: 16px;
  }
}

/* ── Hero Section Futuristik ── */
.karir-hero-section {
  background: linear-gradient(135deg, #064E3B 0%, #065F46 45%, #0F172A 100%);
  color: #FFFFFF;
  padding: 55px 0 42px;
  position: relative;
  overflow: hidden;
}
.karir-breadcrumb-nav {
  position: absolute;
  top: 22px;
  right: clamp(16px, 2vw, 32px);
  z-index: 5;
}
@media (max-width: 768px) {
  .karir-breadcrumb-nav {
    position: static;
    display: flex;
    justify-content: center;
    margin-bottom: 14px;
  }
}
.karir-hero-section::before {
  content: "";
  position: absolute;
  top: -40%;
  right: -10%;
  width: 600px;
  height: 600px;
  background: radial-gradient(circle, rgba(16, 185, 129, 0.25) 0%, rgba(16, 185, 129, 0) 70%);
  border-radius: 50%;
  pointer-events: none;
}
.karir-hero-title {
  font-family: 'Poppins', sans-serif;
  font-size: 2.2rem;
  font-weight: 800;
  line-height: 1.25;
  margin-bottom: 12px;
  background: linear-gradient(180deg, #FFFFFF 0%, #D1FAE5 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.karir-hero-subtitle {
  font-family: 'Poppins', sans-serif;
  font-size: 0.95rem;
  color: #E2E8F0;
  max-width: 820px;
  margin: 0 auto;
  line-height: 1.6;
}

/* ── Main Section ── */
.karir-main-section {
  padding: 36px 0 70px;
  background: #F8FAFC;
}

/* ── Toolbar & Info Status ── */
.karir-toolbar-wrapper {
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  border-radius: 16px;
  padding: 14px 22px;
  box-shadow: 0 4px 16px rgba(15, 23, 42, 0.04);
}
.karir-info-pill {
  display: flex;
  align-items: center;
  gap: 12px;
}
.info-pill-icon {
  width: 44px;
  height: 44px;
  border-radius: 12px;
  background: #ECFDF5;
  color: #059669;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.15rem;
  flex-shrink: 0;
}
.info-pill-text {
  display: flex;
  flex-direction: column;
}
.info-pill-title {
  font-family: 'Poppins', sans-serif;
  font-size: 0.95rem;
  font-weight: 700;
  color: #0F172A;
  line-height: 1.25;
}
.info-pill-desc {
  font-size: 0.8rem;
  color: #64748B;
  margin-top: 2px;
}

/* ── Search Box ── */
.karir-search-box {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  max-width: 420px;
}
.karir-search-icon {
  position: absolute;
  left: 16px;
  color: #94A3B8;
  font-size: 0.85rem;
  pointer-events: none;
}
.karir-search-input {
  width: 100%;
  padding: 10px 40px 10px 42px;
  border: 1.5px solid #E2E8F0;
  border-radius: 50px;
  font-family: 'Poppins', sans-serif;
  font-size: 0.82rem;
  color: #0F172A;
  background: #F8FAFC;
  outline: none;
  transition: all 0.2s ease;
}
.karir-search-input:focus {
  border-color: #059669;
  background: #FFFFFF;
  box-shadow: 0 0 0 3px rgba(5, 150, 105, 0.12);
}
.karir-search-clear {
  position: absolute;
  right: 14px;
  background: none;
  border: none;
  color: #94A3B8;
  cursor: pointer;
  padding: 4px;
  font-size: 0.82rem;
  transition: color 0.2s ease;
}
.karir-search-clear:hover {
  color: #DC2626;
}

/* ── Grid 5 Kolom Desktop ── */
.karir-cards-grid {
  display: grid;
  grid-template-columns: repeat(5, minmax(0, 1fr));
  gap: 20px;
}
@media (max-width: 1560px) {
  .karir-cards-grid {
    grid-template-columns: repeat(4, minmax(0, 1fr));
  }
}
@media (max-width: 1200px) {
  .karir-cards-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }
}
@media (max-width: 860px) {
  .karir-cards-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}
@media (max-width: 560px) {
  .karir-cards-grid {
    grid-template-columns: 1fr;
  }
}

/* ── Card Styling Modern & Futuristik ── */
.karir-card-item {
  display: flex;
}
.karir-card-inner {
  background: #FFFFFF;
  border-radius: 18px;
  border: 1px solid #E2E8F0;
  display: flex;
  flex-direction: column;
  width: 100%;
  padding: 18px 16px;
  box-shadow: 0 4px 16px rgba(15, 23, 42, 0.04);
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  position: relative;
  overflow: hidden;
}
.karir-card-inner:hover {
  transform: translateY(-6px);
  box-shadow: 0 18px 36px -10px rgba(15, 23, 42, 0.12), 0 6px 16px -4px rgba(15, 23, 42, 0.06);
  border-color: #CBD5E1;
}

/* ── Top Header: Work Model Badge & Deadline Chip ── */
.karir-card-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 12px;
  gap: 8px;
}
.badge-tipe {
  font-family: 'Poppins', sans-serif;
  font-size: 0.7rem;
  font-weight: 600;
  padding: 3px 9px;
  border-radius: 50px;
  white-space: nowrap;
}
.badge-onsite { background: #F1F5F9; color: #475569; border: 1px solid #E2E8F0; }
.badge-remote { background: #E0F2FE; color: #0284C7; border: 1px solid #BAE6FD; }
.badge-hybrid { background: #F3E8FF; color: #7E22CE; border: 1px solid #E9D5FF; }

.karir-chip-deadline {
  font-size: 0.68rem;
  color: #B45309;
  background: #FFFBEB;
  border: 1px solid #FDE68A;
  padding: 3px 8px;
  border-radius: 50px;
  white-space: nowrap;
  font-weight: 500;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 58%;
}

/* ── Body ── */
.karir-card-body {
  flex: 1;
  display: flex;
  flex-direction: column;
}
.karir-job-title {
  font-family: 'Poppins', sans-serif;
  font-size: 0.95rem;
  font-weight: 700;
  color: #0F172A;
  line-height: 1.35;
  margin: 0 0 6px;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  min-height: 40px;
  transition: color 0.2s ease;
}
.karir-card-inner:hover .karir-job-title {
  color: #059669;
}
.karir-company-name {
  font-family: 'Poppins', sans-serif;
  font-size: 0.78rem;
  font-weight: 600;
  color: #334155;
  margin-bottom: 6px;
  display: flex;
  align-items: center;
  white-space: nowrap;
  overflow: hidden;
}
.karir-company-name span {
  overflow: hidden;
  text-overflow: ellipsis;
}

.karir-location-row {
  display: flex;
  align-items: center;
  font-size: 0.72rem;
  color: #64748B;
  margin-bottom: 10px;
}
.karir-location-row span {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

/* ── Deskripsi ── */
.karir-job-desc {
  font-size: 0.76rem;
  color: #64748B;
  line-height: 1.48;
  margin-bottom: 10px;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  min-height: 34px;
}

/* ── Kualifikasi ── */
.karir-job-reqs {
  background: #F8FAFC;
  border: 1px solid #F1F5F9;
  border-radius: 12px;
  padding: 9px 11px;
  margin-bottom: 12px;
}
.reqs-title {
  font-size: 0.7rem;
  font-weight: 700;
  color: #1E293B;
  text-transform: uppercase;
  letter-spacing: 0.4px;
  margin-bottom: 6px;
  display: flex;
  align-items: center;
}
.reqs-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 4px;
}
.reqs-list li {
  display: flex;
  align-items: flex-start;
  gap: 6px;
  font-size: 0.72rem;
  color: #475569;
  line-height: 1.35;
}
.reqs-list li i {
  font-size: 0.68rem;
  margin-top: 2.5px;
  flex-shrink: 0;
}

/* ── Footer & Buttons ── */
.karir-card-footer {
  margin-top: auto;
  padding-top: 6px;
}
.btn-karir-apply {
  width: 100%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 9px 14px;
  border-radius: 10px;
  font-family: 'Poppins', sans-serif;
  font-size: 0.8rem;
  font-weight: 600;
  color: #FFFFFF;
  border: none;
  cursor: pointer;
  transition: all 0.25s ease;
  background: linear-gradient(135deg, #059669 0%, #047857 100%);
  box-shadow: 0 4px 12px rgba(5, 150, 105, 0.2);
}
.btn-karir-apply:hover {
  background: linear-gradient(135deg, #047857 0%, #065F46 100%);
  transform: translateY(-2px);
  box-shadow: 0 6px 16px rgba(5, 150, 105, 0.32);
}
.btn-karir-apply i {
  font-size: 0.75rem;
  transition: transform 0.2s ease;
}
.btn-karir-apply:hover i {
  transform: translateX(3px);
}

/* ── Empty State ── */
.karir-empty-icon {
  width: 70px;
  height: 70px;
  background: #F1F5F9;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 1.8rem;
  color: #94A3B8;
}

/* ── Modal Lamar Loker ── */
.karir-modal-overlay {
  position: fixed;
  inset: 0;
  background: rgba(15, 23, 42, 0.65);
  backdrop-filter: blur(5px);
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
.karir-modal-box {
  background: #FFFFFF;
  border-radius: 20px;
  width: 100%;
  max-width: 620px;
  max-height: 92vh;
  display: flex;
  flex-direction: column;
  box-shadow: 0 25px 60px rgba(15, 23, 42, 0.25);
  animation: modalSlideUp 0.25s ease;
}
@keyframes modalSlideUp {
  from { transform: translateY(20px); opacity: 0; }
  to   { transform: translateY(0); opacity: 1; }
}
.karir-modal-header {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  padding: 22px 24px 16px;
  border-bottom: 1px solid #E2E8F0;
}
.karir-modal-title {
  font-family: 'Poppins', sans-serif;
  font-size: 1.1rem;
  font-weight: 700;
  color: #0F172A;
  margin: 0;
}
.karir-modal-subtitle {
  font-size: 0.85rem;
  color: #2563EB;
  font-weight: 600;
  margin: 2px 0 0;
}
.karir-modal-close {
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
.karir-modal-close:hover {
  background: #F8FAFC;
  border-color: #CBD5E1;
  color: #DC2626;
}
.karir-modal-body {
  overflow-y: auto;
  padding: 22px 24px;
  flex: 1;
}
.karir-modal-job-summary {
  background: #F8FAFC;
  border: 1px solid #E2E8F0;
  border-radius: 12px;
  padding: 12px 14px;
}
.karir-form-label {
  display: block;
  font-family: 'Poppins', sans-serif;
  font-size: 0.82rem;
  font-weight: 600;
  color: #374151;
  margin-bottom: 5px;
}
.karir-form-input {
  width: 100%;
  padding: 9px 13px;
  border: 1.5px solid #E2E8F0;
  border-radius: 10px;
  font-family: 'Poppins', sans-serif;
  font-size: 0.85rem;
  color: #0F172A;
  background: #FAFAFA;
  transition: border-color 0.2s ease, box-shadow 0.2s ease;
  outline: none;
}
.karir-form-input:focus {
  border-color: #059669;
  box-shadow: 0 0 0 3px rgba(5,150,105,0.12);
  background: #FFFFFF;
}
.karir-form-input.is-invalid {
  border-color: #DC2626 !important;
  background: #FEF2F2 !important;
}
.karir-field-error {
  display: none;
  align-items: center;
  gap: 5px;
  font-size: 0.76rem;
  font-weight: 500;
  color: #DC2626;
  margin-top: 4px;
}
.karir-field-error.show {
  display: flex;
}
.karir-field-error::before {
  content: "\f071";
  font-family: "Font Awesome 6 Free", "Font Awesome 5 Free";
  font-weight: 900;
  font-size: 0.7rem;
}
.karir-modal-footer {
  padding: 16px 24px 22px;
  border-top: 1px solid #E2E8F0;
  display: flex;
  justify-content: flex-end;
}
.btn-karir-submit {
  background: #059669;
  color: #FFFFFF;
  border: none;
  padding: 11px 24px;
  border-radius: 10px;
  font-family: 'Poppins', sans-serif;
  font-size: 0.875rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.2s ease;
}
.btn-karir-submit:hover {
  background: #047857;
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(5,150,105,0.3);
}
.karir-success-msg {
  background: #ECFDF5;
  border: 1px solid #A7F3D0;
  color: #065F46;
  padding: 14px 16px;
  border-radius: 10px;
  font-size: 0.84rem;
  margin-top: 14px;
  line-height: 1.5;
}

/* ── Textarea & Kliping Pin Attachment Bar ── */
.karir-textarea-box {
  background: #FAFAFA;
  border: 1.5px solid #E2E8F0;
  border-radius: 12px;
  overflow: hidden;
  transition: border-color 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
}
.karir-textarea-box:focus-within {
  border-color: #059669;
  background: #FFFFFF;
  box-shadow: 0 0 0 3px rgba(5,150,105,0.12);
}
.karir-textarea {
  width: 100%;
  border: none;
  background: transparent;
  padding: 10px 14px;
  font-family: 'Poppins', sans-serif;
  font-size: 0.85rem;
  color: #0F172A;
  outline: none;
  resize: vertical;
  min-height: 70px;
  display: block;
}
.karir-upload-zone {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  gap: 10px;
  padding: 8px 12px;
  background: #F8FAFC;
  border-top: 1px dashed #E2E8F0;
  flex-wrap: wrap;
}
.btn-paperclip-pin {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: #FFFFFF;
  border: 1.5px solid #CBD5E1;
  color: #334155;
  font-family: 'Poppins', sans-serif;
  font-size: 0.78rem;
  font-weight: 600;
  padding: 6px 14px;
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.2s ease;
}
.btn-paperclip-pin i {
  color: #059669;
  font-size: 0.95rem;
  transform: rotate(45deg);
  transition: transform 0.2s ease;
}
.btn-paperclip-pin:hover {
  background: #ECFDF5;
  border-color: #059669;
  color: #065F46;
  box-shadow: 0 2px 8px rgba(5,150,105,0.14);
}
.btn-paperclip-pin:hover i {
  transform: rotate(90deg) scale(1.1);
}
.pdf-file-chip {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: #FFFFFF;
  border: 1px solid #FECACA;
  border-left: 3.5px solid #DC2626;
  padding: 5px 10px;
  border-radius: 8px;
  max-width: 100%;
  box-shadow: 0 2px 6px rgba(220,38,38,0.06);
  animation: modalFadeIn 0.2s ease;
}
.pdf-chip-info {
  display: flex;
  align-items: center;
  gap: 6px;
  min-width: 0;
}
.pdf-chip-name {
  font-size: 0.78rem;
  font-weight: 600;
  color: #0F172A;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 240px;
}
.pdf-chip-size {
  font-size: 0.72rem;
  color: #64748B;
  white-space: nowrap;
}
.btn-cancel-pdf {
  background: #FEE2E2;
  border: 1px solid #FECACA;
  color: #DC2626;
  width: 22px;
  height: 22px;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  font-size: 0.7rem;
  transition: all 0.2s ease;
  flex-shrink: 0;
}
.btn-cancel-pdf:hover {
  background: #DC2626;
  color: #FFFFFF;
  border-color: #DC2626;
  transform: scale(1.12);
}
/* ── Catatan Tegas & Berbobot (Executive Dark Accent) ── */
.karir-note-tegas {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  background: #0F172A;
  border-left: 4px solid #10B981;
  border-radius: 10px;
  padding: 12px 16px;
  box-shadow: 0 4px 16px rgba(15, 23, 42, 0.12);
}
.note-tegas-icon-wrap {
  width: 28px;
  height: 28px;
  border-radius: 7px;
  background: rgba(16, 185, 129, 0.15);
  border: 1px solid rgba(16, 185, 129, 0.3);
  color: #34D399;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 0.95rem;
  flex-shrink: 0;
  margin-top: 1px;
}
.note-tegas-text {
  flex: 1;
  margin: 0;
  font-family: 'Poppins', sans-serif;
  font-size: 0.8rem;
  color: #F1F5F9;
  line-height: 1.55;
  font-weight: 500;
  letter-spacing: 0.15px;
}
</style>

<!-- Script Pencarian Real-Time & Pagination 10 Items (2 Baris @ 5 Card) -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  const ITEMS_PER_PAGE = 10; // 10 lowongan per halaman (2 baris x 5 card)
  let currentPage = 1;
  let searchQuery = '';

  const allCards = Array.from(document.querySelectorAll('.karir-card-item'));
  const emptyState = document.getElementById('karir-empty-state');
  const pgWrap = document.getElementById('karir-pagination');
  const rangeInfoEl = document.getElementById('karir-range-info');
  const totalCountEl = document.getElementById('karir-total-count');
  const searchInput = document.getElementById('karir-search-input');
  const searchClear = document.getElementById('karir-search-clear');

  function getFilteredCards() {
    if (!searchQuery) return allCards;
    return allCards.filter(card => {
      const title = card.querySelector('.karir-job-title')?.textContent.toLowerCase() || '';
      const company = card.querySelector('.karir-company-name')?.textContent.toLowerCase() || '';
      const location = card.querySelector('.karir-location-row')?.textContent.toLowerCase() || '';
      const dataLokasi = card.getAttribute('data-lokasi') || '';
      const type = card.querySelector('.badge-tipe')?.textContent.toLowerCase() || '';
      const desc = card.querySelector('.karir-job-desc')?.textContent.toLowerCase() || '';
      const reqs = card.querySelector('.karir-card-reqs')?.textContent.toLowerCase() || '';

      return title.includes(searchQuery) ||
             company.includes(searchQuery) ||
             location.includes(searchQuery) ||
             dataLokasi.includes(searchQuery) ||
             type.includes(searchQuery) ||
             desc.includes(searchQuery) ||
             reqs.includes(searchQuery);
    });
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
      if (rangeInfoEl) rangeInfoEl.textContent = '0';
      if (totalCountEl) totalCountEl.textContent = '0';
      return;
    }

    if (emptyState) emptyState.classList.add('d-none');

    const startIdx = (currentPage - 1) * ITEMS_PER_PAGE;
    const endIdx = Math.min(startIdx + ITEMS_PER_PAGE, totalItems);
    const pageCards = filtered.slice(startIdx, endIdx);

    pageCards.forEach(card => {
      card.classList.remove('d-none');
      card.style.animation = 'none';
      card.offsetHeight; // trigger reflow
      card.style.animation = 'fadeInUp 0.3s ease forwards';
    });

    if (rangeInfoEl) {
      rangeInfoEl.textContent = `${startIdx + 1} – ${endIdx}`;
    }
    if (totalCountEl) {
      totalCountEl.textContent = totalItems;
    }

    renderPagination();

    if (typeof AOS !== 'undefined') {
      AOS.refresh();
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
        <button type="button" class="pg-btn pg-prev" onclick="window.__karirPage(${currentPage - 1})" ${currentPage === 1 ? 'disabled' : ''}>
          <i class="fas fa-arrow-left"></i>
          <span>Sebelumnya</span>
        </button>
        <div class="pg-info">
          <span class="pg-current">${currentPage}</span>
          <span class="pg-sep">/</span>
          <span class="pg-total">${total}</span>
        </div>
        <button type="button" class="pg-btn pg-next" onclick="window.__karirPage(${currentPage + 1})" ${currentPage === total ? 'disabled' : ''}>
          <span>Selanjutnya</span>
          <i class="fas fa-arrow-right"></i>
        </button>
      </div>`;
  }

  window.__karirPage = function (page) {
    const total = totalPages();
    if (page < 1 || page > total) return;
    render(page);
    const container = document.getElementById('karir-cards-container');
    if (container) {
      const topOffset = container.getBoundingClientRect().top + window.pageYOffset - 120;
      window.scrollTo({ top: topOffset, behavior: 'smooth' });
    }
  };

  // Search input real-time
  if (searchInput) {
    searchInput.addEventListener('input', function() {
      searchQuery = this.value.trim().toLowerCase();
      if (searchClear) searchClear.style.display = searchQuery ? 'block' : 'none';
      render(1);
    });
  }

  if (searchClear) {
    searchClear.addEventListener('click', function() {
      if (searchInput) {
        searchInput.value = '';
        searchQuery = '';
        this.style.display = 'none';
        searchInput.focus();
        render(1);
      }
    });
  }

  // Render halaman pertama
  render(1);
});

/* ── Modal Lamar Loker Controls ── */
let currentJobData = null;

function openLamarModal(job) {
  currentJobData = job;
  const overlay = document.getElementById('modalLamarLoker');
  
  document.getElementById('modalJobCompanySubtitle').textContent = job.perusahaan;
  document.getElementById('modalJobTitleText').textContent = job.judul;
  document.getElementById('modalJobLocationText').textContent = job.lokasi + ' (' + job.tipe + ')';
  document.getElementById('modalJobDeadlineText').textContent = job.deadline;

  overlay.style.display = 'flex';
  document.body.style.overflow = 'hidden';
  document.getElementById('lamar_nama').focus();
}

function closeLamarModal() {
  const overlay = document.getElementById('modalLamarLoker');
  overlay.style.display = 'none';
  document.body.style.overflow = '';
}

// Tutup klik luar & escape
document.getElementById('modalLamarLoker').addEventListener('click', function(e) {
  if (e.target === this) closeLamarModal();
});
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') closeLamarModal();
});

// Real-time validation helper
function setLamarFieldError(fieldId, errorId, message) {
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

// Real-time input listener
document.getElementById('lamar_nama').addEventListener('input', function() {
  this.value = this.value.replace(/[^a-zA-Z\s\.\,\']/g, '');
  if (this.value.trim().length >= 3) setLamarFieldError('lamar_nama', 'err_lamar_nama', '');
});

document.getElementById('lamar_email').addEventListener('input', function() {
  const val = this.value.trim();
  if (/^[^\s@]+@gmail\.com$/i.test(val)) setLamarFieldError('lamar_email', 'err_lamar_email', '');
});

document.getElementById('lamar_telepon').addEventListener('input', function() {
  this.value = this.value.replace(/[^0-9]/g, '');
  if (this.value.length >= 10) setLamarFieldError('lamar_telepon', 'err_lamar_telepon', '');
});

document.getElementById('lamar_nisn').addEventListener('input', function() {
  this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
  if (this.value.length === 10) setLamarFieldError('lamar_nisn', 'err_lamar_nisn', '');
});

// PDF Upload Handler (Kliping Pin: Support 1 File, Max 15MB, PDF Only)
function handlePdfUpload(input) {
  const errEl = document.getElementById('err_lamar_pdf');
  const btnPin = document.getElementById('btn-paperclip-upload');
  const previewChip = document.getElementById('pdf-preview-chip');
  
  if (!input.files || input.files.length === 0) {
    return;
  }

  const file = input.files[0];
  const fileName = file.name;
  const isPdf = file.type === 'application/pdf' || /\.pdf$/i.test(fileName);
  const maxBytes = 15 * 1024 * 1024; // 15 MB

  if (!isPdf) {
    input.value = '';
    previewChip.style.display = 'none';
    btnPin.style.display = 'inline-flex';
    errEl.textContent = 'Format berkas tidak sesuai. Hanya file berekstensi .PDF yang diperbolehkan.';
    errEl.classList.add('show');
    return;
  }

  if (file.size > maxBytes) {
    input.value = '';
    const sizeInMB = (file.size / (1024 * 1024)).toFixed(1);
    previewChip.style.display = 'none';
    btnPin.style.display = 'inline-flex';
    errEl.textContent = 'Ukuran file melebihi batas (' + sizeInMB + ' MB). Maksimal ukuran file PDF adalah 15 MB.';
    errEl.classList.add('show');
    return;
  }

  // Berkas PDF Valid
  errEl.textContent = '';
  errEl.classList.remove('show');
  
  let formattedSize = '';
  if (file.size < 1024 * 1024) {
    formattedSize = '(' + (file.size / 1024).toFixed(1) + ' KB)';
  } else {
    formattedSize = '(' + (file.size / (1024 * 1024)).toFixed(2) + ' MB)';
  }

  document.getElementById('pdf-file-name-text').textContent = fileName;
  document.getElementById('pdf-file-size-text').textContent = formattedSize;
  
  btnPin.style.display = 'none';
  previewChip.style.display = 'inline-flex';
}

function cancelPdfUpload() {
  const input = document.getElementById('lamar_pdf');
  if (input) input.value = '';
  const previewChip = document.getElementById('pdf-preview-chip');
  if (previewChip) previewChip.style.display = 'none';
  const btnPin = document.getElementById('btn-paperclip-upload');
  if (btnPin) btnPin.style.display = 'inline-flex';
  const errEl = document.getElementById('err_lamar_pdf');
  if (errEl) {
    errEl.textContent = '';
    errEl.classList.remove('show');
  }
}

// Submit Lamaran
function submitLamaran(e) {
  e.preventDefault();

  const nama = document.getElementById('lamar_nama').value.trim();
  const email = document.getElementById('lamar_email').value.trim();
  const telp = document.getElementById('lamar_telepon').value.trim();
  const nisn = document.getElementById('lamar_nisn').value.trim();

  let valid = true;

  if (!nama) {
    setLamarFieldError('lamar_nama', 'err_lamar_nama', 'Nama lengkap wajib diisi.');
    valid = false;
  } else if (nama.length < 3) {
    setLamarFieldError('lamar_nama', 'err_lamar_nama', 'Nama minimal 3 karakter.');
    valid = false;
  } else {
    setLamarFieldError('lamar_nama', 'err_lamar_nama', '');
  }

  if (!email) {
    setLamarFieldError('lamar_email', 'err_lamar_email', 'Alamat email aktif wajib diisi.');
    valid = false;
  } else if (!/^[^\s@]+@gmail\.com$/i.test(email)) {
    setLamarFieldError('lamar_email', 'err_lamar_email', 'Gunakan alamat email berdomain @gmail.com.');
    valid = false;
  } else {
    setLamarFieldError('lamar_email', 'err_lamar_email', '');
  }

  if (!telp) {
    setLamarFieldError('lamar_telepon', 'err_lamar_telepon', 'Nomor telepon/WhatsApp wajib diisi.');
    valid = false;
  } else if (telp.length < 10) {
    setLamarFieldError('lamar_telepon', 'err_lamar_telepon', 'Nomor minimal 10 digit.');
    valid = false;
  } else {
    setLamarFieldError('lamar_telepon', 'err_lamar_telepon', '');
  }

  if (!nisn) {
    setLamarFieldError('lamar_nisn', 'err_lamar_nisn', 'NISN wajib diisi.');
    valid = false;
  } else if (nisn.length !== 10) {
    setLamarFieldError('lamar_nisn', 'err_lamar_nisn', 'NISN harus tepat 10 digit angka.');
    valid = false;
  } else {
    setLamarFieldError('lamar_nisn', 'err_lamar_nisn', '');
  }

  const errPdf = document.getElementById('err_lamar_pdf');
  if (errPdf && errPdf.classList.contains('show')) {
    valid = false;
  }

  if (!valid) {
    const firstErr = document.querySelector('#formLamarLoker .is-invalid');
    if (firstErr) firstErr.focus();
    return;
  }

  // Animasi Loading Submit
  const btn = document.getElementById('btn-lamar-submit');
  btn.disabled = true;
  btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Mengirim Berkas...';

  setTimeout(function() {
    btn.style.display = 'none';
    const successBox = document.getElementById('lamar-form-success');
    successBox.style.display = 'block';
    successBox.scrollIntoView({ behavior: 'smooth', block: 'center' });

    setTimeout(function() {
      document.getElementById('formLamarLoker').reset();
      cancelPdfUpload();
      btn.disabled = false;
      btn.style.display = '';
      btn.innerHTML = 'Kirim Berkas Lamaran';
      successBox.style.display = 'none';
      closeLamarModal();
    }, 4500);
  }, 1200);
}
</script>

<?php include __DIR__ . '/../partials/footer.php'; ?>
