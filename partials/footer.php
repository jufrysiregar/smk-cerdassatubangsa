<?php /* Footer template */ ?>

  <!-- ─── MAIN FOOTER ───────────────────────────────────────── -->
  <footer class="main-footer">
    <div class="container-fluid px-3 px-md-4 px-lg-5">
      <div class="row justify-content-between g-4">

        <!-- Column 1: School Identity (Pojok Kiri) -->
        <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="0">
          <div class="d-flex align-items-center gap-3 mb-3">
            <img src="<?= BASE_URL ?>assets/img/logo/logo.png"
                 onerror="this.onerror=null; this.src='<?= BASE_URL ?>src/logos/logo22.png';"
                 alt="Logo SMK Cerdas Satu Bangsa"
                 style="height: 54px; width: auto; object-fit: contain;">
            <div class="d-flex flex-column justify-content-center">
              <span class="fw-bold text-white font-poppins" style="font-size: 1.15rem; letter-spacing: 0.5px; line-height: 1.2;">SMK CERDAS SATU BANGSA</span>
              <span style="color: #38bdf8; font-size: 0.82rem; font-weight: 600; letter-spacing: 0.3px; margin-top: 3px;">Siap Bertalenta dan Kerja</span>
            </div>
          </div>

          <div class="mt-4">
            <p class="mb-2" style="color: #cbd5e1; font-size: 0.92rem; font-weight: 500;">
              Temukan kami di platform lainnya :
            </p>
            <div class="d-flex gap-2 flex-wrap">
              <!-- Facebook (Warna Asli) -->
              <button type="button" class="social-btn social-btn-fb" title="Facebook" onclick="showSosmedUnavailable('Facebook')">
                <i class="fab fa-facebook-f"></i>
              </button>
              <!-- Instagram (Warna Gradasi Asli) -->
              <button type="button" class="social-btn social-btn-ig" title="Instagram" onclick="showSosmedUnavailable('Instagram')">
                <i class="fab fa-instagram"></i>
              </button>
              <!-- YouTube (Warna Merah Asli) -->
              <button type="button" class="social-btn social-btn-yt" title="YouTube" onclick="showSosmedUnavailable('YouTube')">
                <i class="fab fa-youtube"></i>
              </button>
              <!-- TikTok (Warna Hitam + Aksen Neon Asli) -->
              <button type="button" class="social-btn social-btn-tk" title="TikTok" onclick="showSosmedUnavailable('TikTok')">
                <i class="fab fa-tiktok"></i>
              </button>
            </div>
            <p class="mb-0 mt-3" style="color:#94a3b8; font-size:0.82rem;">
              &copy; <?php echo date('Y'); ?>
              <strong style="color:#cbd5e1;">SMK Cerdas Satu Bangsa</strong>.
              Hak Cipta Dilindungi Undang-Undang.
            </p>
          </div>
        </div>

        <!-- Column 2 & 3: Tautan Cepat & Kontak Kami (Pojok Kanan) -->
        <div class="col-lg-6 col-md-12">
          <div class="row justify-content-lg-end g-4">

            <!-- Column: Quick Links -->
            <div class="col-sm-6 col-12 col-lg-5" data-aos="fade-up" data-aos-delay="80">
              <h5 class="footer-title">Tautan Cepat</h5>
              <ul class="footer-links">
                <li><a href="<?= BASE_URL ?>profil/sejarah.php"><i class="fas fa-chevron-right me-1 small"></i> Sejarah Sekolah</a></li>
                <li><a href="<?= BASE_URL ?>profil/visi-misi.php"><i class="fas fa-chevron-right me-1 small"></i> Visi &amp; Misi</a></li>
                <li><a href="<?= BASE_URL ?>profil/fasilitas.php"><i class="fas fa-chevron-right me-1 small"></i> Fasilitas</a></li>
                <li><a href="<?= BASE_URL ?>profil/sertifikasi.php"><i class="fas fa-chevron-right me-1 small"></i> Akreditasi</a></li>
                <li><a href="<?= BASE_URL ?>berita.php"><i class="fas fa-chevron-right me-1 small"></i> Berita Terbaru</a></li>
              </ul>
            </div>

            <!-- Column: Contact Us -->
            <div class="col-sm-6 col-12 col-lg-7" data-aos="fade-up" data-aos-delay="160">
              <h5 class="footer-title">Kontak Kami</h5>
              <ul class="footer-links">
                <li class="d-flex align-items-start gap-2 mb-3">
                  <i class="fas fa-map-marker-alt mt-1" style="color:#34d399;"></i>
                  <span>Jl. Cirebon No.1, Pasar Baru, Medan Kota, Kota Medan, Sumatera Utara 20212</span>
                </li>
                <li class="d-flex align-items-center gap-2 mb-2">
                  <i class="fas fa-phone-alt" style="color:#34d399;"></i>
                  <span>(061) 1234567</span>
                </li>
                <li class="d-flex align-items-center gap-2 mb-2">
                  <i class="fab fa-whatsapp" style="color:#34d399;"></i>
                  <span>WhatsApp Hotline: 081234567890</span>
                </li>
                <li class="d-flex align-items-center gap-2">
                  <i class="fas fa-envelope" style="color:#34d399;"></i>
                  <span>info@smkcerdassatubangsa.sch.id</span>
                </li>
              </ul>
            </div>

          </div>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container-fluid -->
  </footer>

  <!-- ─── MODAL DI TENGAH LAYAR: NOTIFIKASI SOSMED BELUM TERSEDIA ─ -->
  <div id="sosmed-modal-overlay" onclick="closeSosmedModal()" hidden>
    <div class="sosmed-modal-box" onclick="event.stopPropagation()">
      <!-- Baris Atas: Icon berdampingan dengan Tulisan Pemberitahuan -->
      <div class="d-flex align-items-center gap-2 mb-2">
        <div class="sosmed-modal-icon">
          <i class="fas fa-info-circle"></i>
        </div>
        <h6 class="fw-bold text-dark font-poppins mb-0" style="font-size: 1.05rem;">Pemberitahuan</h6>
      </div>
      <!-- Baris Bawah: Rata Kiri -->
      <p id="sosmed-modal-text" class="text-muted text-start mb-0" style="font-size: 0.9rem; line-height: 1.5;">
        saat ini belum tersedia...
      </p>
    </div>
  </div>

  <!-- ─── SCRIPTS ──────────────────────────────────────────── -->
</div><!-- /#page-content-wrapper -->

  <!-- Bootstrap 5 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS – Animate on Scroll -->
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <!-- Custom JS Utama -->
  <script src="<?= BASE_URL ?>assets/js/script.js"></script>

  <!-- Inline Styles & Scripts for Social Media Modal -->
  <style>
    /* ─── Tombol Media Sosial Minimalis & Sederhana ────────── */
    .social-btn {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border: none;
      outline: none;
      cursor: pointer;
      color: #ffffff !important;
      font-size: 0.82rem;
      transition: transform 0.2s ease, opacity 0.2s ease, box-shadow 0.2s ease !important;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    .social-btn:hover {
      transform: translateY(-2px) !important;
      opacity: 0.9;
    }

    /* Facebook */
    .social-btn-fb {
      background: #1877f2 !important;
    }

    /* Instagram */
    .social-btn-ig {
      background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%) !important;
    }

    /* YouTube */
    .social-btn-yt {
      background: #ff0000 !important;
    }

    /* TikTok */
    .social-btn-tk {
      background: #000000 !important;
      border: 1px solid rgba(255, 255, 255, 0.2) !important;
    }

    /* ─── Modal Popup di Tengah Layar (Kompak & Modern) ─────── */
    #sosmed-modal-overlay {
      position: fixed;
      inset: 0;
      background: rgba(15, 23, 42, 0.6);
      backdrop-filter: blur(4px);
      -webkit-backdrop-filter: blur(4px);
      z-index: 999999;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.25s ease, visibility 0.25s ease;
    }

    /* Mencegah popup sosial sempat terlihat saat HTML halaman baru pertama dimuat. */
    #sosmed-modal-overlay[hidden] {
      display: none !important;
    }

    #sosmed-modal-overlay.active {
      opacity: 1;
      visibility: visible;
    }

    body.sosmed-modal-open {
      overflow: hidden;
    }

    .sosmed-modal-box {
      background: #ffffff;
      border-radius: 16px;
      padding: 20px 24px;
      width: 90%;
      max-width: 360px;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
      transform: scale(0.88);
      transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
      position: relative;
    }

    #sosmed-modal-overlay.active .sosmed-modal-box {
      transform: scale(1);
    }

    .sosmed-modal-icon {
      width: 34px;
      height: 34px;
      border-radius: 50%;
      background: #ecfdf5;
      color: #059669;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1rem;
      flex-shrink: 0;
    }
  </style>

  <script>
    let sosmedTimeout;
    let sosmedHideTimeout;

    function showSosmedUnavailable(platformName) {
      const overlay = document.getElementById('sosmed-modal-overlay');
      const textEl = document.getElementById('sosmed-modal-text');
      if (textEl) {
        textEl.innerHTML = platformName 
          ? `Akun <strong>${platformName}</strong> saat ini belum tersedia...`
          : `saat ini belum tersedia...`;
      }
      if (overlay) {
        // Footer berada dalam pembungkus halaman. Pindahkan overlay ke body
        // agar position: fixed selalu mengacu ke viewport yang sedang dilihat.
        if (overlay.parentElement !== document.body) {
          document.body.appendChild(overlay);
        }
        clearTimeout(sosmedHideTimeout);
        overlay.hidden = false;
        document.body.classList.add('sosmed-modal-open');
        requestAnimationFrame(() => overlay.classList.add('active'));
        clearTimeout(sosmedTimeout);
        // Otomatis menghilang setelah 3 detik
        sosmedTimeout = setTimeout(() => {
          closeSosmedModal();
        }, 3000);
      }
    }

    function closeSosmedModal() {
      const overlay = document.getElementById('sosmed-modal-overlay');
      if (overlay) {
        overlay.classList.remove('active');
        document.body.classList.remove('sosmed-modal-open');
        clearTimeout(sosmedTimeout);
        clearTimeout(sosmedHideTimeout);
        sosmedHideTimeout = setTimeout(() => {
          if (!overlay.classList.contains('active')) overlay.hidden = true;
        }, 260);
      }
    }

    // Browser dapat memulihkan halaman dari cache (back/forward). Pastikan
    // notifikasi lama tidak ikut muncul kembali pada halaman yang dipulihkan.
    window.addEventListener('pageshow', closeSosmedModal);
  </script>

</body>
</html>
