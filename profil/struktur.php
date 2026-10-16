<?php
require_once __DIR__ . '/../koneksi.php';

$page_title = "Struktur Organisasi";
$active_page = "profil_struktur";

/* Data anggota ditarik langsung dari tabel users agar nama dan NIP selalu mengikuti data internal sekolah. */
$user_columns = query_db('SHOW COLUMNS FROM users') ?: [];
$user_column_names = array_column($user_columns, 'Field');
$nip_column = in_array('nisn_nip', $user_column_names, true) ? 'nisn_nip' : (in_array('employment_code', $user_column_names, true) ? 'employment_code' : 'school_id');
$anggota_sekolah = query_db("SELECT name, role, position_status, access_role, employment_code, `{$nip_column}` AS nip FROM users WHERE is_active = 1 ORDER BY name ASC") ?: [];
$nama_disembunyikan_di_struktur = ['farhan laburehia', 'putri widya sari, s. pdi'];
$anggota_sekolah = array_values(array_filter($anggota_sekolah, static function ($orang) use ($nama_disembunyikan_di_struktur) {
    return !in_array(strtolower(trim($orang['name'] ?? '')), $nama_disembunyikan_di_struktur, true);
}));

function struktur_escape($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function struktur_inisial($nama) {
    $bagian = preg_split('/\s+/', trim($nama));
    $inisial = '';
    foreach (array_slice(array_filter($bagian), 0, 2) as $kata) {
        $inisial .= strtoupper(substr($kata, 0, 1));
    }
    return $inisial ?: '?';
}

function struktur_cari_nama($anggota, $nama, $jabatan) {
    foreach ($anggota as $orang) {
        if (strtolower(trim($orang['name'] ?? '')) === strtolower($nama)) {
            $orang['jabatan'] = $jabatan;
            return $orang;
        }
    }
    return ['name' => $nama, 'nip' => null, 'jabatan' => $jabatan];
}

function struktur_label_jabatan($orang) {
    $role = $orang['role'] ?? '';
    $status = trim($orang['position_status'] ?? '');
    if ($status !== '') return $status;
    $label = [
        'kepala_sekolah' => 'Kepala Sekolah',
        'wakil_sekolah' => 'Wakil Kepala Sekolah',
        'operator' => 'Operator Sekolah',
        'cashier' => 'Kasir Sekolah',
        'pusat_jurusan' => 'Kepala Pusat Jurusan',
        'magang_honor' => 'Tenaga Kependidikan',
        'guru' => 'Tenaga Pendidik'
    ];
    return $label[$role] ?? 'Tenaga Kependidikan';
}

function struktur_foto($orang) {
    $jabatan = $orang['jabatan'] ?? '';
    $role = $orang['role'] ?? '';
    $nama = strtolower(trim($orang['name'] ?? ''));
    $nip = preg_replace('/\D+/', '', (string) (($orang['nip'] ?? '') ?: ($orang['employment_code'] ?? '')));
    if ($jabatan === 'Pemilik Sekolah') return 'pemilik.jpg';
    if ($role === 'kepala_sekolah') return 'kepsek.jpg';
    if ($role === 'wakil_sekolah') return 'wakepsek.jpg';
    if ($nama === 'master akun operator sekolah') return 'operator-master.jpg';
    if (str_contains($nama, 'randy asha kaivan')) return 'operator-akademik.jpg';
    if (str_contains($nama, 'ahmad jaelani khajran')) return 'kasir-1.jpg';
    if (str_contains($nama, 'dimas pramudi gultom')) return 'kasir-2.jpg';
    if (str_contains($nama, 'hadi putro ginanjar')) return 'sec-1.jpg';
    if (str_contains($nama, 'arhan syahrial')) return 'sec-2.jpg';
    if (str_contains($nama, 'nazrul fahreza')) return 'sec-3.jpg';
    if (str_contains($nama, 'putri welasningsih')) return 'cl-2.jpg';
    if (str_contains($nama, 'ahrul rotua sigalingging')) return 'cl-1.jpg';
    if ($role === 'guru' && $nip !== '') {
        $foto_guru = 'NIP' . $nip . '.jpg';
        if (is_file(__DIR__ . '/../assets/img/organisasi/' . $foto_guru)) return $foto_guru;
    }
    if ($role === 'pusat_jurusan') {
        $jurusan = strtolower(struktur_badge_jurusan($orang['name'] ?? ''));
        return $jurusan !== '' ? $jurusan . '.jpg' : null;
    }
    return null;
}

function struktur_badge_jurusan($nama) {
    $nama = strtolower($nama);
    if (str_contains($nama, 'hendra sanjaya')) return 'TKJ';
    if (str_contains($nama, 'indri wulan sari')) return 'TAV';
    if (str_contains($nama, 'muhammad fahmi wimarwan')) return 'DKV';
    if (str_contains($nama, 'wahyu')) return 'RPL';
    return '';
}

function struktur_card($orang, $kelas = '', $badge = '', $tampilkan_nip = true) {
    $nama = $orang['name'] ?? '';
    $nip = trim((string) (($orang['nip'] ?? '') ?: ($orang['employment_code'] ?? '')));
    $jabatan = $orang['jabatan'] ?? struktur_label_jabatan($orang);
    $foto = struktur_foto($orang);
    ?>
    <article class="struktur-card <?= struktur_escape($kelas) ?>">
      <div class="struktur-avatar" aria-label="<?= $foto ? 'Foto' : 'Inisial' ?> <?= struktur_escape($nama) ?>">
        <?php if ($foto): ?><img src="<?= BASE_URL ?>assets/img/organisasi/<?= struktur_escape($foto) ?>" alt="Foto <?= struktur_escape($nama) ?>"><?php else: ?><?= struktur_escape(struktur_inisial($nama)) ?><?php endif; ?>
      </div>
      <?php if ($badge !== ''): ?><span class="struktur-position-badge"><?= struktur_escape($badge) ?></span><?php endif; ?>
      <div class="struktur-card-content">
        <h3><?= struktur_escape($nama) ?></h3>
        <?php if ($tampilkan_nip && $jabatan !== 'Pemilik Sekolah'): ?><p class="struktur-nip">NIP: <?= struktur_escape($nip !== '' ? $nip : 'Belum tercatat') ?></p><?php endif; ?>
      </div>
    </article>
    <?php
}

$kepala_sekolah = array_values(array_filter($anggota_sekolah, static fn($orang) => ($orang['role'] ?? '') === 'kepala_sekolah'));
$wakil_sekolah = array_values(array_filter($anggota_sekolah, static fn($orang) => ($orang['role'] ?? '') === 'wakil_sekolah'));
$operator_sekolah = array_values(array_filter($anggota_sekolah, static fn($orang) => ($orang['role'] ?? '') === 'operator'));
$kasir_sekolah = array_values(array_filter($anggota_sekolah, static fn($orang) => ($orang['role'] ?? '') === 'cashier'));
$pusat_jurusan = array_values(array_filter($anggota_sekolah, static fn($orang) => ($orang['role'] ?? '') === 'pusat_jurusan'));
$tenaga_pendidik = array_values(array_filter($anggota_sekolah, static fn($orang) => ($orang['role'] ?? '') === 'guru' && ($orang['position_status'] ?? '') === 'tetap'));
$pemilik = struktur_cari_nama($anggota_sekolah, 'Kevin Hartono, S.Kom., S.E., M.Ak.', 'Pemilik Sekolah');
$keamanan = [
    struktur_cari_nama($anggota_sekolah, 'Hadi Putro Ginanjar', 'Petugas Keamanan'),
    struktur_cari_nama($anggota_sekolah, 'Arhan Syahrial', 'Petugas Keamanan'),
    struktur_cari_nama($anggota_sekolah, 'Nazrul Fahreza', 'Petugas Keamanan')
];
$kebersihan = [
    struktur_cari_nama($anggota_sekolah, 'Ahrul Rotua Sigalingging', 'Petugas Kebersihan'),
    struktur_cari_nama($anggota_sekolah, 'Putri Welasningsih', 'Petugas Kebersihan')
];

include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/navbar.php';
?>

<!-- Header Banner -->
<section class="subpage-header">
  <div class="container text-center">
    <h1 class="subpage-title">Struktur Organisasi</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom justify-content-center">
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Beranda</a></li>
        <li class="breadcrumb-item"><a href="#">Profil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
      </ol>
    </nav>
  </div>
</section>

<section class="py-5">
  <div class="container struktur-page">
    <div class="text-center max-w-700 mx-auto mb-5">
      <h2 class="section-title">Bagan Organisasi SMK Cerdas Satu Bangsa</h2>
    </div>

    <section class="struktur-section struktur-owner-section">
      <h2>Tingkat Pimpinan Eksekutif &amp; Manajemen Utama</h2>
      <div class="struktur-grid struktur-grid-owner"><?php struktur_card($pemilik, 'struktur-owner-card', 'Pemilik Sekolah'); ?></div>
    </section>

    <section class="struktur-section struktur-management-section">
      <div class="struktur-grid struktur-grid-leadership">
        <?php foreach ($kepala_sekolah as $orang) struktur_card($orang, 'struktur-leadership-card', 'Kepala Sekolah'); ?>
        <?php foreach ($wakil_sekolah as $orang) struktur_card($orang, 'struktur-leadership-card', 'Wakil Kepala Sekolah'); ?>
        <?php if (empty($kepala_sekolah) && empty($wakil_sekolah)): ?><p class="struktur-empty">Data kepala sekolah dan wakil kepala sekolah belum tersedia.</p><?php endif; ?>
      </div>
    </section>

    <section class="struktur-section">
      <h2>Lini Pengajaran &amp; Akademik</h2>
      <div class="struktur-admin-groups">
        <div class="struktur-admin-group">
          <h3>Pusat Jurusan</h3>
          <div class="struktur-grid">
            <?php foreach ($pusat_jurusan as $orang) struktur_card($orang, '', struktur_badge_jurusan($orang['name'] ?? '')); ?>
            <?php if (empty($pusat_jurusan)): ?><p class="struktur-empty">Data pusat jurusan belum tersedia.</p><?php endif; ?>
          </div>
        </div>
        <div class="struktur-admin-group">
          <h3>Tenaga Pendidik (Guru)</h3>
          <div class="struktur-grid">
            <?php foreach ($tenaga_pendidik as $orang) struktur_card($orang, 'struktur-teacher-card'); ?>
            <?php if (empty($tenaga_pendidik)): ?><p class="struktur-empty">Data tenaga pendidik belum tersedia.</p><?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="struktur-section">
      <h2>Lini Administrasi &amp; Layanan Pendukung</h2>
      <div class="struktur-admin-groups">
        <div class="struktur-admin-top-row">
          <div class="struktur-admin-group">
            <h3>Operator</h3>
            <div class="struktur-grid">
              <?php foreach ($operator_sekolah as $orang) struktur_card($orang); ?>
              <?php if (empty($operator_sekolah)): ?><p class="struktur-empty">Data operator belum tersedia.</p><?php endif; ?>
            </div>
          </div>
          <div class="struktur-admin-group struktur-admin-group-divider">
            <h3>Kasir</h3>
            <div class="struktur-grid">
              <?php foreach ($kasir_sekolah as $orang) struktur_card($orang); ?>
              <?php if (empty($kasir_sekolah)): ?><p class="struktur-empty">Data kasir belum tersedia.</p><?php endif; ?>
            </div>
          </div>
        </div>
        <div class="struktur-support-groups">
          <div class="struktur-admin-group"><h3>Keamanan</h3><div class="struktur-grid"><?php foreach ($keamanan as $orang) struktur_card($orang, 'struktur-security-card', 'Petugas Keamanan', false); ?></div></div>
          <div class="struktur-admin-group"><h3>Kebersihan</h3><div class="struktur-grid"><?php foreach ($kebersihan as $orang) struktur_card($orang, 'struktur-cleaning-card', 'Petugas Kebersihan', false); ?></div></div>
        </div>
      </div>
    </section>

    <section class="struktur-section struktur-students">
      <h2>Subjek Utama Layanan Sekolah</h2>
      <div class="struktur-grid">
        <article class="struktur-card struktur-student-card">
          <div class="struktur-avatar"><img src="<?= BASE_URL ?>assets/img/organisasi/siswa.jpg" alt="Siswa/i SMK Cerdas Satu Bangsa"></div>
          <div class="struktur-card-content">
            <h3>Siswa/i</h3>
            <p class="struktur-student-copy">Peserta didik sebagai pusat dari seluruh proses pendidikan sekolah.</p>
          </div>
        </article>
      </div>
    </section>

    <aside class="struktur-note" aria-label="Catatan informasi struktur organisasi">
      <strong>Catatan :</strong>
      <p>Seluruh informasi baik bagan organisasi, nama staff di SMK Cerdas Satu Bangsa dapat berubah sewaktu-waktu tanpa pemberitahuan terlebih dahulu. Kami berhak melakukan pembaruan informasi kapan saja sesuai kebijakan terbaru.</p>
    </aside>
  </div>
</section>

<style>
  .struktur-page { max-width: 1180px; }
  .struktur-section { margin-bottom: 3.25rem; }
  .struktur-section > h2 { margin: 0 0 1.25rem; color: #173554; font-family: 'Poppins', sans-serif; font-size: 1.35rem; font-weight: 700; text-align: center; }
  .struktur-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 270px)); justify-content: center; gap: 1rem; }
  .struktur-grid-owner { max-width: 270px; margin: 0 auto; }
  .struktur-owner-section { margin-bottom: 2rem; }
  .struktur-management-section { margin-bottom: 3.25rem; }
  .struktur-grid-leadership { grid-template-columns: repeat(2, 270px); justify-content: center; gap: 4.5rem; }
  .struktur-card { position: relative; display: flex; min-width: 0; min-height: 292px; flex-direction: column; align-items: center; justify-content: flex-start; overflow: hidden; padding: 0 1.15rem 1.2rem; border: 1px solid #dce6f0; border-radius: 1.25rem; background: linear-gradient(160deg, #ffffff 0%, #f8fbff 100%); box-shadow: 0 15px 30px rgba(23, 53, 84, .10); text-align: center; transition: transform .3s cubic-bezier(.2,.8,.2,1), box-shadow .3s ease, border-color .3s ease; }
  .struktur-card::before { content: ''; position: absolute; top: 0; right: 0; left: 0; height: 6.35rem; background: radial-gradient(circle at 84% 22%, rgba(94, 234, 212, .34) 0 2px, transparent 2.5px), radial-gradient(circle at 89% 40%, rgba(94, 234, 212, .22) 0 2px, transparent 2.5px), linear-gradient(125deg, #0f2747 0%, #174d73 55%, #087a78 100%); background-size: auto, auto, 100% 100%; }
  .struktur-card::after { content: ''; position: absolute; z-index: 0; top: -35%; left: -130%; width: 48%; height: 155%; background: linear-gradient(100deg, transparent 18%, rgba(255, 255, 255, 0) 33%, rgba(255, 255, 255, .45) 50%, rgba(152, 245, 223, .25) 58%, rgba(255, 255, 255, 0) 75%, transparent 90%); transform: rotate(15deg); animation: struktur-card-shine 12s ease-in-out infinite; pointer-events: none; }
  .struktur-card:hover { border-color: #92d7dd; box-shadow: 0 22px 38px rgba(23, 53, 84, .18); transform: translateY(-7px); }
  .struktur-avatar { position: relative; z-index: 1; display: grid; width: 6.7rem; height: 6.7rem; flex: 0 0 6.7rem; margin-top: 2.45rem; place-items: center; overflow: hidden; border: 4px solid rgba(255, 255, 255, .95); border-radius: 1.25rem; color: #fff; background: linear-gradient(135deg, #0ea5e9, #2563eb); box-shadow: 0 12px 0 #d5e7ef, 0 17px 25px rgba(13, 59, 91, .25); font-family: 'Poppins', sans-serif; font-size: 1.5rem; font-weight: 800; transform: rotate(-3deg); transition: transform .3s ease; }
  .struktur-card:hover .struktur-avatar { transform: rotate(0deg) translateY(-2px); }
  .struktur-avatar img { width: 100%; height: 100%; object-fit: cover; }
  .struktur-card-content { position: relative; z-index: 1; display: flex; width: 100%; min-height: 86px; flex: 1; flex-direction: column; align-items: center; padding-top: 1.8rem; }
  .struktur-card h3 { margin: 0; color: #19334f; font-family: 'Poppins', sans-serif; font-size: 1.02rem; font-weight: 750; line-height: 1.45; }
  .struktur-position-badge { position: absolute; z-index: 2; top: 9rem; left: 50%; display: inline-flex; align-items: center; max-width: calc(100% - 1.5rem); padding: .34rem .75rem; border: 2px solid #fff; border-radius: 999px; color: #0f5f68; background: #e1f7f3; box-shadow: 0 5px 10px rgba(15, 95, 104, .14); font-size: .72rem; font-weight: 800; letter-spacing: .01em; line-height: 1; text-align: center; white-space: nowrap; transform: translateX(-50%); }
  .struktur-nip { width: 100%; margin: auto 0 0; padding: .55rem .65rem; border: 1px solid #e3edf3; border-radius: .55rem; color: #71839a; background: #f5f9fc; font-size: .7rem; font-weight: 600; letter-spacing: .025em; }
  @keyframes struktur-card-shine { 0%, 68% { left: -130%; opacity: 0; } 71% { opacity: .28; } 80% { left: 150%; opacity: .72; } 83%, 100% { left: 150%; opacity: 0; } }
  .struktur-support-groups { display: grid; gap: 1.75rem; }
  .struktur-admin-groups { display: grid; gap: 2rem; }
  .struktur-admin-top-row { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .struktur-admin-group-divider { border-left: 1px dashed #b9cfde; }
  .struktur-admin-group h3 { margin: 0 0 .95rem; color: #475569; font-size: 1rem; font-weight: 700; text-align: center; }
  .struktur-support-groups h3 { margin: 0 0 .85rem; color: #475569; font-size: 1rem; font-weight: 700; }
  .struktur-support-groups h3 i { margin-right: .35rem; color: #0ea5e9; }
  .struktur-empty { grid-column: 1 / -1; margin: 0; padding: 1rem; border: 1px dashed #cbd5e1; border-radius: .85rem; color: #64748b; text-align: center; }
  .struktur-student-copy { margin: auto 0 0; color: #71839a; font-size: .76rem; line-height: 1.55; }
  .struktur-note { position: relative; left: 50%; width: 100vw; margin: .25rem 0 0 -50vw; padding: 1.1rem 2rem; border-top: 1px solid #dcecf6; border-bottom: 1px solid #dcecf6; color: #64748b; background: #f7fbff; font-size: .9rem; line-height: 1.65; text-align: left; }
  .struktur-note strong { display: block; margin-bottom: .25rem; color: #315471; font-size: .95rem; }
  .struktur-note p { margin: 0; font-style: italic; }
  @media (max-width: 767.98px) { .struktur-admin-top-row { grid-template-columns: 1fr; gap: 2rem; } .struktur-admin-group-divider { border-top: 1px dashed #b9cfde; border-left: 0; padding-top: 2rem; } .struktur-grid-leadership { gap: 1rem; } }
  @media (max-width: 575.98px) { .struktur-grid, .struktur-grid-leadership { grid-template-columns: minmax(250px, 270px); } .struktur-card { min-height: 282px; padding: 0 1rem 1rem; } .struktur-support-groups { gap: 1.4rem; } }
</style>

<?php include __DIR__ . '/../partials/footer.php'; ?>
