<?php
// api/index.php — Vercel Serverless Function Bridge & Router
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$base_dir = dirname(__DIR__);
chdir($base_dir);

// Parse request path
$uri  = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$path = trim($uri, '/');

// 1. Root / index
if ($path === '' || $path === 'index.php') {
    require $base_dir . '/index.php';
    exit;
}

// 2. Cegah directory traversal
$clean_path = str_replace(['..', "\0"], '', $path);
$target_file = $base_dir . '/' . $clean_path;

// 3. Cek jika file .php langsung ada (misal: /profil/sejarah.php atau /berita.php)
if (is_file($target_file) && pathinfo($target_file, PATHINFO_EXTENSION) === 'php') {
    require $target_file;
    exit;
}

// 4. Cek jika URL tanpa ekstensi .php (misal: /kontak -> /kontak.php)
if (is_file($target_file . '.php')) {
    require $target_file . '.php';
    exit;
}

// 5. Fallback ke index.php
if (is_file($base_dir . '/index.php')) {
    require $base_dir . '/index.php';
    exit;
}

http_response_code(404);
echo "404 - Halaman Tidak Ditemukan";
