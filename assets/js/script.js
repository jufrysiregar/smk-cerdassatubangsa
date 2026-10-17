/* =========================================================
   WEBSITE UTAMA - SMK CERDAS SATU BANGSA
   Master JavaScript — Interactions, Animations & UX
   ========================================================= */

(function () {
  'use strict';



  /* ==========================================================
     2. AOS (Animate on Scroll) Init
     ========================================================== */
  document.addEventListener('DOMContentLoaded', () => {

    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 550,
        easing: 'ease-out-cubic',
        once: true,
        offset: 60,
        delay: 0,
      });
    }

    /* ========================================================
       3. NAVBAR SCROLL COMPACT
       ======================================================== */
    const navbar = document.querySelector('.custom-navbar');

    const onScroll = () => {
      if (!navbar) return;
      if (window.scrollY > 60) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    };

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll(); // run once on load

    /* ========================================================
       4. SIDE PANEL (SLIDE DARI KANAN) & CONTENT SHIFT
       ======================================================== */
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const sidePanel    = document.getElementById('side-menu-panel');
    const closePanelBtn = document.getElementById('side-panel-close');
    const pageWrapper   = document.getElementById('page-content-wrapper');

    function openSidePanel() {
      if (sidePanel) {
        sidePanel.classList.add('is-open');
        sidePanel.classList.add('open');
      }
      if (hamburgerBtn) {
        hamburgerBtn.classList.add('is-open');
        hamburgerBtn.setAttribute('aria-expanded', 'true');
      }
      document.body.classList.add('side-panel-open');
      document.body.classList.add('menu-open');

      const navbar = document.querySelector('.custom-navbar');
      const panelW = sidePanel ? sidePanel.offsetWidth : 380;

      if (pageWrapper) {
        pageWrapper.style.transform = `translateX(-${panelW}px)`;
      }
      if (navbar) {
        navbar.style.transform = `translateX(-${panelW}px)`;
      }
    }

    function closeSidePanel() {
      if (sidePanel) {
        sidePanel.classList.remove('is-open');
        sidePanel.classList.remove('open');
      }
      if (hamburgerBtn) {
        hamburgerBtn.classList.remove('is-open');
        hamburgerBtn.setAttribute('aria-expanded', 'false');
      }
      document.body.classList.remove('side-panel-open');
      document.body.classList.remove('menu-open');

      const navbar = document.querySelector('.custom-navbar');
      if (pageWrapper) {
        pageWrapper.style.removeProperty('transform');
      }
      if (navbar) {
        navbar.style.removeProperty('transform');
      }
    }

    if (hamburgerBtn) {
      hamburgerBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        const isOpen = sidePanel && sidePanel.classList.contains('is-open');
        isOpen ? closeSidePanel() : openSidePanel();
      });
    }

    if (closePanelBtn) {
      closePanelBtn.addEventListener('click', closeSidePanel);
    }

    // Klik di luar panel → tutup
    document.addEventListener('click', (e) => {
      if (
        sidePanel &&
        sidePanel.classList.contains('is-open') &&
        !sidePanel.contains(e.target) &&
        hamburgerBtn && !hamburgerBtn.contains(e.target)
      ) {
        closeSidePanel();
      }
    });

    // ESC → tutup
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && sidePanel && sidePanel.classList.contains('is-open')) {
        closeSidePanel();
      }
    });

    /* ========================================================
       5. ACCORDION SUBMENU TOGGLE — SIDE PANEL
       ======================================================== */
    const submenuItems = document.querySelectorAll('.side-nav-item.has-sub');

    submenuItems.forEach(item => {
      const toggleTrigger = item.querySelector('.side-nav-row .sp-menu-card') || item.querySelector('.side-sub-toggle') || item.querySelector('.side-nav-row .side-nav-link');
      const signIcon      = item.querySelector('.sp-sub-sign, .sign-icon');

      function toggleSubmenu(e) {
        e.preventDefault();
        e.stopPropagation();

        const isExpanded = item.classList.contains('expanded');

        // Accordion: tutup submenu lain
        submenuItems.forEach(other => {
          if (other !== item) {
            other.classList.remove('expanded');
            const otherSign = other.querySelector('.sp-sub-sign, .sign-icon');
            if (otherSign) otherSign.textContent = '+';
          }
        });

        if (!isExpanded) {
          item.classList.add('expanded');
          if (signIcon) signIcon.textContent = '−';
        } else {
          item.classList.remove('expanded');
          if (signIcon) signIcon.textContent = '+';
        }
      }

      if (toggleTrigger) {
        toggleTrigger.addEventListener('click', toggleSubmenu);
      }
    });

    /* ========================================================
       6. BUTTON RIPPLE EFFECT
       ======================================================== */
    function attachRipple(selector) {
      document.querySelectorAll(selector).forEach(btn => {
        btn.addEventListener('click', function (e) {
          const rect = this.getBoundingClientRect();
          const ripple = document.createElement('span');
          const size = Math.max(rect.width, rect.height);

          ripple.classList.add('ripple');
          ripple.style.cssText = `
            width: ${size}px;
            height: ${size}px;
            left: ${e.clientX - rect.left - size / 2}px;
            top: ${e.clientY - rect.top - size / 2}px;
          `;

          this.appendChild(ripple);

          ripple.addEventListener('animationend', () => ripple.remove());
        });
      });
    }

    attachRipple('.btn-primary-custom');
    attachRipple('.btn-outline-custom');

    /* ========================================================
       7. HERO SUBTLE PARALLAX (desktop only)
       ======================================================== */
    const heroSection = document.querySelector('.hero-section');

    if (heroSection && window.innerWidth >= 992) {
      window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        if (scrollY < window.innerHeight) {
          heroSection.style.backgroundPositionY = `calc(50% + ${scrollY * 0.3}px)`;
        }
      }, { passive: true });
    }

    /* ========================================================
       8. GALLERY / GURU FILTER WITH FADE ANIMATION
       ======================================================== */
    function setupFilter(btnSelector, itemSelector) {
      const btns  = document.querySelectorAll(btnSelector);
      const items = document.querySelectorAll(itemSelector);
      if (!btns.length || !items.length) return;

      const refreshPageLayout = () => {
        // Pastikan tinggi grid dan posisi footer selalu dihitung ulang setelah filter berubah.
        requestAnimationFrame(() => {
          window.dispatchEvent(new Event('resize'));
          if (typeof AOS !== 'undefined') AOS.refresh();
        });
      };

      btns.forEach(btn => {
        btn.addEventListener('click', function () {
          // Button state
          btns.forEach(b => {
            b.classList.remove('active', 'btn-primary-custom');
            b.classList.add('btn-outline-custom');
            b.setAttribute('aria-selected', 'false');
          });
          this.classList.remove('btn-outline-custom');
          this.classList.add('active', 'btn-primary-custom');
          this.setAttribute('aria-selected', 'true');

          const category = this.getAttribute('data-filter');

          items.forEach(item => {
            const match = category === 'all' || item.getAttribute('data-category') === category;
            window.clearTimeout(item.filterHideTimer);

            if (match) {
              item.hidden = false;
              item.style.display = '';
              item.style.opacity = '0';
              item.style.transform = 'scale(0.95)';
              requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                  item.style.transition = 'opacity 0.35s ease, transform 0.35s ease';
                  item.style.opacity = '1';
                  item.style.transform = 'scale(1)';
                });
              });
            } else {
              item.style.transition = 'opacity 0.25s ease, transform 0.25s ease';
              item.style.opacity = '0';
              item.style.transform = 'scale(0.92)';
              item.filterHideTimer = window.setTimeout(() => {
                if (item.style.opacity === '0') {
                  item.hidden = true;
                  item.style.display = 'none';
                  refreshPageLayout();
                }
              }, 280);
            }
          });

          refreshPageLayout();
        });
      });
    }

    setupFilter('.gallery-filter-btn', '.gallery-item');
    setupFilter('.guru-filter-btn', '.guru-item');

    /* ========================================================
       9. FLOATING LABEL — AUTO-DETECT FILLED INPUTS
       ======================================================== */
    document.querySelectorAll('.float-label-wrap input, .float-label-wrap textarea').forEach(el => {
      // Trigger on load if already filled (e.g. autofill)
      if (el.value.trim() !== '') {
        el.classList.add('has-value');
      }

      el.addEventListener('input', () => {
        el.classList.toggle('has-value', el.value.trim() !== '');
      });
    });

    /* ========================================================
       10. INTERSECTION OBSERVER — SCROLL REVEAL (fallback if AOS absent)
       ======================================================== */
    if (typeof AOS === 'undefined') {
      const revealEls = document.querySelectorAll('[data-reveal]');
      const revealObs = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('revealed');
            revealObs.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12 });

      revealEls.forEach(el => {
        el.classList.add('reveal-ready');
        revealObs.observe(el);
      });
    }

    /* ========================================================
       11. STAT COUNTER ANIMATION (count-up)
       ======================================================== */
    const statNumbers = document.querySelectorAll('.stat-number');

    if (statNumbers.length) {
      const countObs = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const el = entry.target;
            const raw = el.textContent.trim(); // e.g. "1,250+"
            const suffix = raw.replace(/[0-9,]/g, ''); // "+", "%", etc.
            const target = parseInt(raw.replace(/[^0-9]/g, ''), 10);

            if (isNaN(target)) return;

            let start = 0;
            const duration = 1800;
            const stepTime = 16;
            const increment = target / (duration / stepTime);

            const counter = setInterval(() => {
              start = Math.min(start + increment, target);
              el.textContent = Math.floor(start).toLocaleString('id-ID') + suffix;
              if (Math.floor(start) >= target) {
                clearInterval(counter);
                el.textContent = raw; // restore original
              }
            }, stepTime);

            countObs.unobserve(el);
          }
        });
      }, { threshold: 0.5 });

      statNumbers.forEach(el => countObs.observe(el));
    }

    /* ========================================================
       12. PENGUMUMAN / TABLE SEARCH (live filter)
       ======================================================== */
    const searchInput = document.getElementById('search-input');
    if (searchInput) {
      const tableRows = document.querySelectorAll('#table-ppdb tbody tr');
      searchInput.addEventListener('input', function () {
        const term = this.value.toLowerCase().trim();
        tableRows.forEach(row => {
          const match = row.innerText.toLowerCase().includes(term);
          row.style.transition = 'opacity 0.2s ease';
          row.style.opacity = match ? '1' : '0.2';
          row.style.display = match ? '' : (term.length > 0 ? '' : '');
        });
      });
    }

    /* ========================================================
       13. FULLSCREEN SUCCESS TOAST OVERLAY & FORM SUBMIT HANDLERS
       ======================================================== */
    window.showSuccessToast = function(message, title = 'Berhasil!') {
      const overlay = document.getElementById('success-toast-overlay');
      if (!overlay) return;

      const msgEl = document.getElementById('success-toast-msg');
      const titleEl = document.getElementById('success-toast-title');
      const bar = document.getElementById('success-toast-bar-fill');

      if (msgEl && message) msgEl.textContent = message;
      if (titleEl && title) titleEl.textContent = title;

      // Reset and trigger checkmark SVG animation
      const check = overlay.querySelector('.success-checkmark');
      const circle = overlay.querySelector('.success-checkmark__circle');
      const checkPath = overlay.querySelector('.success-checkmark__check');
      [check, circle, checkPath].forEach(el => {
        if (el) {
          el.style.animation = 'none';
          void el.offsetHeight;
          el.style.animation = '';
        }
      });

      // Reset and trigger 5-second countdown progress bar
      if (bar) {
        bar.classList.remove('running');
        void bar.offsetHeight;
        bar.classList.add('running');
      }

      overlay.style.display = 'flex';
      void overlay.offsetHeight;
      overlay.classList.add('active');
      document.body.style.overflow = 'hidden';

      if (window.__successToastTimer) {
        clearTimeout(window.__successToastTimer);
      }

      window.__successToastTimer = setTimeout(function() {
        overlay.classList.remove('active');
        setTimeout(() => {
          overlay.style.display = 'none';
          document.body.style.overflow = '';
        }, 300);
      }, 5000);
    };

    // Handler form kontak: tidak ada notifikasi di dalam form, melainkan Fullscreen Toast Overlay (Latar blur, ceklis hidup, 5 detik)
    const formKontak = document.getElementById('form-kontak');
    if (formKontak) {
      formKontak.addEventListener('submit', function (e) {
        e.preventDefault();

        if (!formKontak.checkValidity()) {
          formKontak.reportValidity();
          return;
        }

        const btn = formKontak.querySelector('button[type="submit"]');
        let origBtnContent = '';
        if (btn) {
          origBtnContent = btn.innerHTML;
          btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Mengirim...';
          btn.disabled = true;
        }

        setTimeout(() => {
          if (btn) {
            btn.innerHTML = origBtnContent;
            btn.disabled = false;
          }
          formKontak.reset();

          // Tampilkan Fullscreen Toast Notifikasi (Latar blur, ceklis hidup, 5 detik)
          window.showSuccessToast(
            'Pesan Anda berhasil terkirim. Terima kasih telah menghubungi kami!',
            'Pesan Terkirim!'
          );
        }, 850);
      });
    }

    function handleSimulatedForm(formId, successMsg) {
      const form = document.getElementById(formId);
      if (!form) return;

      form.addEventListener('submit', function (e) {
        e.preventDefault();

        const btn = form.querySelector('button[type="submit"]');
        if (btn) {
          const orig = btn.innerHTML;
          btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Memproses...';
          btn.disabled = true;

          setTimeout(() => {
            btn.innerHTML = '<i class="fas fa-check-circle me-2"></i> Berhasil!';
            btn.style.background = '#10b981';

            // Show alert
            let alertBox = document.getElementById(formId + '-alert');
            if (!alertBox) {
              alertBox = document.createElement('div');
              alertBox.id = formId + '-alert';
              form.parentNode.insertBefore(alertBox, form);
            }
            alertBox.className = 'alert alert-success mt-3';
            alertBox.style.animation = 'fadeSlideDown 0.4s ease';
            alertBox.innerHTML = `<i class="fas fa-check-circle me-2"></i>${successMsg}`;

            form.reset();

            // Restore button after 3s
            setTimeout(() => {
              btn.innerHTML = orig;
              btn.disabled = false;
              btn.style.background = '';
            }, 3500);
          }, 1200);
        }
      });
    }

    handleSimulatedForm('form-ppdb', 'Pendaftaran PPDB Berhasil Dikirim! Tim kami akan segera memverifikasi data Anda.');


    /* ========================================================
       14. STATS SLIDER SCROLL NAVIGATION & END-STATE DETECTION (< & >)
       ======================================================== */
    const statsTrack = document.getElementById('stats-slider-track');
    const statsPrevBtn = document.getElementById('stats-prev-btn');
    const statsNextBtn = document.getElementById('stats-next-btn');

    if (statsTrack && statsPrevBtn && statsNextBtn) {
      function updateNavBtnState() {
        const scrollLeft = Math.ceil(statsTrack.scrollLeft);
        const maxScrollLeft = statsTrack.scrollWidth - statsTrack.clientWidth;

        // Jika semua card muat dalam satu layar tanpa perlu scroll
        if (maxScrollLeft <= 5) {
          statsPrevBtn.disabled = true;
          statsPrevBtn.classList.add('is-disabled');
          statsNextBtn.disabled = true;
          statsNextBtn.classList.add('is-disabled');
          return;
        }

        // Ujung Kiri (card paling awal) -> sembunyikan tombol <
        if (scrollLeft <= 8) {
          statsPrevBtn.disabled = true;
          statsPrevBtn.classList.add('is-disabled');
        } else {
          statsPrevBtn.disabled = false;
          statsPrevBtn.classList.remove('is-disabled');
        }

        // Ujung Kanan (card paling akhir) -> sembunyikan tombol >
        if (scrollLeft >= maxScrollLeft - 15) {
          statsNextBtn.disabled = true;
          statsNextBtn.classList.add('is-disabled');
        } else {
          statsNextBtn.disabled = false;
          statsNextBtn.classList.remove('is-disabled');
        }
      }

      statsPrevBtn.addEventListener('click', () => {
        const itemWidth = statsTrack.firstElementChild ? statsTrack.firstElementChild.offsetWidth + 22 : 250;
        statsTrack.scrollBy({ left: -itemWidth * 1.5, behavior: 'smooth' });
        setTimeout(updateNavBtnState, 350);
      });

      statsNextBtn.addEventListener('click', () => {
        const itemWidth = statsTrack.firstElementChild ? statsTrack.firstElementChild.offsetWidth + 22 : 250;
        statsTrack.scrollBy({ left: itemWidth * 1.5, behavior: 'smooth' });
        setTimeout(updateNavBtnState, 350);
      });

      statsTrack.addEventListener('scroll', updateNavBtnState, { passive: true });
      window.addEventListener('resize', updateNavBtnState, { passive: true });

      // Inisialisasi awal saat load
      updateNavBtnState();
      setTimeout(updateNavBtnState, 300);
      setTimeout(updateNavBtnState, 800);
    }

    /* ========================================================
       15. HIGHLIGHT CARDS AUTOMATIC IMAGE SLIDESHOW (Card 4 & Card 6)
       ======================================================== */
    const slideshowContainers = document.querySelectorAll('.media-slideshow');
    slideshowContainers.forEach(container => {
      const images = container.querySelectorAll('.media-stat-img');
      const indicators = container.querySelectorAll('.slideshow-indicators .indicator-bar');
      if (images.length <= 1) return;

      const intervalTime = parseInt(container.getAttribute('data-interval'), 10) || 3000;
      let currentIndex = 0;
      let timer = null;

      function showSlide(index) {
        images.forEach((img, i) => {
          if (i === index) {
            img.classList.add('active');
          } else {
            img.classList.remove('active');
          }
        });
        if (indicators.length > 0) {
          indicators.forEach((bar, i) => {
            bar.classList.toggle('active', i === index);
          });
        }
        currentIndex = index;
      }

      function nextSlide() {
        const nextIndex = (currentIndex + 1) % images.length;
        showSlide(nextIndex);
      }

      function startTimer() {
        if (!timer) {
          timer = setInterval(nextSlide, intervalTime);
        }
      }

      function stopTimer() {
        if (timer) {
          clearInterval(timer);
          timer = null;
        }
      }

      startTimer();

      document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
          stopTimer();
        } else {
          startTimer();
        }
      });
    });

  }); // DOMContentLoaded end

})(); // IIFE end
