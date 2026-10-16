<?php
require_once __DIR__ . '/../koneksi.php';

$page_title = "Formulir Pendaftaran PPDB";
$active_page = "ppdb_formulir";

$tahun_sekarang = date('Y');
$tahun_ajaran = $tahun_sekarang . '/' . ($tahun_sekarang + 1);

// Embed logo dalam Base64 agar selalu tampil saat cetak / export PDF
$logo_path = __DIR__ . '/../assets/img/logo/logo.png';
$logo_base64 = '';
if (file_exists($logo_path)) {
    $logo_data = file_get_contents($logo_path);
    $logo_base64 = 'data:image/png;base64,' . base64_encode($logo_data);
} else {
    $fallback_path = __DIR__ . '/../src/logos/logo22.png';
    if (file_exists($fallback_path)) {
        $logo_data = file_get_contents($fallback_path);
        $logo_base64 = 'data:image/png;base64,' . base64_encode($logo_data);
    }
}
$logo_src = !empty($logo_base64) ? $logo_base64 : (BASE_URL . 'assets/img/logo/logo.png');

include __DIR__ . '/../partials/header.php';
?>
<!-- Additional CSS Khusus Formulir -->
<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/formulir.css?v=<?= filemtime(__DIR__ . '/../assets/css/formulir.css') ?>">

<?php
include __DIR__ . '/../partials/navbar.php';
?>

<!-- ─── HEADER HERO & BREADCRUMB ───────────────────────────── -->
<section class="subpage-header no-print">
  <div class="container text-center">
    <h1 class="subpage-title">Formulir Pendaftaran PPDB Online</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom justify-content-center">
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Beranda</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">PPDB</a></li>
        <li class="breadcrumb-item active" aria-current="page">Formulir Pendaftaran</li>
      </ol>
    </nav>
  </div>
</section>

<!-- ─── FORM SECTION ───────────────────────────────────────── -->
<section class="py-5 ppdb-form-section no-print">
  <div class="container-fluid px-3 px-md-4 px-xl-5">
    <div class="row justify-content-center">
      <div class="col-12">

        <div class="ppdb-form-intro mb-4">
          <span class="ppdb-form-intro-badge"><i class="fas fa-pen-to-square"></i> PENDAFTARAN ONLINE</span>
          <h2 class="fw-bold font-poppins text-dark mb-2">Formulir Registrasi Peserta Didik Baru</h2>
          <p class="text-muted small">Tahun Ajaran <?= $tahun_ajaran ?> — Lengkapi formulir di bawah ini dengan data yang valid dan benar.</p>
        </div>

        <form id="form-ppdb-main" class="ppdb-form" novalidate>
          
          <!-- ─── SECTION 1: UPLOAD FOTO ──────────────────────── -->
          <div class="form-section-card" data-aos="fade-up">
            <div class="section-header-title">
              <span class="section-badge-num">1</span>
              <span>Upload Foto Calon Siswa <span class="text-danger">*</span></span>
            </div>

            <div class="photo-upload-container">
              <!-- Preview Box -->
              <div class="photo-preview-box" id="photo-preview-box">
                <img id="photo-preview-img" src="https://placehold.co/300x400?text=Foto+3x4" alt="Preview Pas Foto">
              </div>

              <!-- Input File & Info -->
              <div class="photo-upload-input-wrapper">
                <label for="foto_siswa" class="form-label">Pilih Berkas Pas Foto Calon Siswa (3x4)</label>
                <input type="file" class="form-control mb-2" id="foto_siswa" name="foto_siswa" accept=".jpg, .jpeg, .png" required>
                <p class="foto-info-text mb-0">
                  <i class="fas fa-info-circle"></i>
                  Latar <strong>MERAH</strong> (tahun lahir ganjil) atau <strong>BIRU</strong> (genap). Maks <strong>2MB</strong>. Format JPG / PNG.
                </p>
              </div>
            </div>
          </div>

          <!-- ─── SECTION 2: JALUR PENDAFTARAN ────────────────── -->
          <div class="form-section-card" data-aos="fade-up">
            <div class="section-header-title">
              <span class="section-badge-num">2</span>
              <span>Jalur Pendaftaran <span class="text-danger">*</span></span>
            </div>

            <div class="row g-3">
              <div class="col-md-12">
                <label for="jalur_pendaftaran" class="form-label">Pilih Jalur Masuk PPDB <span class="text-danger">*</span></label>
                <select class="form-select" id="jalur_pendaftaran" name="jalur_pendaftaran" required>
                  <option value="" selected disabled>-- Pilih Salah Satu Jalur Pendaftaran --</option>
                  <option value="Zonasi">Jalur Zonasi (Domisili / Radius Terdekat)</option>
                  <option value="Afirmasi">Jalur Afirmasi (KIP / PKH / Keluarga Prasejahtera)</option>
                  <option value="Prestasi">Jalur Prestasi (Akademik &amp; Non-Akademik / Kejuaraan)</option>
                  <option value="Reguler">Jalur Reguler / Tes Minat &amp; Bakat</option>
                </select>
                <div class="form-text text-muted" style="font-size: 0.78rem;">Pilihlah jalur pendaftaran yang sesuai dengan dokumen pendukung Anda.</div>
              </div>
            </div>
          </div>

          <!-- ─── SECTION 3: DATA CALON SISWA ─────────────────── -->
          <div class="form-section-card" data-aos="fade-up">
            <div class="section-header-title">
              <span class="section-badge-num">3</span>
              <span>Data Pribadi Calon Siswa</span>
            </div>

            <div class="row g-3">
              <!-- Nama Lengkap -->
              <div class="col-md-6">
                <label class="form-label">Nama Lengkap Siswa <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nama_lengkap" placeholder="Contoh: MUHAMMAD FARHAN ALAMSYAH" autocomplete="name" required>
              </div>

              <!-- NISN (Opsional) -->
              <div class="col-md-6">
                <label class="form-label">NISN <span class="text-muted fw-normal">(Opsional)</span></label>
                <input type="text" class="form-control" name="nisn" placeholder="Contoh: 0081234567" inputmode="numeric" maxlength="10">
              </div>

              <!-- NIK -->
              <div class="col-md-6">
                <label class="form-label">NIK (Nomor Induk Kependudukan) <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nik" placeholder="16 digit sesuai Kartu Keluarga" inputmode="numeric" pattern="[0-9]{16}" minlength="16" maxlength="16" required>
              </div>

              <!-- Jenis Kelamin -->
              <div class="col-md-6">
                <label class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                <select class="form-select" name="jenis_kelamin" required>
                  <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                  <option value="Laki-laki">Laki-laki (L)</option>
                  <option value="Perempuan">Perempuan (P)</option>
                </select>
              </div>

              <!-- Tempat Lahir -->
              <div class="col-md-6">
                <label class="form-label">Tempat Lahir <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="tempat_lahir" placeholder="Contoh: Jakarta" required>
              </div>

              <!-- Tanggal Lahir -->
              <div class="col-md-6">
                <label class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                <input type="date" class="form-control" name="tanggal_lahir" required>
              </div>

              <!-- Agama -->
              <div class="col-md-6">
                <label class="form-label">Agama <span class="text-danger">*</span></label>
                <select class="form-select" name="agama" required>
                  <option value="" selected disabled>-- Pilih Agama --</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen Protestan">Kristen Protestan</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Buddha">Buddha</option>
                  <option value="Khonghucu">Khonghucu</option>
                </select>
              </div>

              <!-- No HP / WhatsApp -->
              <div class="col-md-6">
                <label class="form-label">No. HP / WhatsApp Siswa <span class="text-danger">*</span></label>
                <input type="tel" class="form-control" name="no_hp" placeholder="Contoh: 081234567890" inputmode="numeric" pattern="08[0-9]{8,11}" minlength="10" maxlength="13" required>
              </div>

              <!-- Email Siswa -->
              <div class="col-md-6">
                <label class="form-label">Alamat Email Aktif <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" placeholder="Contoh: farhan@gmail.com" autocomplete="email" required>
              </div>

              <!-- Asal Sekolah -->
              <div class="col-md-4">
                <label class="form-label">Asal Sekolah (SMP / MTs) <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="asal_sekolah" placeholder="Contoh: SMP Negeri 45 Jakarta" required>
              </div>

              <!-- Tahun Lulus -->
              <div class="col-md-2">
                <label class="form-label">Tahun Lulus <span class="text-danger">*</span></label>
                <select class="form-select" name="tahun_lulus" required>
                  <option value="">-- Pilih Tahun Lulus --</option>
                  <option value="<?= $tahun_sekarang ?>"><?= $tahun_sekarang ?></option>
                  <option value="<?= $tahun_sekarang - 1 ?>"><?= $tahun_sekarang - 1 ?></option>
                </select>
              </div>

              <!-- Pilihan Jurusan -->
              <div class="col-md-12">
                <label class="form-label">Pilihan Program Keahlian (Jurusan) <span class="text-danger">*</span></label>
                <select class="form-select" name="jurusan_pilihan" required>
                  <option value="" selected disabled>-- Pilih Program Keahlian Yang Diminati --</option>
                  <option value="TKJ">Teknik Komputer dan Jaringan (TKJ)</option>
                  <option value="RPL">Rekayasa Perangkat Lunak (RPL)</option>
                  <option value="DKV">Desain Komunikasi Visual (DKV)</option>
                  <option value="TAV">Teknik Audio Video (TAV)</option>
                </select>
              </div>

              <!-- Alamat Lengkap -->
              <div class="col-md-12">
                <label class="form-label">Alamat Lengkap Tempat Tinggal <span class="text-danger">*</span></label>
                <textarea class="form-control" name="alamat_lengkap" rows="3" placeholder="Nama Jalan, RT/RW, Kelurahan, Kecamatan, Kota/Kabupaten, Kode Pos" required></textarea>
              </div>
            </div>
          </div>

          <!-- ─── SECTION 4: DATA ORANG TUA / WALI (CHECKBOX TINGGAL BERSAMA) ───── -->
          <div class="form-section-card" data-aos="fade-up">
            <div class="section-header-title">
              <span class="section-badge-num">4</span>
              <span>Data Orang Tua / Wali Siswa <span class="text-danger">*</span></span>
            </div>

            <!-- Subcard 1: Orang Tua -->
            <div class="parent-subcard is-active-card mb-4" id="subcard-ortu">
              <div class="parent-subcard-header">
                <h6 class="fw-bold text-dark font-poppins mb-0">
                  <i class="fas fa-user-friends text-emerald me-2"></i>Data Orang Tua Kandung
                </h6>
                <label class="custom-stay-check" for="tinggal_ortu">
                  <input class="stay-radio-input" type="radio" name="tinggal_bersama" id="tinggal_ortu" value="ortu" checked>
                  <span class="custom-check-box">
                    <i class="fas fa-check"></i>
                  </span>
                  <span class="stay-check-text">Saya tinggal bersama orangtua.</span>
                </label>
              </div>
              <div class="parent-fields-group">
                <div class="row g-3">
                  <div class="col-md-6">
                    <label class="form-label">Nama Lengkap Ayah <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="nama_ayah" placeholder="NAMA AYAH KANDUNG">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Pekerjaan Ayah <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="pekerjaan_ayah" placeholder="Contoh: Karyawan Swasta / Wiraswasta">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Nama Lengkap Ibu <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="nama_ibu" placeholder="NAMA IBU KANDUNG">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Pekerjaan Ibu <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Contoh: Ibu Rumah Tangga / PNS">
                  </div>
                  <div class="col-md-12">
                    <label class="form-label">No. HP / WhatsApp Orang Tua <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" name="no_hp_ortu" placeholder="Contoh: 081298765432">
                  </div>
                  <div class="col-md-12">
                    <label class="form-label">Alamat Orang Tua <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="alamat_ortu" rows="2" placeholder="Alamat lengkap domisili orang tua"></textarea>
                  </div>
                </div>
              </div>
            </div>

            <!-- Subcard 2: Wali -->
            <div class="parent-subcard is-disabled-card" id="subcard-wali">
              <div class="parent-subcard-header">
                <h6 class="fw-bold text-dark font-poppins mb-0">
                  <i class="fas fa-user-shield text-emerald me-2"></i>Data Wali Siswa
                </h6>
                <label class="custom-stay-check" for="tinggal_wali">
                  <input class="stay-radio-input" type="radio" name="tinggal_bersama" id="tinggal_wali" value="wali">
                  <span class="custom-check-box">
                    <i class="fas fa-check"></i>
                  </span>
                  <span class="stay-check-text">Saya tinggal bersama wali.</span>
                </label>
              </div>
              <div class="parent-fields-group">
                <div class="row g-3">
                  <div class="col-md-6">
                    <label class="form-label">Nama Lengkap Wali <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="nama_wali" placeholder="NAMA LENGKAP WALI SISWA" disabled>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Hubungan dengan Siswa <span class="text-danger">*</span></label>
                    <select class="form-select" name="hubungan_wali" disabled>
                      <option value="" selected disabled>-- Pilih Hubungan Keluarga --</option>
                      <option value="Kakek / Nenek">Kakek / Nenek</option>
                      <option value="Paman / Bibi">Paman / Bibi</option>
                      <option value="Kakak Kandung">Kakak Kandung</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Pekerjaan Wali <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="pekerjaan_wali" placeholder="Contoh: Wiraswasta" disabled>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">No. HP / WhatsApp Wali <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" name="no_hp_wali" placeholder="Contoh: 081234567899" disabled>
                  </div>
                  <div class="col-md-12">
                    <label class="form-label">Alamat Wali <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="alamat_wali" rows="2" placeholder="Alamat lengkap domisili wali" disabled></textarea>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- ─── SECTION 5: RIWAYAT PRIBADI (OPSIONAL) ───────── -->
          <div class="form-section-card" data-aos="fade-up">
            <div class="section-header-title">
              <span class="section-badge-num">5</span>
              <span>Riwayat Pribadi &amp; Lain-lain <span class="text-muted fw-normal fs-7">(Opsional)</span></span>
            </div>

            <div class="row g-3">
              <div class="col-md-12">
                <label class="form-label">Riwayat Kesehatan / Penyakit Khusus</label>
                <textarea class="form-control" name="riwayat_kesehatan" rows="2" placeholder="Tuliskan jika memiliki alergi, asma, atau riwayat kesehatan khusus (Kosongkan bila tidak ada)"></textarea>
              </div>

              <div class="col-md-12">
                <label class="form-label">Prestasi / Pengalaman Organisasi di SMP/MTs</label>
                <textarea class="form-control" name="prestasi_organisasi" rows="2" placeholder="Contoh: Juara 2 Lomba Futsal Tingkat Kota, Pengurus OSIS, Pramuka Garuda (Kosongkan bila tidak ada)"></textarea>
              </div>

              <div class="col-md-6">
                <label class="form-label">Ukuran Seragam Sekolah</label>
                <select class="form-select" name="ukuran_seragam">
                  <option value="" selected>-- Pilih Ukuran Seragam (Opsional) --</option>
                  <option value="S">S (Small)</option>
                  <option value="M">M (Medium)</option>
                  <option value="L">L (Large)</option>
                  <option value="XL">XL (Extra Large)</option>
                  <option value="XXL">XXL (Double Extra Large)</option>
                </select>
              </div>
            </div>
          </div>

          <!-- ─── SECTION 6: CATATAN PERSYARATAN BERKAS ────────── -->
          <div class="form-section-card border-warning bg-light" data-aos="fade-up" style="border-left: 5px solid #f59e0b !important;">
            <div class="d-flex align-items-start gap-3">
              <i class="fas fa-clipboard-list text-warning fs-3 mt-1"></i>
              <div>
                <h6 class="fw-bold text-dark font-poppins mb-1">Catatan Kelengkapan Berkas Persyaratan</h6>
                <p class="text-muted small mb-0" style="line-height: 1.6;">
                  Harap membawa cetakan formulir pendaftaran, pasfoto fisik, beserta kelengkapan berkas persyaratan resmi (fotokopi Ijazah/SKL SMP, KK, Akta Kelahiran, dan Kartu KIP/PKH jika ada) saat mendaftar ke sekretariat panitia PPDB SMK Cerdas Satu Bangsa. Pastikan untuk membaca seluruh ketentuan pendaftaran dengan cermat sebelum menyerahkan berkas.
                </p>
              </div>
            </div>
          </div>

          <!-- ─── TOMBOL CETAK FORMULIR ───────────────────────── -->
          <div class="text-center py-4" data-aos="fade-up">
            <button type="submit" class="btn-submit-ppdb">
              <i class="fas fa-print"></i>
              <span>Cetak Formulir Sekarang</span>
            </button>
            <div class="text-muted small mt-2">
              <i class="fas fa-shield-alt text-success me-1"></i> Data Anda tersimpan aman dan terenkripsi.
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
</section>

<!-- ─── FULLSCREEN PREVIEW & PRINT MODAL ─────────────────────── -->
<div id="modalPreviewFormulir" class="modal-preview-overlay" style="display: none;">
  <div class="modal-preview-content" style="background: #ffffff !important; display: flex !important; position: relative !important; z-index: 10000 !important; opacity: 1 !important; visibility: visible !important; width: 90% !important; max-width: 860px !important; max-height: 90vh !important;">
    
    <!-- Modal Header Top Toolbar -->
    <div class="modal-preview-header no-print">
      <div class="d-flex align-items-center gap-2">
        <i class="fas fa-file-invoice text-emerald fs-5"></i>
        <h6 class="fw-bold text-dark font-poppins mb-0">Preview Formulir Pendaftaran PPDB</h6>
      </div>
      <button type="button" class="btn btn-sm btn-light border rounded-circle" id="btn-close-modal" title="Tutup Preview">
        <i class="fas fa-times"></i>
      </button>
    </div>

    <!-- Modal Document Body (Formal Kertas Cetak) -->
    <div class="modal-preview-body">
      <div id="formulirCetak">
      
      <!-- 1. KOP SURAT RESMI -->
      <div class="doc-kop">
        <img src="<?= $logo_src ?>"
             alt="Logo Sekolah"
             class="doc-kop-logo">
        <div class="doc-kop-text">
          <div class="doc-kop-school">SMK CERDAS SATU BANGSA</div>
          <div class="doc-kop-slogan">Siap Bertalenta dan Kerja — Terakreditasi A (Unggul)</div>
          <div class="doc-kop-address">
            Jl. Cirebon No.1, Pasar Baru, Medan Kota, Kota Medan, Sumatera Utara 20212<br>
            Telp: (061) 1234567 | WhatsApp Hotline: 081234567890 | Email: ppdb@smkcerdassatubangsa.sch.id
          </div>
        </div>
      </div>

      <!-- 2. JUDUL DOKUMEN & TAHUN AJARAN -->
      <div class="doc-title-wrapper">
        <div class="doc-main-title">FORMULIR PENDAFTARAN PESERTA DIDIK BARU</div>
        <div class="doc-sub-title">Tahun Ajaran <?= $tahun_ajaran ?></div>
      </div>

      <!-- 3. IDENTITAS REGISTRASI & FOTO -->
      <div class="d-flex justify-content-between align-items-start gap-4 mb-3 doc-registration-summary">
        <table style="width: calc(100% - 130px); border-collapse: collapse; font-size: 0.88rem;">
          <tr>
            <td style="width: 35%; padding: 4px 0; font-weight: 600;">No. Registrasi</td>
            <td style="width: 5%;">:</td>
            <td style="font-weight: 700; color: #059669;" id="doc-reg-num">REG-2026-XXXX</td>
          </tr>
          <tr>
            <td style="padding: 4px 0; font-weight: 600;">Tanggal Pendaftaran</td>
            <td>:</td>
            <td id="doc-reg-date">-</td>
          </tr>
          <tr>
            <td style="padding: 4px 0; font-weight: 600;">Jalur Pendaftaran</td>
            <td>:</td>
            <td style="font-weight: 700;" id="doc-jalur">-</td>
          </tr>
          <tr>
            <td style="padding: 4px 0; font-weight: 600;">Pilihan Program Keahlian</td>
            <td>:</td>
            <td style="font-weight: 700; color: #0f172a;" id="doc-jurusan">-</td>
          </tr>
        </table>

        <!-- Pas Foto Preview -->
        <div class="text-center">
          <img id="doc-photo-img" src="https://placehold.co/300x400?text=Foto+3x4" alt="Pas Foto Siswa" class="doc-photo-preview">
          <div class="doc-photo-caption" style="font-size: 0.68rem; color: #64748b; margin-top: 3px;">Pas Foto 3x4</div>
        </div>
      </div>

      <!-- 4. TABEL DETAIL DATA SISWA -->
      <table class="doc-table">
        <!-- Section A: Data Siswa -->
        <thead>
          <tr>
            <th colspan="2" class="doc-table-section-head">A. DATA PRIBADI CALON SISWA</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="doc-table-label">Nama Lengkap</td>
            <td class="doc-table-value fw-bold" id="doc-nama">-</td>
          </tr>
          <tr>
            <td class="doc-table-label">NISN</td>
            <td class="doc-table-value" id="doc-nisn">-</td>
          </tr>
          <tr>
            <td class="doc-table-label">NIK (Kependudukan)</td>
            <td class="doc-table-value" id="doc-nik">-</td>
          </tr>
          <tr>
            <td class="doc-table-label">Tempat, Tanggal Lahir</td>
            <td class="doc-table-value" id="doc-ttl">-</td>
          </tr>
          <tr>
            <td class="doc-table-label">Jenis Kelamin</td>
            <td class="doc-table-value" id="doc-jk">-</td>
          </tr>
          <tr>
            <td class="doc-table-label">Agama</td>
            <td class="doc-table-value" id="doc-agama">-</td>
          </tr>
          <tr>
            <td class="doc-table-label">No. HP / WhatsApp &amp; Email</td>
            <td class="doc-table-value" id="doc-kontak">-</td>
          </tr>
          <tr>
            <td class="doc-table-label">Asal Sekolah &amp; Tahun Lulus</td>
            <td class="doc-table-value" id="doc-asal-sekolah">-</td>
          </tr>
          <tr>
            <td class="doc-table-label">Alamat Lengkap</td>
            <td class="doc-table-value" id="doc-alamat">-</td>
          </tr>
        </tbody>

        <!-- Section B: Data Orang Tua / Wali -->
        <thead>
          <tr>
            <th colspan="2" class="doc-table-section-head">B. DATA ORANG TUA / WALI</th>
          </tr>
        </thead>
        <tbody>
          <tr id="doc-row-ayah">
            <td class="doc-table-label">Nama &amp; Pekerjaan Ayah</td>
            <td class="doc-table-value" id="doc-ayah">-</td>
          </tr>
          <tr id="doc-row-ibu">
            <td class="doc-table-label">Nama &amp; Pekerjaan Ibu</td>
            <td class="doc-table-value" id="doc-ibu">-</td>
          </tr>
          <tr id="doc-row-kontak-ortu">
            <td class="doc-table-label">No. HP / WhatsApp Orang Tua</td>
            <td class="doc-table-value" id="doc-kontak-ortu">-</td>
          </tr>
          <tr id="doc-row-alamat-ortu">
            <td class="doc-table-label">Alamat Orang Tua</td>
            <td class="doc-table-value" id="doc-alamat-ortu">-</td>
          </tr>
          <tr id="doc-row-wali" style="display: none;">
            <td class="doc-table-label">Nama &amp; Pekerjaan Wali</td>
            <td class="doc-table-value" id="doc-wali">-</td>
          </tr>
          <tr id="doc-row-kontak-wali" style="display: none;">
            <td class="doc-table-label">No. HP / WhatsApp Wali</td>
            <td class="doc-table-value" id="doc-kontak-wali">-</td>
          </tr>
          <tr id="doc-row-alamat-wali" style="display: none;">
            <td class="doc-table-label">Alamat Wali</td>
            <td class="doc-table-value" id="doc-alamat-wali">-</td>
          </tr>
        </tbody>

        <!-- Section C: Riwayat Pribadi -->
        <thead>
          <tr>
            <th colspan="2" class="doc-table-section-head">C. RIWAYAT &amp; KETERANGAN TAMBAHAN</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="doc-table-label">Riwayat Kesehatan</td>
            <td class="doc-table-value" id="doc-kesehatan">-</td>
          </tr>
          <tr>
            <td class="doc-table-label">Prestasi / Pengalaman Organisasi</td>
            <td class="doc-table-value" id="doc-prestasi">-</td>
          </tr>
          <tr>
            <td class="doc-table-label">Ukuran Seragam Sekolah</td>
            <td class="doc-table-value" id="doc-seragam">-</td>
          </tr>
        </tbody>
      </table>

      <!-- 5. TANDA TANGAN & PENGESAHAN -->
      <div class="doc-sign-wrapper">
        <div class="doc-sign-box">
          <div>Mengetahui,</div>
          <div id="doc-sign-parent-label">Orang Tua / Wali Siswa</div>
          <div class="doc-sign-line">( ............................................ )</div>
        </div>

        <div class="doc-sign-box">
          <div>Jakarta, <span id="doc-sign-date">10 Oktober 2026</span></div>
          <div>Calon Peserta Didik Baru</div>
          <div class="doc-sign-line" id="doc-sign-student">( ............................................ )</div>
        </div>
      </div>

      <!-- 6. CATATAN KAKI -->
      <div class="doc-footer-notes">
        * Lembar bukti formulir ini wajib dicetak dan dibawa bersama berkas persyaratan fisik (Ijazah/SKL, KK, Akta Kelahiran, Pas Foto) saat verifikasi ke panitia PPDB SMK Cerdas Satu Bangsa.
      </div>

      </div>
    </div>

    <!-- Modal Footer Action Buttons -->
    <div class="modal-preview-footer no-print">
      <button type="button" class="btn btn-success px-4" id="btn-print-modal" style="background:#059669; border-color:#059669;">
        <i class="fas fa-print me-1"></i> Simpan &amp; Cetak Dokumen PDF
      </button>
    </div>

  </div>
</div>

<!-- html2pdf.js — library cetak ke PDF tanpa window.print() -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<!-- Script Khusus Formulir PPDB -->
<script src="<?= BASE_URL ?>assets/js/formulir.js?v=<?= filemtime(__DIR__ . '/../assets/js/formulir.js') ?>"></script>

<?php
include __DIR__ . '/../partials/footer.php';
?>
