<?php
/**
 * SUMBER DATA MASTER BERITA — SMK CERDAS SATU BANGSA
 * ─────────────────────────────────────────────────────
 * Digunakan oleh: index.php, berita.php, berita-detail.php
 *
 * CARA MENAMBAH BERITA BARU:
 * 1. Tambahkan array baru di bagian PALING ATAS $semua_berita
 * 2. Berita terbaru otomatis muncul di beranda (3 teratas)
 * 3. id harus unik, gambar di assets/img/berita-artikel/
 * ─────────────────────────────────────────────────────
 */

if (!defined('BASE_URL')) {
    require_once dirname(__DIR__) . '/koneksi.php';
}

$semua_berita = [

    // ── TERBARU DI ATAS ──────────────────────────────────

    7 => [
        'id'        => 7,
        'judul'     => 'Penerimaan Peserta Didik Baru (PPDB) SMK Cerdas Satu Bangsa T.A. 2026/2027 Resmi Dibuka!',
        'slug'      => 'ppdb-2026-2027-resmi-dibuka',
        'ringkasan' => 'SMK Cerdas Satu Bangsa resmi membuka PPDB Tahun Ajaran 2026/2027 dengan 4 program keahlian unggulan berstandar industri. Kuota terbatas — segera daftarkan diri sebelum kehabisan!',
        'tanggal'   => 'Rabu, 01 Oktober 2026',
        'kategori'  => 'Pengumuman',
        'gambar'    => BASE_URL . 'assets/img/berita-artikel/berita-7.jpg',
        'penulis'   => 'Panitia PPDB',
        'isi'       => '
          <p>JAKARTA — SMK Cerdas Satu Bangsa secara resmi membuka Penerimaan Peserta Didik Baru (PPDB) untuk Tahun Ajaran 2026/2027. Sekolah kejuruan terakreditasi A ini hadir mencetak lulusan yang cerdas, kompeten, dan siap bersaing di dunia kerja maupun wirausaha.</p>
          <p>SMK Cerdas Satu Bangsa menghadirkan <strong>4 program keahlian unggulan berstandar industri:</strong></p>
          <ul>
            <li><strong>Teknik Komputer &amp; Jaringan (TKJ)</strong> — Ahli dalam administrator jaringan, sistem keamanan komputer, dan infrastruktur IT.</li>
            <li><strong>Rekayasa Perangkat Lunak (RPL)</strong> — Menguasai pemrograman, pengembangan aplikasi, serta sistem basis data modern.</li>
            <li><strong>Desain Komunikasi Visual (DKV)</strong> — Unggul dalam dunia videografi, sinematografi, desain grafis, dan industri kreatif digital.</li>
            <li><strong>Teknik Audio Video (TAV)</strong> — Spesialis dalam perakitan sistem audio-video, elektronika terapan, hingga teknologi rumah pintar (Smart Home berbasis IoT).</li>
          </ul>
          <p>Didukung oleh fasilitas laboratorium praktik berteknologi tinggi, pengajar berpengalaman, serta jaminan kelulusan berlisensi BNSP, SMK Cerdas Satu Bangsa siap menjadi pijakan terbaik menuju karir impianmu.</p>
          <p>Kuota pendaftaran setiap jurusannya sangat terbatas! <a href="' . BASE_URL . 'ppdb/informasi.php" class="berita-link-ppdb">Ayo daftar sekarang juga, selamatkan kursi masa depanmu!</a></p>
        ',
    ],

    5 => [
        'id'        => 5,
        'judul'     => 'Terobosan Teknologi! Tim TAV Sukses Unjuk Gigi Ciptakan Ekosistem Smart Home Berbasis Sensor dan Raih Sertifikasi BNSP',
        'slug'      => 'tim-tav-smart-home-bnsp-2025',
        'ringkasan' => 'Kelompok siswa jurusan TAV berhasil mengembangkan prototipe miniatur Smart Home berbasis IoT dan sensor otomatisasi, yang secara resmi diuji dan mendapat sertifikasi langsung dari Badan Nasional Sertifikasi Profesi (BNSP).',
        'tanggal'   => 'Selasa, 18 November 2025',
        'kategori'  => 'Akademik',
        'gambar'    => BASE_URL . 'assets/img/berita-artikel/berita-5.jpg',
        'penulis'   => 'Kaprodi TAV',
        'isi'       => '
          <p>BATAM — Kelompok siswa jurusan Teknik Audio Video (TAV) kembali membuktikan keunggulan kompetensi vokasi dengan berhasil mengembangkan prototipe miniatur Smart Home berbasis teknologi Internet of Things (IoT) dan sistem sensor otomatisasi. Inovasi canggih karya para pelajar ini secara resmi diuji dan diapresiasi langsung oleh tim penguji dari Badan Nasional Sertifikasi Profesi (BNSP).</p>
          <p>Dalam sesi penilaian uji kompetensi yang berlangsung di laboratorium praktik TAV, sekelompok siswa yang terdiri dari lima orang memperagakan langsung cara kerja maket rumah pintar ciptaan mereka. Sistem ini memungkinkan pencahayaan, keamanan pintu, hingga pemantauan suhu rumah dikendalikan secara otomatis menggunakan rangkaian mikrokontroler, modul jaringan, serta aplikasi terintegrasi di laptop dan perangkat seluler.</p>
          <p>Atas keberhasilan demo proyek dan pemenuhan standar kualifikasi industri yang sangat baik, perwakilan BNSP secara simbolis menyerahkan sertifikat kompetensi BNSP kepada guru pendamping sekolah disaksikan oleh para siswa anggota tim. Penyerahan sertifikat ini ditandai dengan jabat tangan hangat sebagai bentuk pengakuan resmi atas standar keahlian profesional yang dimiliki para siswa.</p>
          <p>Kepala Program Keahlian TAV menyampaikan rasa bangganya atas pencapaian kelompok siswa tersebut. Menurutnya, sertifikasi dari BNSP menjadi bukti nyata bahwa kualitas pembelajaran berbasis proyek (<em>Project-Based Learning</em>) di sekolah telah selaras dengan tuntutan dan perkembangan industri teknologi modern.</p>
        ',
    ],

    2 => [
        'id'        => 2,
        'judul'     => 'Gemilang Prestasi! Tim Cerdas Cermat Pelajar Raih Juara 1 Tingkat Nasional 2026',
        'slug'      => 'juara-1-cerdas-cermat-nasional-2026',
        'ringkasan' => 'Tim pelajar berhasil menyabet trofi Juara 1 Olimpiade Cerdas Cermat Sekolah Tingkat Nasional 2026. Kemenangan dramatis ini dikukuhkan dalam acara penutupan Festival & Lomba Akademik Nasional di GOR Utama Jakarta.',
        'tanggal'   => 'Kamis, 15 Oktober 2025',
        'kategori'  => 'Kesiswaan',
        'gambar'    => BASE_URL . 'assets/img/berita-artikel/berita-2.jpg',
        'penulis'   => 'Panitia Kesiswaan',
        'isi'       => '
          <p>JAKARTA — Prestasi membanggakan kembali diukir oleh generasi muda Indonesia di panggung akademik tingkat nasional. Tim pelajar berhasil menyabet trofi Juara 1 Olimpiade Cerdas Cermat Sekolah Tingkat Nasional 2026 yang diselenggarakan dalam ajang tahunan Festival &amp; Lomba Akademik Nasional.</p>
          <p>Kemenangan dramatis ini dikukuhkan dalam acara penutupan dan penganugerahan pemenang yang berlangsung meriah di GOR Utama Jakarta. Setelah melewati babak penyisihan yang ketat melawan puluhan perwakilan sekolah dari 38 provinsi, tim terbaik ini berhasil unggul di babak final dengan perolehan skor tertinggi pada sesi rebutan cepat-tepat.</p>
          <p>Atas raihan Juara 1 tersebut, para pemenang berhak membawa pulang piala bergilir, medali emas, serta hadiah pembinaan tunai sebesar Rp15.000.000,-.</p>
          <p>Perwakilan dari panitia penyelenggara menyampaikan apresiasi setinggi-tingginya kepada seluruh peserta yang telah menunjukkan ketangkasan wawasan, kerja sama tim, dan semangat pantang menyerah.</p>
        ',
    ],

    3 => [
        'id'        => 3,
        'judul'     => 'Peduli Hak Asasi Manusia, Ratusan Siswa SMK Ikuti Bimbingan Konseling Bersama Dinas HAM Indonesia',
        'slug'      => 'bimbingan-konseling-ham-2024',
        'ringkasan' => 'Ratusan siswa SMK mengikuti kegiatan sosialisasi bertajuk "Sosialisasi & Bimbingan Konseling HAM bagi Generasi Muda" bersama para pejabat Dinas HAM Indonesia, dikemas secara dialogis dan interaktif di lapangan terbuka sekolah.',
        'tanggal'   => 'Kamis, 14 November 2024',
        'kategori'  => 'Kesiswaan',
        'gambar'    => BASE_URL . 'assets/img/berita-artikel/berita-3.jpg',
        'penulis'   => 'HUMAS Sekolah',
        'isi'       => '
          <p>JAKARTA — Dalam rangka menumbuhkan kesadaran hukum dan nilai-nilai kemanusiaan sejak dini, ratusan siswa SMK mengikuti kegiatan sosialisasi dan bimbingan konseling bertajuk "Sosialisasi &amp; Bimbingan Konseling HAM bagi Generasi Muda" yang digelar langsung di lapangan terbuka sekolah pada Kamis (14/11/2024) pagi.</p>
          <p>Kegiatan yang diinisiasi oleh pihak sekolah ini menghadirkan langsung para pejabat dan penyuluh dari Dinas HAM Indonesia. Uniknya, acara bimbingan ini dikemas secara dialogis, santai, dan interaktif. Dengan beralaskan terpal dan duduk melingkar di atas lapangan rumput, para siswa dapat berdiskusi secara langsung tanpa sekat dengan para petugas.</p>
          <p>Dalam pemaparannya, perwakilan Dinas HAM Indonesia menekankan pentingnya penerapan nilai-nilai HAM di lingkungan sekolah, seperti pencegahan perundungan (<em>bullying</em>), penghormatan terhadap perbedaan, hingga hak untuk mendapatkan pendidikan yang aman dan inklusif.</p>
          <blockquote>"Kalian adalah generasi penerus bangsa yang akan langsung terjun ke dunia kerja. Memahami HAM bukan hanya soal hukum, tetapi bagaimana kita menghargai sesama manusia di lingkungan sehari-hari maupun di tempat kerja nanti."</blockquote>
          <p class="blockquote-source">— Narasumber Dinas HAM Indonesia</p>
          <p>Acara yang berlangsung selama beberapa jam ini diakhiri dengan sesi tanya jawab interaktif, di mana para siswa dengan kritis menanyakan berbagai persoalan sosial yang kerap mereka temui di kehidupan sehari-hari.</p>
        ',
    ],

    6 => [
        'id'        => 6,
        'judul'     => 'Sudut Pandang Kreatif: Tim DKV Luncurkan Iklan Komersial Promotif untuk Produk UMKM dengan Kualitas Cinematic',
        'slug'      => 'tim-dkv-iklan-umkm-cinematic-2024',
        'ringkasan' => 'Tim siswa DKV sukses meluncurkan video iklan komersial promotif berkualitas cinematic untuk mendukung promosi produk UMKM lokal, melibatkan proses pra-produksi hingga pasca-produksi layaknya industri kreatif profesional.',
        'tanggal'   => 'Kamis, 17 Oktober 2024',
        'kategori'  => 'Akademik',
        'gambar'    => BASE_URL . 'assets/img/berita-artikel/berita-6.jpg',
        'penulis'   => 'Kaprodi DKV',
        'isi'       => '
          <p>BATAM — Kreativitas tanpa batas kembali ditunjukkan oleh siswa-siswi jurusan Desain Komunikasi Visual (DKV) SMK. Tim siswa DKV sukses meluncurkan karya terbaru mereka berupa video iklan komersial promotif yang digarap dengan kualitas <em>cinematic</em> untuk mendukung promosi produk Usaha Mikro, Kecil, dan Menengah (UMKM) lokal.</p>
          <p>Proyek pembuatan video iklan ini menjadi bagian dari pembelajaran praktik langsung yang melibatkan proses pra-produksi, produksi, hingga pasca-produksi. Para siswa tidak hanya bertindak sebagai pembuat video, tetapi juga sebagai konseptor yang merumuskan pesan agar produk lokal tersebut dapat tampil lebih berkelas dan menarik perhatian pasar modern.</p>
          <blockquote>"Melalui proyek ini, kami ingin membuktikan bahwa siswa SMK memiliki kompetensi yang setara dengan industri kreatif profesional. Kami menggarapnya dengan peralatan standar sinematografi, mulai dari kamera, stabilizer gimbal, lighting, hingga pengolahan audio yang matang."</blockquote>
          <p class="blockquote-source">— Siswa DKV, Sutradara Proyek</p>
          <p>Pihak sekolah dan pelaku UMKM yang menjadi mitra sangat mengapresiasi hasil akhir video iklan komersial ini. Visual yang dramatis serta narasi yang kuat dinilai mampu mengangkat nilai jual produk lokal ke tingkat yang lebih tinggi.</p>
        ',
    ],

    4 => [
        'id'        => 4,
        'judul'     => 'Tingkatkan Kompetensi Digital, Siswa TKJ dan RPL Tampil Aktif dalam Workshop Teknologi di PT SAT Nusapersada Tbk (Xiaomi Indonesia)',
        'slug'      => 'workshop-teknologi-xiaomi-batam-2025',
        'ringkasan' => 'Puluhan siswa jurusan TKJ dan RPL melaksanakan kunjungan industri dan workshop teknologi terapan di fasilitas Xiaomi Batam, dipandu langsung oleh tim teknis dan pakar AIoT untuk memperluas wawasan infrastruktur jaringan modern.',
        'tanggal'   => 'Rabu, 14 Mei 2024',
        'kategori'  => 'Kesiswaan',
        'gambar'    => BASE_URL . 'assets/img/berita-artikel/berita-4.jpg',
        'penulis'   => 'Kaprodi TKJ & RPL',
        'isi'       => '
          <p>BATAM — Puluhan siswa-siswi SMK jurusan Teknik Komputer dan Jaringan (TKJ) serta Rekayasa Perangkat Lunak (RPL) melaksanakan kegiatan kunjungan industri dan workshop teknologi terapan di fasilitas Xiaomi Batam pada Rabu (14/5/2024). Kegiatan ini digelar untuk memperluas wawasan praktis para siswa mengenai perkembangan infrastruktur jaringan modern dan pengembangan perangkat lunak dalam industri teknologi global.</p>
          <p>Selama kunjungan berlangsung, para siswa dipandu langsung oleh tim teknis dan pakar AIoT (<em>Artificial Intelligence of Things</em>) dari Xiaomi. Mereka diajak membedah arsitektur perangkat keras, mempelajari sistem manajemen jaringan berbasis <em>cloud</em>, hingga mencoba pemrograman perangkat pintar secara <em>hands-on</em>.</p>
          <p>Atmosfer antusiasme terlihat jelas di area workshop, di mana para siswa TKJ dan RPL berdiskusi aktif mengenai perakitan modul perangkat, pengujian hardware, serta pengintegrasian <em>code</em> pada ekosistem <em>smart home</em> dan perangkat seluler modern.</p>
        ',
    ],

    1 => [
        'id'        => 1,
        'judul'     => 'Perebutkan Piala Nasional, Ratusan Siswa Berlaga di Kejuaraan Badminton Pelajar 2024',
        'slug'      => 'kejuaraan-badminton-pelajar-2024',
        'ringkasan' => 'Panitia Kesiswaan resmi membuka gelaran Kejuaraan Nasional Badminton Pelajar 2024. Ratusan atlet bulu tangkis dari berbagai provinsi siap bertanding memperebutkan gelar juara nasional dalam ajang tahunan yang penuh antusiasme dan sportivitas tinggi ini.',
        'tanggal'   => 'Sabtu, 12 Oktober 2024',
        'kategori'  => 'Kesiswaan',
        'gambar'    => BASE_URL . 'assets/img/berita-artikel/berita-1.jpg',
        'penulis'   => 'Panitia Kesiswaan',
        'isi'       => '
          <p>JAKARTA — GOR Olahraga Kuningan Jakarta bergemuruh sejak Sabtu (12/10/2024) pagi. Ratusan siswa-siswi dari tingkat SMP dan SMA dari seluruh penjuru tanah air berkumpul untuk berlaga dalam Kejuaraan Nasional Badminton Pelajar 2024. Turnamen bergengsi yang digagas oleh Panitia Kesiswaan ini menjadi panggung bagi talenta-talenta muda untuk unjuk gigi di tingkat nasional.</p>
          <p>Ketua Panitia Kesiswaan, Budi Santoso, dalam sambutannya menyampaikan bahwa kompetisi tahun ini mengalami peningkatan partisipasi yang sangat signifikan. "Tahun 2024 ini kami mencatatkan rekor peserta terbanyak, dengan lebih dari 400 atlet pelajar yang datang dari Aceh hingga Papua."</p>
          <p>Turnamen yang berlangsung selama satu pekan (12–18 Oktober 2024) mempertandingkan berbagai kategori usia SMP dan SMA. Panitia juga menyiapkan tim pencari bakat dari PBSI untuk memantau para pemain potensial.</p>
          <blockquote>"Kami tidak hanya mencari juara, tapi kami ingin menanamkan nilai sportivitas, daya juang, dan persaudaraan antarsiswa dari berbagai daerah."</blockquote>
          <p class="blockquote-source">— Budi Santoso, Ketua Panitia Kesiswaan</p>
          <p>Bagi masyarakat yang ingin menyaksikan, Panitia Kesiswaan menyediakan siaran langsung melalui kanal resmi media sosial mereka.</p>
        ',
    ],

];
