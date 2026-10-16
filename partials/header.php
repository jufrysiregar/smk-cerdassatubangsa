<?php
// Pastikan koneksi.php & BASE_URL selalu tersedia
require_once dirname(__DIR__) . '/koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($page_title) ? $page_title . " – SMK Cerdas Satu Bangsa" : "SMK Cerdas Satu Bangsa – Official Website"; ?></title>
  <meta name="description" content="Website Resmi SMK Cerdas Satu Bangsa – Sekolah Kejuruan Unggul, Berkarakter & Berprestasi.">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?= BASE_URL ?>assets/img/logo/logo.png">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome 6 Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- AOS – Animate on Scroll -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
  <!-- Google Fonts (Poppins & Inter) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- Custom CSS Utama -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>
<body>
