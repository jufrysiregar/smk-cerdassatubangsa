<?php
require_once __DIR__ . '/../koneksi.php';

$page_title = "Fasilitas Sekolah";
$active_page = "profil_fasilitas";

$fasilitas = [
    [
        'nama' => 'Laboratorium Komputer & Jaringan (Lab TKJ & RPL)',
        'kategori' => 'Praktikum TKJ & RPL',
        'deskripsi' => 'Ruang laboratorium terpadu yang dirancang untuk menunjang kegiatan praktik pemrograman (RPL) sekaligus instalasi dan konfigurasi jaringan (TKJ). Ruangan ini dilengkapi dengan deretan unit PC siap pakai, pendingin udara untuk menjaga suhu perangkat, serta area khusus (networking workbench) di bagian belakang untuk praktik hardware dan perangkat jaringan.',
        'gambar' => BASE_URL . 'assets/img/fasilitas/lab-komputer.jpg',
        'fitur' => ['30 PC Client & 1 PC Server', 'MikroTik Router & Switch Board', 'Kit Alat Crimping & LAN Tester', 'Server Rack Mini & Patch Panel', 'Proyektor & Ruangan Ber-AC']
    ],
    [
        'nama' => 'Studio Desain & Pascaproduksi DKV',
        'kategori' => 'Praktikum DKV',
        'deskripsi' => 'Ruang praktik kreatif terpadu yang dirancang untuk mendukung proses pembuatan karya visual, mulai dari ilustrasi digital, fotografi, videografi, hingga tahap editing dan rendering. Ruangan ini mengombinasikan area kerja komputer performa tinggi dengan area mini studio produksi.',
        'gambar' => BASE_URL . 'assets/img/fasilitas/lab-dkv.jpg',
        'fitur' => ['25 PC Graphic Workstation & Pen Tablet', 'Studio Mini Fotografi & Set Lighting', 'Layar Green Screen & Stand Kamera', 'Kamera DSLR / Mirrorless & Video Kit', 'Proyektor HD & Ruangan Ber-AC']
    ],
    [
        'nama' => 'Bengkel & Studio Audio Video (TAV)',
        'kategori' => 'Praktikum TAV',
        'deskripsi' => 'Ruang praktik teknis terpadu yang memadukan area perakitan dan perbaikan perangkat elektronika dengan studio pengujian tata suara (audio mixing). Dirancang khusus untuk melatih siswa dalam pemeliharaan perangkat audio-video, teknik soldering dan perakitan PCB, serta pengoperasian sistem tata suara profesional.',
        'gambar' => BASE_URL . 'assets/img/fasilitas/lab-tav.jpg',
        'fitur' => ['Meja Kerja Perakitan & Solder Station', 'Digital Oscilloscope & Signal Generator', 'Multimeter Digital & Kit Pengukuran Elektronika', 'Studio Kedap Suara & Audio Mixer Console', 'Set Perbaikan Display TV & Perangkat Sound System']
    ],
    [
        'nama' => 'Ruang Ganti & Locker Room',
        'kategori' => 'Fasilitas Olahraga',
        'deskripsi' => 'Fasilitas pendukung olahraga yang bersih, aman, dan nyaman untuk siswa berganti pakaian sebelum dan sesudah kegiatan PJOK atau ekstrakurikuler. Dirancang dengan tata letak efisien, sirkulasi udara yang baik, serta area penyimpanan pribadi yang aman.',
        'gambar' => BASE_URL . 'assets/img/fasilitas/locker.jpg',
        'fitur' => ['Loker Penyimpanan Individu & Kunci Keamanan', 'Bangku Panjang Ruang Ganti (Bench Area)', 'Kamar Ruang Ganti Privat', 'Cermin Dinding & Wastafel', 'Sistem Ventilasi Exhaust & Ruangan Wangi/Bersih']
    ],
    [
        'nama' => 'Lapangan Basket',
        'kategori' => 'Fasilitas Olahraga',
        'deskripsi' => 'Fasilitas olahraga dalam ruangan (indoor) yang dirancang khusus untuk mendukung kegiatan praktik olahraga, turnamen basket, serta berbagai aktivitas ekstrakurikuler sekolah. Memiliki kualitas lantai dan pencahayaan standar untuk memastikan kenyamanan serta keselamatan siswa saat beraktivitas fisik.',
        'gambar' => BASE_URL . 'assets/img/fasilitas/basket.jpg',
        'fitur' => ['Lapangan Basket Standar (Interlock / Parquet & Marka Jelas)', 'Ring Basket Hidrolik / Portabel dengan Papan Pantul Tempered Glass', 'Tribun Penonton Tingkat (Bleachers) di Sisi Lapangan', 'Skor Digital (Electronic Scoreboard) & Sistem Suara (Sound System)', 'Pagar Pengaman & Jaring Pembatas di Belakang Ring']
    ],
    [
        'nama' => 'Lapangan Bulu Tangkis (Badminton)',
        'kategori' => 'Fasilitas Olahraga',
        'deskripsi' => 'Fasilitas lapangan olahraga dalam ruangan (indoor) yang dirancang untuk mendukung kegiatan pembelajaran PJOK, latihan rutin, serta turnamen bulu tangkis antar-siswa. Menggunakan permukaan lantai non-licin dengan garis marka standar untuk menjamin keamanan dan kenyamanan saat bertanding.',
        'gambar' => BASE_URL . 'assets/img/fasilitas/badminton.jpg',
        'fitur' => ['Lapangan Standar dengan Garis Marka Ganda (Tunggal & Ganda)', 'Tiang & Jaring Net Portabel', 'Pencahayaan Lampu Gantung Sorot (Anti-Silau)', 'Bangku Panjang Penonton & Pemain di Sisi Lapangan', 'Area Gudang Penyimpanan Raket, Kok, & Alat Olahraga']
    ],
    [
        'nama' => 'Ruang Diskusi & Rapat Siswa (Student Meeting Room)',
        'kategori' => 'Fasilitas Kolaborasi',
        'deskripsi' => 'Fasilitas ruang pertemuan modern yang dirancang menyerupai ruang rapat profesional untuk melatih keterampilan presentasi, komunikasi, dan kerja sama tim antar-siswa. Ruangan ini digunakan untuk diskusi proyek antar-jurusan, rapat organisasi siswa (OSIS), serta simulasi meeting bisnis skala industri.',
        'gambar' => BASE_URL . 'assets/img/fasilitas/room-1.jpg',
        'fitur' => ['Meja Konferensi U-Shape / Boardroom Table Performa Tinggi', 'Kursi Rapat Ergonomis Beroda (Office Ergonomic Chairs)', 'Smart TV Display / Interactive Whiteboard untuk Presentasi', 'Perangkat Video Conference & Microphones', 'Papan Tulis Glassboard & Ruangan Ber-AC']
    ],
    [
        'nama' => 'Aula & Ruang Pertemuan Serbaguna',
        'kategori' => 'Fasilitas Pertemuan',
        'deskripsi' => 'Fasilitas pertemuan berskala besar yang dirancang multi-fungsi untuk mendukung berbagai kegiatan sekolah, mulai dari rapat koordinasi, seminar, hingga presentasi proyek besar. Ruangan ini memiliki tata letak yang fleksibel dengan kapasitas luas dan didukung oleh sistem visual yang memadai.',
        'gambar' => BASE_URL . 'assets/img/fasilitas/room-2.jpg',
        'fitur' => ['Meja Pertemuan Panjang & Fleksibel (Heavy-Duty Conference Table)', 'Kursi Kerja Besi dengan Sandaran Jaring (Mesh Office Chairs)', 'Proyektor Plafon HD (Ceiling-Mounted Projector) & Layar Lebar', 'Layar Smart TV Interaktif Tambahan di Sisi Depan', 'Peralatan Pendukung (Sistem Audio, AC Sentral, & Dispenser Air)']
    ],
    [
        'nama' => 'Perpustakaan & Pusat Sumber Belajar Modern',
        'kategori' => 'Literasi & Riset',
        'deskripsi' => 'Fasilitas perpustakaan sekolah yang didesain luas, tenang, dan nyaman sebagai pusat literasi dan riset bagi siswa serta guru. Memiliki daya tarik visual utama berupa globe raksasa di tengah ruangan yang melambangkan wawasan global dan eksplorasi ilmu pengetahuan.',
        'gambar' => BASE_URL . 'assets/img/fasilitas/library.jpg',
        'fitur' => ['Globe Raksasa Interaktif di Centerpiece Ruangan', 'Rak Buku Kayu Bertingkat & Koleksi Referensi Lengkap', 'Area Meja Baca Kelompok & Kursi Belajar Mandiri', 'Sudut Baca Santai (Reading Lounge)', 'Sistem Katalog Digital & Ruangan Ber-AC yang Tenang']
    ]
];

include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/navbar.php';
?>

<!-- Header Banner -->
<section class="subpage-header">
  <div class="container text-center">
    <h1 class="subpage-title">Fasilitas Sekolah</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom justify-content-center">
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Beranda</a></li>
        <li class="breadcrumb-item"><a href="#">Profil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Fasilitas</li>
      </ol>
    </nav>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="text-center max-w-700 mx-auto mb-5">
      <h2 class="section-title">Fasilitas Penunjang Pembelajaran Berstandar Industri</h2>
    </div>

    <div class="row g-4">
      <?php foreach ($fasilitas as $f): ?>
      <div class="col-md-6 col-lg-4">
        <div class="card-custom h-100">
          <div class="card-img-wrapper">
            <span class="badge-category"><?php echo $f['kategori']; ?></span>
            <img src="<?php echo $f['gambar']; ?>" alt="<?php echo $f['nama']; ?>">
          </div>
          <div class="p-4">
            <h5 class="fw-bold mb-2 font-poppins text-dark"><?php echo $f['nama']; ?></h5>
            <p class="text-muted small mb-3"><?php echo $f['deskripsi']; ?></p>
            
            <h6 class="fw-bold fs-7 text-emerald mb-2" style="color:#059669;">Fasilitas Ruangan :</h6>
            <ul class="list-unstyled fs-7 text-muted mb-0">
              <?php foreach ($f['fitur'] as $fit): ?>
                <li class="mb-1"><i class="fas fa-check-circle text-success me-2 fs-8"></i> <?php echo $fit; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>
