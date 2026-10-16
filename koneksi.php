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
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$name_db = "sekolah_db";

mysqli_report(MYSQLI_REPORT_OFF);

$conn = @mysqli_connect($host_db, $user_db, $pass_db, $name_db);

if (!$conn) {
    $db_connected = false;
    $db_error = mysqli_connect_error();
} else {
    $db_connected = true;
    mysqli_set_charset($conn, "utf8mb4");
}

// Function helper for safe query execution
function query_db($sql) {
    global $conn, $db_connected;
    if (!$db_connected) return false;
    $result = @mysqli_query($conn, $sql);
    if (!$result) return false;
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}
?>
