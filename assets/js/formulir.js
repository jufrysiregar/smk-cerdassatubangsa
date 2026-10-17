/* =========================================================
   FORMULIR PPDB JS — SMK CERDAS SATU BANGSA
   Logic: Toggle Parent/Guardian, Image Preview, Validation & Modal Preview
   ========================================================= */

(function () {
  'use strict';

  let currentPhotoDataUrl = 'https://placehold.co/300x400?text=Foto+3x4';
  let activeParentMode = 'ortu'; // 'ortu' atau 'wali'
  let currentRegistration = null;

  document.addEventListener('DOMContentLoaded', () => {
    initPhotoUpload();
    initParentToggle();
    initFormValidationAndModal();
  });

  /* ──────────────────────────────────────────────────────────
     1. PHOTO UPLOAD & PREVIEW
     ────────────────────────────────────────────────────────── */
  function initPhotoUpload() {
    const photoInput = document.getElementById('foto_siswa');
    const photoPreviewBox = document.getElementById('photo-preview-box');
    const photoPreviewImg = document.getElementById('photo-preview-img');

    if (!photoInput) return;

    photoInput.addEventListener('change', (e) => {
      const file = e.target.files[0];
      if (!file) return;

      // Validate File Type
      const validTypes = ['image/jpeg', 'image/jpg', 'image/png'];
      if (!validTypes.includes(file.type)) {
        alert('Format file harus JPG, JPEG, atau PNG!');
        photoInput.value = '';
        return;
      }

      // Validate File Size (Max 2MB)
      const maxSize = 2 * 1024 * 1024;
      if (file.size > maxSize) {
        alert('Ukuran file foto maksimal 2MB!');
        photoInput.value = '';
        return;
      }

      // Read and Preview
      const reader = new FileReader();
      reader.onload = (event) => {
        currentPhotoDataUrl = event.target.result;
        if (photoPreviewImg) {
          photoPreviewImg.src = currentPhotoDataUrl;
        }
        if (photoPreviewBox) {
          photoPreviewBox.classList.add('has-image');
        }
      };
      reader.readAsDataURL(file);
    });
  }

  /* ──────────────────────────────────────────────────────────
     2. TOGGLE CENTANG: SAYA TINGGAL BERSAMA ORANG TUA / WALI
     ────────────────────────────────────────────────────────── */
  function initParentToggle() {
    const radioOrtu = document.getElementById('tinggal_ortu');
    const radioWali = document.getElementById('tinggal_wali');
    const subcardOrtu = document.getElementById('subcard-ortu');
    const subcardWali = document.getElementById('subcard-wali');

    if (!radioOrtu || !radioWali) return;

    function applyStaySelection(mode) {
      activeParentMode = mode;

      const labelOrtu = radioOrtu.closest('.custom-stay-check');
      const labelWali = radioWali.closest('.custom-stay-check');

      if (mode === 'ortu') {
        radioOrtu.checked = true;
        radioWali.checked = false;

        if (labelOrtu) labelOrtu.classList.add('is-active-stay');
        if (labelWali) labelWali.classList.remove('is-active-stay');

        // Active state for Ortu subcard
        if (subcardOrtu) {
          subcardOrtu.classList.add('is-active-card');
          subcardOrtu.classList.remove('is-disabled-card');
          subcardOrtu.querySelectorAll('.parent-fields-group input, .parent-fields-group textarea, .parent-fields-group select').forEach(el => {
            el.disabled = false;
          });
        }

        // Disabled / grayed out state for Wali subcard
        if (subcardWali) {
          subcardWali.classList.add('is-disabled-card');
          subcardWali.classList.remove('is-active-card');
          subcardWali.querySelectorAll('.parent-fields-group input, .parent-fields-group textarea, .parent-fields-group select').forEach(el => {
            el.disabled = true;
          });
        }
      } else {
        radioWali.checked = true;
        radioOrtu.checked = false;

        if (labelWali) labelWali.classList.add('is-active-stay');
        if (labelOrtu) labelOrtu.classList.remove('is-active-stay');

        // Active state for Wali subcard
        if (subcardWali) {
          subcardWali.classList.add('is-active-card');
          subcardWali.classList.remove('is-disabled-card');
          subcardWali.querySelectorAll('.parent-fields-group input, .parent-fields-group textarea, .parent-fields-group select').forEach(el => {
            el.disabled = false;
          });
        }

        // Disabled / grayed out state for Ortu subcard
        if (subcardOrtu) {
          subcardOrtu.classList.add('is-disabled-card');
          subcardOrtu.classList.remove('is-active-card');
          subcardOrtu.querySelectorAll('.parent-fields-group input, .parent-fields-group textarea, .parent-fields-group select').forEach(el => {
            el.disabled = true;
          });
        }
      }
    }

    radioOrtu.addEventListener('change', () => {
      if (radioOrtu.checked) applyStaySelection('ortu');
    });

    radioWali.addEventListener('change', () => {
      if (radioWali.checked) applyStaySelection('wali');
    });

    // Default init: Orang Tua aktif, Wali abu-abu
    applyStaySelection('ortu');
  }

  /* ──────────────────────────────────────────────────────────
     3. FORM VALIDATION & POPULATE MODAL PREVIEW
     ────────────────────────────────────────────────────────── */
  function initFormValidationAndModal() {
    const form = document.getElementById('form-ppdb-main');
    const modal = document.getElementById('modalPreviewFormulir');
    const btnCloseModal = document.getElementById('btn-close-modal');
    const btnPrintModal = document.getElementById('btn-print-modal');

    if (!form || !modal) return;

    const validateRestrictedFields = initRestrictedFieldValidation(form);

    form.addEventListener('submit', (e) => {
      e.preventDefault();

      validateRestrictedFields(true);

      // Check form validity
      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }

      // Check if photo uploaded
      const photoInput = document.getElementById('foto_siswa');
      if (!photoInput.files || photoInput.files.length === 0) {
        if (!confirm('Anda belum mengunggah pas foto. Lanjutkan dengan foto placeholder?')) {
          photoInput.focus();
          return;
        }
      }

      currentRegistration = getPreviewRegistration(form);
      populateModal(currentRegistration);
      openPreview();
    });

    if (btnCloseModal) {
      btnCloseModal.addEventListener('click', closeModal);
    }

    if (btnPrintModal) {
      btnPrintModal.addEventListener('click', () => {
        cetakFormulirPDF();
      });
    }

    // Escape key to close
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && modal.style.display === 'flex') {
        closeModal();
      }
    });
  }

  /* ──────────────────────────────────────────────────────────
     3a. VALIDASI INPUT UTAMA PPDB
     ────────────────────────────────────────────────────────── */
  function initRestrictedFieldValidation(form) {
    const nameFields = form.querySelectorAll('[name="nama_lengkap"], [name="nama_ayah"], [name="nama_ibu"], [name="nama_wali"]');
    const nikField = form.querySelector('[name="nik"]');
    const nisnField = form.querySelector('[name="nisn"]');
    const birthPlaceField = form.querySelector('[name="tempat_lahir"]');
    const emailField = form.querySelector('[name="email"]');
    const phoneField = form.querySelector('[name="no_hp"]');
    const phoneOrtuField = form.querySelector('[name="no_hp_ortu"]');
    const phoneWaliField = form.querySelector('[name="no_hp_wali"]');
    const jobFields = form.querySelectorAll('[name="pekerjaan_ayah"], [name="pekerjaan_ibu"], [name="pekerjaan_wali"]');
    const namePattern = /^[A-Za-zÀ-ÿ\s.']+$/;
    const lettersPattern = /^[A-Za-zÀ-ÿ\s]+$/;

    function feedbackFor(field) {
      let feedback = field.parentElement.querySelector('.field-validation-message');
      if (!feedback) {
        feedback = document.createElement('div');
        feedback.className = 'field-validation-message';
        feedback.setAttribute('role', 'alert');
        feedback.hidden = true;
        field.insertAdjacentElement('afterend', feedback);
      }
      return feedback;
    }

    function setFieldState(field, message, showEmptyMessage) {
      const feedback = feedbackFor(field);
      const value = field.value.trim();
      const shouldShow = Boolean(message) && (Boolean(value) || showEmptyMessage);
      field.setCustomValidity(shouldShow ? message : '');
      field.classList.toggle('is-invalid', shouldShow);
      field.setAttribute('aria-invalid', String(shouldShow));
      feedback.textContent = shouldShow ? message : '';
      feedback.hidden = !shouldShow;
      return !shouldShow;
    }

    function validateNames(showEmptyMessage) {
      nameFields.forEach((field) => {
        if (field.disabled) return setFieldState(field, '', false);
        const value = field.value.trim();
        const message = value && !namePattern.test(value)
          ? 'Nama hanya boleh berisi huruf, spasi, titik (.) dan tanda petik satu (\').'
          : (!value && field.required ? 'Nama wajib diisi.' : '');
        setFieldState(field, message, showEmptyMessage);
      });
    }

    function validateNik(showEmptyMessage) {
      if (!nikField) return;
      const value = nikField.value;
      const message = value && !/^\d{16}$/.test(value)
        ? 'NIK harus terdiri dari tepat 16 angka.'
        : (!value ? 'NIK wajib diisi.' : '');
      setFieldState(nikField, message, showEmptyMessage);
    }

    function validateNisn(showEmptyMessage) {
      if (!nisnField) return;
      const value = nisnField.value;
      // Opsional — hanya validasi jika ada isian
      const message = value && !/^\d{10}$/.test(value)
        ? 'NISN harus terdiri dari tepat 10 angka.'
        : '';
      setFieldState(nisnField, message, showEmptyMessage);
    }

    function validateBirthPlace(showEmptyMessage) {
      if (!birthPlaceField) return;
      const value = birthPlaceField.value.trim();
      const message = value && !lettersPattern.test(value)
        ? 'Tempat lahir hanya boleh berisi huruf dan spasi.'
        : (!value ? 'Tempat lahir wajib diisi.' : '');
      setFieldState(birthPlaceField, message, showEmptyMessage);
    }

    function validateEmail(showEmptyMessage) {
      if (!emailField) return;
      const value = emailField.value.trim();
      const message = value && !/^[^\s@]+@gmail\.com$/i.test(value)
        ? 'Gunakan alamat email dengan domain @gmail.com.'
        : (!value ? 'Alamat email wajib diisi.' : '');
      setFieldState(emailField, message, showEmptyMessage);
    }

    function validatePhone(showEmptyMessage) {
      if (!phoneField) return;
      const value = phoneField.value;
      const message = value && !/^08\d{8,11}$/.test(value)
        ? 'Nomor HP harus diawali 08 dan berisi 10 sampai 13 angka.'
        : (!value ? 'Nomor HP wajib diisi.' : '');
      setFieldState(phoneField, message, showEmptyMessage);
    }

    function validatePhoneOrtu(showEmptyMessage) {
      if (!phoneOrtuField) return;
      const value = phoneOrtuField.value;
      const message = value && !/^08\d{8,11}$/.test(value)
        ? 'Nomor HP orang tua harus diawali 08 dan berisi 10 sampai 13 angka.'
        : (!value ? 'Nomor HP orang tua wajib diisi.' : '');
      setFieldState(phoneOrtuField, message, showEmptyMessage);
    }

    function validatePhoneWali(showEmptyMessage) {
      if (!phoneWaliField || phoneWaliField.disabled) return;
      const value = phoneWaliField.value;
      const message = value && !/^08\d{8,11}$/.test(value)
        ? 'Nomor HP wali harus diawali 08 dan berisi 10 sampai 13 angka.'
        : (!value ? 'Nomor HP wali wajib diisi.' : '');
      setFieldState(phoneWaliField, message, showEmptyMessage);
    }

    function validateJobs(showEmptyMessage) {
      jobFields.forEach((field) => {
        if (field.disabled) return setFieldState(field, '', false);
        const value = field.value.trim();
        const message = value && !lettersPattern.test(value)
          ? 'Pekerjaan hanya boleh berisi huruf dan spasi.'
          : (!value && field.required ? 'Pekerjaan wajib diisi.' : '');
        setFieldState(field, message, showEmptyMessage);
      });
    }

    nameFields.forEach((field) => {
      let isComposing = false;

      field.addEventListener('compositionstart', () => {
        isComposing = true;
      });

      field.addEventListener('compositionend', () => {
        isComposing = false;
        sanitizeNameInput(field);
        validateNames(false);
      });

      function sanitizeNameInput(el) {
        const raw = el.value;
        const start = el.selectionStart;
        // Bersihkan karakter selain huruf abjad, spasi, titik, dan petik satu, ubah ke UPPERCASE
        const cleaned = raw.replace(/[^A-Za-zÀ-ÿ\s.']/g, '').toUpperCase();
        if (raw !== cleaned) {
          el.value = cleaned;
          try {
            const diff = raw.length - cleaned.length;
            const newCursor = Math.max(0, start - (diff > 0 ? diff : 0));
            el.setSelectionRange(newCursor, newCursor);
          } catch (err) {}
        }
      }

      field.addEventListener('input', (e) => {
        if (isComposing || (e && e.isComposing)) {
          validateNames(false);
          return;
        }
        sanitizeNameInput(field);
        validateNames(false);
      });

      field.addEventListener('blur', () => {
        field.value = field.value.replace(/[^A-Za-zÀ-ÿ\s.']/g, '').toUpperCase().trim();
        validateNames(true);
      });
    });


    if (nikField) {
      nikField.addEventListener('input', () => {
        nikField.value = nikField.value.replace(/\D/g, '').slice(0, 16);
        validateNik(false);
      });
      nikField.addEventListener('blur', () => validateNik(true));
    }

    if (nisnField) {
      nisnField.addEventListener('input', () => {
        nisnField.value = nisnField.value.replace(/\D/g, '').slice(0, 10);
        validateNisn(false);
      });
      nisnField.addEventListener('blur', () => validateNisn(false));
    }

    if (birthPlaceField) {
      birthPlaceField.addEventListener('input', () => {
        const raw = birthPlaceField.value;
        const cleaned = raw.replace(/[^A-Za-zÀ-ÿ\s]/g, '');
        if (raw !== cleaned) {
          birthPlaceField.value = cleaned;
        }
        validateBirthPlace(false);
      });
      birthPlaceField.addEventListener('blur', () => validateBirthPlace(true));
    }

    if (emailField) {
      emailField.addEventListener('input', () => validateEmail(false));
      emailField.addEventListener('blur', () => validateEmail(true));
    }

    if (phoneField) {
      phoneField.addEventListener('input', () => {
        phoneField.value = phoneField.value.replace(/\D/g, '').slice(0, 13);
        validatePhone(false);
      });
      phoneField.addEventListener('blur', () => validatePhone(true));
    }

    if (phoneOrtuField) {
      phoneOrtuField.addEventListener('input', () => {
        phoneOrtuField.value = phoneOrtuField.value.replace(/\D/g, '').slice(0, 13);
        validatePhoneOrtu(false);
      });
      phoneOrtuField.addEventListener('blur', () => validatePhoneOrtu(true));
    }

    if (phoneWaliField) {
      phoneWaliField.addEventListener('input', () => {
        phoneWaliField.value = phoneWaliField.value.replace(/\D/g, '').slice(0, 13);
        validatePhoneWali(false);
      });
      phoneWaliField.addEventListener('blur', () => validatePhoneWali(true));
    }

    jobFields.forEach((field) => {
      field.addEventListener('input', () => {
        field.value = field.value.replace(/[^A-Za-zÀ-ÿ\s]/g, '');
        validateJobs(false);
      });
      field.addEventListener('blur', () => validateJobs(true));
    });

    return function validateAll(showEmptyMessage) {
      validateNames(showEmptyMessage);
      validateNik(showEmptyMessage);
      validateNisn(false); // opsional, tidak paksa saat kosong
      validateBirthPlace(showEmptyMessage);
      validateEmail(showEmptyMessage);
      validatePhone(showEmptyMessage);
      validatePhoneOrtu(showEmptyMessage);
      validatePhoneWali(showEmptyMessage);
      validateJobs(showEmptyMessage);
    };
  }

  function closeModal() {
    const modal = document.getElementById('modalPreviewFormulir');
    if (modal) {
      modal.classList.remove('active');
      modal.style.display = 'none';
      document.body.style.overflow = '';
    }
  }

  function openPreview() {
    const modal = document.getElementById('modalPreviewFormulir');
    if (!modal) return;

    // Letakkan modal langsung di body agar tidak terperangkap stacking context
    // (transform/filter/overflow) dari section formulir atau footer.
    if (modal.parentElement !== document.body) {
      document.body.appendChild(modal);
    }

    const content = modal.querySelector('.modal-preview-content');
    modal.style.setProperty('display', 'flex', 'important');
    modal.style.setProperty('z-index', '9998', 'important');
    modal.style.setProperty('opacity', '1', 'important');
    modal.style.setProperty('visibility', 'visible', 'important');

    if (content) {
      content.style.setProperty('display', 'flex', 'important');
      content.style.setProperty('position', 'relative', 'important');
      content.style.setProperty('z-index', '10000', 'important');
      content.style.setProperty('opacity', '1', 'important');
      content.style.setProperty('visibility', 'visible', 'important');
      content.style.setProperty('background-color', '#ffffff', 'important');
    }

    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function getValue(name) {
    const el = document.querySelector(`[name="${name}"]`);
    return el ? (el.value.trim() || '-') : '-';
  }

  function getSelectedText(name) {
    const el = document.querySelector(`[name="${name}"]`);
    if (!el || el.selectedIndex === -1) return '-';
    return el.options[el.selectedIndex].text || '-';
  }

  function getPreviewRegistration(form) {
    const now = new Date();
    const dateKey = [now.getFullYear(), String(now.getMonth() + 1).padStart(2, '0'), String(now.getDate()).padStart(2, '0')].join('');
    const registrationDate = now.toLocaleDateString('id-ID', {
      day: 'numeric',
      month: 'long',
      year: 'numeric'
    });
    const nik = (form.querySelector('[name="nik"]') || {}).value.trim();
    const storageKey = `ppdb_preview_registration_${dateKey}_${nik}`;
    const counterKey = `ppdb_preview_daily_counter_${dateKey}`;

    try {
      const saved = localStorage.getItem(storageKey);
      if (saved) return JSON.parse(saved);

      const nextNumber = Number.parseInt(localStorage.getItem(counterKey) || '0', 10) + 1;
      const registration = {
        no_registrasi: `REG-${dateKey}-${String(nextNumber).padStart(3, '0')}`,
        tanggal_pendaftaran: registrationDate
      };
      localStorage.setItem(counterKey, String(nextNumber));
      localStorage.setItem(storageKey, JSON.stringify(registration));
      return registration;
    } catch (_) {
      /* Jika storage browser tidak tersedia, nomor tetap dapat ditampilkan
         selama halaman ini belum dimuat ulang. */
      return currentRegistration || {
        no_registrasi: `REG-${dateKey}-001`,
        tanggal_pendaftaran: registrationDate
      };
    }
  }

  function populateModal(registration) {
    // 1. Tanggal & No Reg
    setText('doc-reg-num', registration.no_registrasi);
    setText('doc-reg-date', registration.tanggal_pendaftaran);
    setText('doc-sign-date', registration.tanggal_pendaftaran);

    // 2. Foto Siswa
    const docPhoto = document.getElementById('doc-photo-img');
    if (docPhoto) {
      docPhoto.src = currentPhotoDataUrl;
    }

    // 3. Jalur & Jurusan
    setText('doc-jalur', getSelectedText('jalur_pendaftaran'));
    setText('doc-jurusan', getSelectedText('jurusan_pilihan'));

    // 4. Data Siswa
    const namaSiswa = getValue('nama_lengkap');
    setText('doc-nama', namaSiswa);
    setText('doc-sign-student', namaSiswa);
    setText('doc-nisn', getValue('nisn'));
    setText('doc-nik', getValue('nik'));
    
    const tempatLahir = getValue('tempat_lahir');
    const tglLahir = getValue('tanggal_lahir');
    setText('doc-ttl', `${tempatLahir}, ${tglLahir}`);
    
    setText('doc-jk', getSelectedText('jenis_kelamin'));
    setText('doc-agama', getSelectedText('agama'));
    setText('doc-alamat', getValue('alamat_lengkap'));
    setText('doc-kontak', `${getValue('no_hp')} / ${getValue('email')}`);
    setText('doc-asal-sekolah', `${getValue('asal_sekolah')} (${getValue('tahun_lulus')})`);

    // 5. Data Orang Tua / Wali
    const rowOrtu1 = document.getElementById('doc-row-ayah');
    const rowOrtu2 = document.getElementById('doc-row-ibu');
    const rowOrtu3 = document.getElementById('doc-row-kontak-ortu');
    const rowOrtu4 = document.getElementById('doc-row-alamat-ortu');
    const rowWali1 = document.getElementById('doc-row-wali');
    const rowWali2 = document.getElementById('doc-row-kontak-wali');
    const rowWali3 = document.getElementById('doc-row-alamat-wali');

    if (activeParentMode === 'ortu') {
      if (rowOrtu1) rowOrtu1.style.display = '';
      if (rowOrtu2) rowOrtu2.style.display = '';
      if (rowOrtu3) rowOrtu3.style.display = '';
      if (rowOrtu4) rowOrtu4.style.display = '';
      if (rowWali1) rowWali1.style.display = 'none';
      if (rowWali2) rowWali2.style.display = 'none';
      if (rowWali3) rowWali3.style.display = 'none';

      setText('doc-ayah', `${getValue('nama_ayah')} (${getValue('pekerjaan_ayah')})`);
      setText('doc-ibu', `${getValue('nama_ibu')} (${getValue('pekerjaan_ibu')})`);
      setText('doc-kontak-ortu', getValue('no_hp_ortu'));
      setText('doc-alamat-ortu', getValue('alamat_ortu'));
      setText('doc-sign-parent-label', 'Orang Tua Siswa');
    } else {
      if (rowOrtu1) rowOrtu1.style.display = 'none';
      if (rowOrtu2) rowOrtu2.style.display = 'none';
      if (rowOrtu3) rowOrtu3.style.display = 'none';
      if (rowOrtu4) rowOrtu4.style.display = 'none';
      if (rowWali1) rowWali1.style.display = '';
      if (rowWali2) rowWali2.style.display = '';
      if (rowWali3) rowWali3.style.display = '';

      setText('doc-wali', `${getValue('nama_wali')} (${getValue('pekerjaan_wali')}) - Hubungan: ${getSelectedText('hubungan_wali')}`);
      setText('doc-kontak-wali', getValue('no_hp_wali'));
      setText('doc-alamat-wali', getValue('alamat_wali'));
      setText('doc-sign-parent-label', 'Wali Calon Siswa');
    }

    // 6. Riwayat & Lain-lain
    setText('doc-kesehatan', getValue('riwayat_kesehatan'));
    setText('doc-prestasi', getValue('prestasi_organisasi'));
    setOptionalSelectedText('doc-seragam', 'ukuran_seragam', '(tidak dipilih)');
  }

  function setText(id, value) {
    const el = document.getElementById(id);
    if (el) {
      el.textContent = value || '-';
    }
  }

  function setOptionalSelectedText(id, name, emptyLabel) {
    const target = document.getElementById(id);
    const select = document.querySelector(`[name="${name}"]`);
    if (!target) return;

    if (!select || !select.value) {
      target.textContent = emptyLabel;
      target.classList.add('doc-optional-empty');
      return;
    }

    target.textContent = select.options[select.selectedIndex].text || '-';
    target.classList.remove('doc-optional-empty');
  }

  // ─── FUNGSI CETAK PDF DENGAN html2pdf.js ────────────────────
  function cetakFormulirPDF() {
    const formulirAsli = document.getElementById('formulirCetak');
    if (!formulirAsli) {
      alert('Elemen formulir cetak tidak ditemukan!');
      return;
    }

    window.print();
  }

  // Global functions dipakai oleh tombol HTML dan klik overlay modal.
  window.closePpdbModal = closeModal;
  window.closePreview = closeModal;
  window.downloadPDF = cetakFormulirPDF;

})();
