<?php
// koneksi.php - Database connection & Global Configuration

// 1. Definisikan BASE_URL Absolut
if (!defined('BASE_URL')) {
    $is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
                || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');
    $scheme = $is_https ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    
    // Deteksi subfolder website-utama jika di localhost Laragon/XAMPP
    $script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
    $pos = strpos($script_dir, '/website-utama');
    
    if ($pos !== false) {
        $path = substr($script_dir, 0, $pos + strlen('/website-utama')) . '/';
        define('BASE_URL', $scheme . $host . $path);
    } elseif (strpos($_SERVER['REQUEST_URI'] ?? '', '/sekolah-management/website-utama') !== false) {
        define('BASE_URL', 'http://localhost/sekolah-management/website-utama/');
    } else {
        define('BASE_URL', $scheme . $host . '/');
    }
}

// Global helper variable
$base_url = BASE_URL;

// 2. Database Connection
$is_vercel = !empty($_SERVER['VERCEL']) 
          || !empty($_ENV['VERCEL']) 
          || (isset($_SERVER['HTTP_HOST']) && strpos($_SERVER['HTTP_HOST'], 'vercel.app') !== false);

$host_db = getenv('DB_HOST') ?: "localhost";
$user_db = getenv('DB_USER') ?: "root";
$pass_db = getenv('DB_PASS') !== false ? getenv('DB_PASS') : "";
$name_db = getenv('DB_NAME') ?: "sekolah_db";
$port_db = getenv('DB_PORT') ? (int)getenv('DB_PORT') : 3306;

if (function_exists('mysqli_report')) {
    mysqli_report(MYSQLI_REPORT_OFF);
}

// Di Vercel serverless, jika belum ada DB_HOST cloud, lewati koneksi agar tidak timeout
if ($is_vercel && ($host_db === 'localhost' || $host_db === '127.0.0.1')) {
    $conn = false;
    $db_connected = false;
    $db_error = "Database localhost tidak tersedia di environment serverless Vercel.";
} elseif (function_exists('mysqli_init')) {
    $conn = mysqli_init();
    if ($conn) {
        mysqli_options($conn, MYSQLI_OPT_CONNECT_TIMEOUT, 3);
        $connected = @mysqli_real_connect($conn, $host_db, $user_db, $pass_db, $name_db, $port_db);
        if (!$connected) {
            $conn = false;
            $db_connected = false;
            $db_error = mysqli_connect_error();
        } else {
            $db_connected = true;
            mysqli_set_charset($conn, "utf8mb4");
        }
    } else {
        $conn = false;
        $db_connected = false;
        $db_error = "Gagal inisialisasi mysqli";
    }
} else {
    $conn = false;
    $db_connected = false;
    $db_error = "Ekstensi mysqli tidak tersedia";
}

// Function helper for safe query execution
function query_db($sql) {
    global $conn, $db_connected;
    if (!$db_connected || !$conn) return false;
    $result = @mysqli_query($conn, $sql);
    if (!$result) return false;
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}
?>
