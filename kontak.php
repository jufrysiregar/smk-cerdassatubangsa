<?php
require_once __DIR__ . '/koneksi.php';

$page_title = "Hubungi Kami";
$active_page = "kontak";

$pesan_sukses = "";
$pesan_error  = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama   = trim($_POST['nama'] ?? '');
    $email  = trim($_POST['email'] ?? '');
    $subjek = trim($_POST['subjek'] ?? '');
    $pesan  = trim($_POST['pesan'] ?? '');

    if (!empty($nama) && !empty($email) && !empty($pesan)) {
        if (isset($db_connected) && $db_connected) {
            $sql = "INSERT INTO kontak_pesan (nama, email, subjek, pesan) VALUES ('$nama', '$email', '$subjek', '$pesan')";
            @mysqli_query($conn, $sql);
        }
        $pesan_sukses = "Terima kasih! Pesan Anda telah terkirim. Tim layanan informasi kami akan memberikan tanggapan melalui email.";
    } else {
        $pesan_error = "Harap lengkapi semua kolom yang wajib diisi.";
    }
}

include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/navbar.php';
?>

<!-- Header Banner -->
<section class="subpage-header">
  <div class="container text-center">
    <h1 class="subpage-title">Informasi dan Pelayanan Sekolah</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom justify-content-center">
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index.php">Beranda</a></li>
        <li class="breadcrumb-item active" aria-current="page">Kontak</li>
      </ol>
    </nav>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row g-5">
      
      <!-- Contact Info Sidebar -->
      <div class="col-lg-5">
        <h2 class="section-title">Kami Siap Membantu Anda</h2>
        <p class="text-muted mb-4">
          Ada pertanyaan seputar PPDB, kunjungan industri, atau informasi program studi? Silakan hubungi kami melalui saluran berikut.
        </p>

        <div class="d-flex align-items-start gap-3 mb-4">
          <div class="rounded-circle bg-emerald text-white p-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px; background:#059669;">
            <i class="fas fa-map-marker-alt fs-5"></i>
          </div>
          <div>
            <h6 class="fw-bold mb-1 font-poppins">Alamat Sekolah</h6>
            <p class="text-muted fs-7 mb-0">Jl. Cirebon No.1, Pasar Baru, Medan Kota, Kota Medan, Sumatera Utara 20212</p>
          </div>
        </div>

        <div class="d-flex align-items-start gap-3 mb-4">
          <div class="rounded-circle bg-primary text-white p-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px;">
            <i class="fas fa-phone-alt fs-5"></i>
          </div>
          <div>
            <h6 class="fw-bold mb-1 font-poppins">Telepon &amp; WhatsApp</h6>
            <p class="text-muted fs-7 mb-0">Kantor: (061) 1234567<br>WhatsApp Hotline: 081234567890</p>
          </div>
        </div>

        <div class="d-flex align-items-start gap-3 mb-4">
          <div class="rounded-circle bg-warning text-dark p-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px;">
            <i class="fas fa-envelope fs-5"></i>
          </div>
          <div>
            <h6 class="fw-bold mb-1 font-poppins">Email Resmi</h6>
            <p class="text-muted fs-7 mb-0">info@smkcerdassatubangsa.sch.id</p>
          </div>
        </div>

        <div class="d-flex align-items-start gap-3">
          <div class="rounded-circle bg-dark text-white p-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px;">
            <i class="fas fa-clock fs-5"></i>
          </div>
          <div>
            <h6 class="fw-bold mb-1 font-poppins">Jam Operasional Sekretariat</h6>
            <p class="text-muted fs-7 mb-0">Senin - Jumat: 07.00 - 16.00 WIB<br>Sabtu: 08.00 - 12.00 WIB</p>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-7">
        <div class="contact-form-card">
          <div class="contact-form-heading">
            <div class="contact-form-heading-icon" aria-hidden="true"><i class="fas fa-paper-plane"></i></div>
            <div>
              <h4 class="font-poppins">Kirim Pesan Langsung</h4>
              <p>Isi formulir di bawah ini dan pesan Anda akan diteruskan langsung ke sekretariat sekolah.</p>
            </div>
          </div>

          <?php if (!empty($pesan_sukses)): ?>
            <div class="alert alert-success alert-dismissible fade show contact-form-alert" role="alert">
              <i class="fas fa-check-circle me-2"></i> <?php echo $pesan_sukses; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>

          <?php if (!empty($pesan_error)): ?>
            <div class="alert alert-danger alert-dismissible fade show contact-form-alert" role="alert">
              <i class="fas fa-exclamation-circle me-2"></i> <?php echo $pesan_error; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>

          <form action="" method="POST" id="form-kontak" class="contact-modern-form">
            <div class="row g-4">
              <div class="col-md-6">
                <label class="contact-field-label" for="kontak-nama"><i class="fas fa-user"></i> Nama Anda <span>*</span></label>
                <input id="kontak-nama" type="text" name="nama" class="form-control contact-field-control" placeholder="Nama lengkap Anda" required>
              </div>

              <div class="col-md-6">
                <label class="contact-field-label" for="kontak-email"><i class="fas fa-envelope"></i> Email <span>*</span></label>
                <input id="kontak-email" type="email" name="email" class="form-control contact-field-control" placeholder="nama@domain.com" required>
              </div>

              <div class="col-12">
                <label class="contact-field-label" for="kontak-subjek"><i class="fas fa-tag"></i> Subjek Pesan <span>*</span></label>
                <input id="kontak-subjek" type="text" name="subjek" class="form-control contact-field-control" placeholder="Contoh: Pertanyaan Informasi PPDB" required>
              </div>

              <div class="col-12">
                <label class="contact-field-label" for="kontak-pesan"><i class="fas fa-comment-dots"></i> Pesan Anda <span>*</span></label>
                <textarea id="kontak-pesan" name="pesan" rows="4" class="form-control contact-field-control contact-message-control" placeholder="Tuliskan pertanyaan atau informasi yang ingin Anda sampaikan..." required></textarea>
              </div>

              <div class="col-12">
                <button type="submit" class="contact-submit-btn">
                  <span>Kirim Pesan Sekarang</span>
                </button>
                <p class="contact-form-note"><i class="fas fa-shield-alt"></i> Pesan Anda akan diteruskan dengan aman ke sekretariat sekolah.</p>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>

    <!-- Embedded Google Maps -->
    <div class="mt-5 pt-4">
      <h4 class="fw-bold mb-3 font-poppins text-dark text-center">Peta Lokasi Sekolah</h4>
      <div class="rounded-4 overflow-hidden shadow-sm border" style="height: 380px;">
        <iframe src="https://www.google.com/maps?q=3.588661,98.683377&amp;z=17&amp;output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Peta Lokasi SMK Cerdas Satu Bangsa"></iframe>
      </div>
    </div>

  </div>
</section>

<style>
  .contact-form-card {
    position: relative;
    overflow: hidden;
    padding: 2rem;
    border: 1px solid #e1e9f2;
    border-radius: 1.5rem;
    background: linear-gradient(145deg, #ffffff 0%, #f5f9ff 100%);
    box-shadow: 18px 18px 38px rgba(23, 48, 83, .12), -10px -10px 26px rgba(255, 255, 255, .9), inset 1px 1px 0 rgba(255, 255, 255, .95);
  }

  .contact-form-card::after {
    content: '';
    position: absolute;
    z-index: -1;
    right: .7rem;
    bottom: -.55rem;
    left: .7rem;
    height: 2.2rem;
    border-radius: 0 0 1.45rem 1.45rem;
    background: linear-gradient(135deg, rgba(30, 136, 229, .16), rgba(16, 185, 129, .18));
    filter: blur(5px);
  }

  .contact-form-card::before {
    content: '';
    position: absolute;
    top: -6rem;
    right: -5rem;
    width: 14rem;
    height: 14rem;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(16, 185, 129, .14), rgba(16, 185, 129, 0) 70%);
    pointer-events: none;
  }

  .contact-form-heading {
    position: relative;
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    margin-bottom: 1.9rem;
  }

  .contact-form-heading-icon {
    display: grid;
    width: 3rem;
    height: 3rem;
    flex: 0 0 3rem;
    place-items: center;
    border-radius: 1rem;
    color: #fff;
    background: linear-gradient(145deg, #38bdf8, #2563eb 72%);
    box-shadow: 7px 8px 16px rgba(37, 99, 235, .27), inset 1px 1px 1px rgba(255, 255, 255, .45), inset -2px -3px 5px rgba(15, 48, 130, .18);
  }

  .contact-form-eyebrow {
    display: block;
    margin-bottom: .25rem;
    color: #059669;
    font-size: .7rem;
    font-weight: 800;
    letter-spacing: .12em;
  }

  .contact-form-heading h4 {
    margin: 0 0 .35rem;
    color: #13213b;
    font-size: 1.35rem;
    font-weight: 750;
  }

  .contact-form-heading p {
    max-width: none;
    margin: 0;
    color: #66758c;
    font-size: .83rem;
    line-height: 1.65;
  }

  .contact-form-alert {
    position: relative;
    border: 0;
    border-radius: .9rem;
    font-size: .86rem;
  }

  .contact-field-label {
    display: flex;
    align-items: center;
    gap: .45rem;
    margin-bottom: .55rem;
    color: #34445d;
    font-size: .82rem;
    font-weight: 700;
  }

  .contact-field-label i { color: #0ea5e9; }
  .contact-field-label span { color: #ef4444; }

  .contact-field-control {
    min-height: 3.25rem;
    padding: .75rem 1rem;
    border: 1px solid #dae5f1;
    border-radius: .8rem;
    color: #1e2d45;
    background: #fff;
    box-shadow: inset 2px 2px 5px rgba(50, 78, 114, .05), inset -1px -1px 1px rgba(255, 255, 255, .95), 3px 4px 8px rgba(27, 61, 104, .05);
    font-size: .9rem;
    transition: border-color .2s ease, box-shadow .2s ease, transform .2s ease;
  }

  .contact-field-control::placeholder { color: #a0acbd; }

  .contact-field-control:focus {
    border-color: #38bdf8;
    box-shadow: inset 1px 1px 3px rgba(50, 78, 114, .03), 0 0 0 .22rem rgba(14, 165, 233, .13), 4px 5px 10px rgba(27, 61, 104, .08);
    transform: translateY(-1px);
  }

  .contact-message-control {
    min-height: 8.5rem;
    resize: vertical;
  }

  .contact-submit-btn {
    display: flex;
    width: 100%;
    align-items: center;
    justify-content: center;
    gap: .7rem;
    min-height: 3.45rem;
    border: 0;
    border-radius: .85rem;
    color: #fff;
    background: linear-gradient(105deg, #059669 0%, #10b981 38%, #0ea5e9 100%);
    box-shadow: 0 11px 0 #087b5a, 0 18px 28px rgba(5, 150, 105, .25), inset 1px 1px 1px rgba(255, 255, 255, .40), inset -2px -3px 4px rgba(0, 91, 66, .16);
    font-size: .96rem;
    font-weight: 750;
    transition: transform .2s ease, box-shadow .2s ease, filter .2s ease;
  }

  .contact-submit-btn:hover {
    color: #fff;
    filter: brightness(1.04);
    box-shadow: 0 13px 0 #087b5a, 0 21px 31px rgba(5, 150, 105, .30), inset 1px 1px 1px rgba(255, 255, 255, .40), inset -2px -3px 4px rgba(0, 91, 66, .16);
    transform: translateY(-3px);
  }

  .contact-submit-btn:active {
    box-shadow: 0 4px 0 #087b5a, 0 8px 15px rgba(5, 150, 105, .22), inset 1px 2px 4px rgba(0, 91, 66, .18);
    transform: translateY(5px);
  }

  .contact-form-note {
    margin: .85rem 0 0;
    color: #8290a3;
    font-size: .74rem;
    text-align: center;
  }

  .contact-form-note i { margin-right: .3rem; color: #10b981; }

  @media (max-width: 575.98px) {
    .contact-form-card { padding: 1.35rem; border-radius: 1.15rem; }
    .contact-form-heading { gap: .8rem; margin-bottom: 1.5rem; }
    .contact-form-heading-icon { width: 2.6rem; height: 2.6rem; flex-basis: 2.6rem; border-radius: .8rem; }
    .contact-form-heading h4 { font-size: 1.15rem; }
  }
</style>

<?php include __DIR__ . '/partials/footer.php'; ?>
