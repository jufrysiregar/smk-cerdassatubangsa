<?php
require_once __DIR__ . '/../koneksi.php';

$page_title = "Pengumuman Hasil Seleksi PPDB";
$active_page = "ppdb_pengumuman";

$hasil_ppdb = [
    [
        'no_reg' => 'PPDB-2026-001',
        'nama' => 'Muhammad Rizky Pratama',
        'nisn' => '0071234567',
        'asal_sekolah' => 'SMP Negeri 1 Jakarta',
        'jurusan' => 'RPL (Rekayasa Perangkat Lunak)',
        'status' => 'LULUS',
        'keterangan' => 'Diterima di Gelombang 1 (Jalur Prestasi)'
    ],
    [
        'no_reg' => 'PPDB-2026-002',
        'nama' => 'Annisa Fitriani',
        'nisn' => '0078901234',
        'asal_sekolah' => 'MTs Negeri 2 Jakarta',
        'jurusan' => 'TKJ (Teknik Komputer & Jaringan)',
        'status' => 'LULUS',
        'keterangan' => 'Diterima di Gelombang 1 (Jalur Reguler)'
    ],
    [
        'no_reg' => 'PPDB-2026-003',
        'nama' => 'Bayu Setyawan',
        'nisn' => '0065432109',
        'asal_sekolah' => 'SMP Dharma Karya',
        'jurusan' => 'DKV (Desain Komunikasi Visual)',
        'status' => 'LULUS',
        'keterangan' => 'Diterima di Gelombang 1 (Jalur Reguler)'
    ],
    [
        'no_reg' => 'PPDB-2026-004',
        'nama' => 'Citra Lestari',
        'nisn' => '0076543211',
        'asal_sekolah' => 'SMP Al-Azhar 3',
        'jurusan' => 'RPL (Rekayasa Perangkat Lunak)',
        'status' => 'LULUS',
        'keterangan' => 'Diterima di Gelombang 1 (Jalur Reguler)'
    ],
    [
        'no_reg' => 'PPDB-2026-005',
        'nama' => 'Dimas Anggara',
        'nisn' => '0081122334',
        'asal_sekolah' => 'SMP Negeri 5 Jakarta',
        'jurusan' => 'TAV (Teknik Audio Video)',
        'status' => 'LULUS',
        'keterangan' => 'Diterima di Gelombang 1 (Jalur Reguler)'
    ],
    [
        'no_reg' => 'PPDB-2026-006',
        'nama' => 'Eka Rahmawati',
        'nisn' => '0079988776',
        'asal_sekolah' => 'SMP PGRI 2 Jakarta',
        'jurusan' => 'TKJ (Teknik Komputer & Jaringan)',
        'status' => 'CADANGAN',
        'keterangan' => 'Menunggu Konfirmasi Kuota Tambahan'
    ]
];

include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/navbar.php';
?>

<!-- Header Banner -->
<section class="subpage-header">
  <div class="container text-center">
    <h1 class="subpage-title">Hasil Seleksi PPDB Gelombang 1</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom justify-content-center">
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Beranda</a></li>
        <li class="breadcrumb-item"><a href="#">PPDB</a></li>
        <li class="breadcrumb-item active" aria-current="page">Hasil Seleksi</li>
      </ol>
    </nav>
  </div>
</section>

<section class="ppdb-result-section py-5">
  <div class="container">
    <div class="ppdb-result-shell" data-aos="fade-up">
      <div class="ppdb-result-topbar">
        <div class="ppdb-result-intro">
          <span class="ppdb-result-icon"><i class="fas fa-clipboard-check"></i></span>
          <div>
            <p>Gunakan fitur pencarian untuk menemukan nama atau NISN Anda dengan cepat.</p>
            <span class="ppdb-result-updated"><i class="fas fa-shield-halved"></i> Data ditampilkan secara transparan</span>
          </div>
        </div>
        <div class="ppdb-result-summary" aria-label="Ringkasan hasil seleksi">
          <span><strong><?= count($hasil_ppdb) ?></strong> Peserta</span>
          <span><i class="fas fa-check-circle"></i> <?= count(array_filter($hasil_ppdb, fn($hasil) => $hasil['status'] === 'LULUS')) ?> Lulus</span>
        </div>
      </div>

      <div class="ppdb-search-wrap">
        <label for="search-input" class="visually-hidden">Cari hasil seleksi</label>
        <i class="fas fa-search"></i>
        <input type="text" id="search-input" placeholder="Cari nama siswa, NISN, atau nomor pendaftaran...">
        <span class="ppdb-search-hint"><i class="fas fa-keyboard"></i> Ketik untuk mencari</span>
      </div>

      <div class="ppdb-results-table-wrap">
        <div class="ppdb-results-table-heading">
          <span><i class="fas fa-list-ul"></i> Daftar Peserta Seleksi</span>
          <small id="result-count"><?= count($hasil_ppdb) ?> data ditemukan</small>
        </div>
        <div class="table-responsive">
        <table class="table table-hover align-middle mb-0" id="table-ppdb">
          <thead>
            <tr>
              <th class="ps-4">No. Pendaftaran</th>
              <th>Nama Calon Siswa</th>
              <th>NISN</th>
              <th>Asal Sekolah</th>
              <th>Jurusan Diterima</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($hasil_ppdb as $h): ?>
            <tr>
              <td class="ps-4 fw-bold text-emerald"><?php echo $h['no_reg']; ?></td>
              <td class="fw-semibold text-dark"><?php echo $h['nama']; ?></td>
              <td class="text-muted fs-7"><?php echo $h['nisn']; ?></td>
              <td class="text-muted fs-7"><?php echo $h['asal_sekolah']; ?></td>
              <td><span class="badge bg-light text-dark border"><?php echo $h['jurusan']; ?></span></td>
              <td>
                <?php if ($h['status'] === 'LULUS'): ?>
                  <span class="badge bg-emerald px-3 py-2" style="background:#059669;"><i class="fas fa-check-circle me-1"></i> LULUS</span>
                <?php else: ?>
                  <span class="badge bg-warning text-dark px-3 py-2"><i class="fas fa-clock me-1"></i> CADANGAN</span>
                <?php endif; ?>
              </td>
            </tr>
            <?php endforeach; ?>
            <tr class="ppdb-no-results" hidden>
              <td colspan="6"><i class="fas fa-magnifying-glass me-2"></i>Data peserta tidak ditemukan.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  </div>
</section>

<style>
  .ppdb-result-section { background: radial-gradient(circle at 7% 7%, rgba(16,185,129,.13), transparent 24rem), radial-gradient(circle at 94% 4%, rgba(59,130,246,.11), transparent 26rem), #f8fafc; }
  .ppdb-result-shell { overflow: hidden; border: 1px solid #dbe5ee; border-radius: 26px; background: rgba(255,255,255,.88); box-shadow: 0 24px 55px rgba(15,23,42,.09); }
  .ppdb-result-topbar { display: flex; align-items: center; justify-content: space-between; gap: 24px; padding: clamp(1.35rem,3vw,2.1rem); background: linear-gradient(118deg,#f0fdfa 0%,#fff 52%,#eff6ff 100%); border-bottom: 1px solid #deebef; }
  .ppdb-result-intro { display: flex; align-items: center; gap: 14px; }
  .ppdb-result-icon { display: inline-flex; align-items: center; justify-content: center; width: 54px; height: 54px; flex: 0 0 auto; border-radius: 17px; color: #fff; background: linear-gradient(135deg,#059669,#0d9488); box-shadow: 0 10px 20px rgba(5,150,105,.26); font-size: 1.25rem; }
  .ppdb-result-intro p { margin: 0 0 .4rem; color: #334155; font-size: .95rem; }
  .ppdb-result-updated { color: #047857; font-size: .75rem; font-weight: 700; }
  .ppdb-result-updated i { margin-right: 4px; }
  .ppdb-result-summary { display: flex; gap: 8px; flex-wrap: wrap; justify-content: flex-end; }
  .ppdb-result-summary span { display: inline-flex; align-items: center; gap: 5px; padding: .55rem .72rem; border: 1px solid #dbe7ef; border-radius: 10px; background: rgba(255,255,255,.9); color: #526579; font-size: .75rem; font-weight: 700; white-space: nowrap; }
  .ppdb-result-summary strong { color: #0f172a; font-size: .95rem; }
  .ppdb-result-summary i { color: #059669; }
  .ppdb-search-wrap { position: relative; display: flex; align-items: center; margin: 1.5rem clamp(1rem,3vw,2rem); border: 1px solid #d7e3ec; border-radius: 15px; background: #fff; box-shadow: 0 7px 16px rgba(15,23,42,.045); transition: border .2s ease, box-shadow .2s ease; }
  .ppdb-search-wrap:focus-within { border-color: #22c55e; box-shadow: 0 0 0 4px rgba(16,185,129,.11); }
  .ppdb-search-wrap > i { margin-left: 17px; color: #0d9488; }
  .ppdb-search-wrap input { width: 100%; min-height: 54px; padding: 0 1rem; border: 0; outline: 0; color: #0f172a; font-size: .9rem; }
  .ppdb-search-hint { display: inline-flex; align-items: center; gap: 6px; margin-right: 12px; padding: .4rem .55rem; border-radius: 8px; background: #f1f5f9; color: #94a3b8; font-size: .7rem; white-space: nowrap; }
  .ppdb-results-table-wrap { margin: 0 clamp(1rem,3vw,2rem) clamp(1rem,3vw,2rem); overflow: hidden; border: 1px solid #e2e8f0; border-radius: 17px; }
  .ppdb-results-table-heading { display: flex; align-items: center; justify-content: space-between; padding: .85rem 1rem; border-bottom: 1px solid #e2e8f0; background: #f8fafc; color: #24334d; font: 700 .82rem/1.2 'Poppins', sans-serif; }
  .ppdb-results-table-heading span i { margin-right: 7px; color: #0d9488; }
  .ppdb-results-table-heading small { color: #64748b; font: 600 .72rem/1 'Inter',sans-serif; }
  #table-ppdb { min-width: 820px; }
  #table-ppdb thead { background: #0f172a; color: #fff; }
  #table-ppdb thead th { padding: 1rem .8rem; border: 0; font: 700 .72rem/1.2 'Poppins',sans-serif; letter-spacing: .04em; text-transform: uppercase; white-space: nowrap; }
  #table-ppdb tbody td { padding: 1rem .8rem; border-color: #edf2f7; font-size: .83rem; }
  #table-ppdb tbody tr:not(.ppdb-no-results) { transition: background .2s ease; }
  #table-ppdb tbody tr:not(.ppdb-no-results):hover { background: #f0fdfa; }
  #table-ppdb .badge { padding: .44rem .58rem; border-radius: 8px; font-size: .7rem; }
  .ppdb-no-results td { padding: 2.6rem !important; color: #64748b; text-align: center; }
  @media (max-width: 767.98px) { .ppdb-result-topbar { align-items: flex-start; flex-direction: column; } .ppdb-result-summary { justify-content: flex-start; } .ppdb-search-hint { display: none; } }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const searchInput = document.getElementById('search-input');
  const tableRows = document.querySelectorAll('#table-ppdb tbody tr');

  if (searchInput) {
    searchInput.addEventListener('keyup', function() {
      const term = this.value.toLowerCase();
      let visibleCount = 0;
      tableRows.forEach(row => {
        if (row.classList.contains('ppdb-no-results')) return;
        const text = row.innerText.toLowerCase();
        if (text.includes(term)) {
          row.style.display = '';
          visibleCount++;
        } else {
          row.style.display = 'none';
        }
      });
      const noResults = document.querySelector('.ppdb-no-results');
      const resultCount = document.getElementById('result-count');
      if (noResults) noResults.hidden = visibleCount !== 0;
      if (resultCount) resultCount.textContent = visibleCount + ' data ditemukan';
    });
  }
});
</script>

<?php include __DIR__ . '/../partials/footer.php'; ?>
