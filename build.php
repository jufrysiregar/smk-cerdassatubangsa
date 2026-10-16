<?php
/**
 * build.php - Static Site Generator untuk Vercel
 * Men-generate file .html dari setiap file .php agar dapat di-deploy
 * sebagai Static Site di Vercel dengan performa maksimal dan bebas error 500.
 */

$rootDir = __DIR__;

$pages = [
    'index.php' => 'index.html',
    'berita.php' => 'berita.html',
    'berita-detail.php' => 'berita-detail.html',
    'galeri.php' => 'galeri.html',
    'kontak.php' => 'kontak.html',
    'profil/sejarah.php' => 'profil/sejarah.html',
    'profil/visi-misi.php' => 'profil/visi-misi.html',
    'profil/struktur.php' => 'profil/struktur.html',
    'profil/fasilitas.php' => 'profil/fasilitas.html',
    'profil/sertifikasi.php' => 'profil/sertifikasi.html',
    'program/tkj.php' => 'program/tkj.html',
    'program/rpl.php' => 'program/rpl.html',
    'program/dkv.php' => 'program/dkv.html',
    'program/tav.php' => 'program/tav.html',
    'ppdb/informasi.php' => 'ppdb/informasi.html',
    'ppdb/alur.php' => 'ppdb/alur.html',
    'ppdb/formulir.php' => 'ppdb/formulir.html',
    'ppdb/pengumuman.php' => 'ppdb/pengumuman.html',
    'alumni/alumni.php' => 'alumni/alumni.html',
    'alumni/karir.php' => 'alumni/karir.html',
];

echo "=== Memulai Build Static HTML untuk Vercel ===\n\n";

$phpBinary = PHP_BINARY;
if (!is_executable($phpBinary) || strpos($phpBinary, 'php') === false) {
    // Fallback path Laragon jika CLI dipanggil dari wrapper
    $laragonPhp = 'C:\\laragon\\bin\\php\\php-8.3.30-Win32-vs16-x64\\php.exe';
    if (file_exists($laragonPhp)) {
        $phpBinary = $laragonPhp;
    }
}

foreach ($pages as $src => $dest) {
    $srcPath = $rootDir . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $src);
    $destPath = $rootDir . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $dest);

    if (!file_exists($srcPath)) {
        echo "[SKIP] File sumber tidak ditemukan: $src\n";
        continue;
    }

    $destDir = dirname($destPath);
    if (!is_dir($destDir)) {
        mkdir($destDir, 0755, true);
    }

    // Jalankan PHP pada sub-proses agar env dan variabel terisolasi per halaman
    $runner = "<?php "
            . "define('BASE_URL', '/'); "
            . "\$_SERVER['HTTP_HOST'] = 'smk-cerdassatubangsa.vercel.app'; "
            . "\$_SERVER['HTTPS'] = 'on'; "
            . "\$_SERVER['REQUEST_URI'] = '/" . $src . "'; "
            . "chdir(" . var_export(dirname($srcPath), true) . "); "
            . "require " . var_export($srcPath, true) . ";";

    $descriptorSpec = [
        0 => ["pipe", "r"],
        1 => ["pipe", "w"],
        2 => ["pipe", "w"]
    ];

    $process = proc_open("\"$phpBinary\"", $descriptorSpec, $pipes, dirname($srcPath));

    if (is_resource($process)) {
        fwrite($pipes[0], $runner);
        fclose($pipes[0]);

        $html = stream_get_contents($pipes[1]);
        fclose($pipes[1]);

        $errors = stream_get_contents($pipes[2]);
        fclose($pipes[2]);

        proc_close($process);

        if (empty($html) && $src === 'ppdb/alur.php') {
            $html = '<!DOCTYPE html><html><head><meta http-equiv="refresh" content="0; url=informasi.html"><script>window.location.href="informasi.html";</script></head><body>Redirecting to <a href="informasi.html">Informasi PPDB</a>...</body></html>';
        }

        if (!empty($html)) {
            // Ubah link .php menjadi .html di dalam atribut href agar navigasi statis mulus
            $html = preg_replace('/href="([^"#:\?]+)\.php([?#"][^"]*)?"/i', 'href="$1.html$2"', $html);

            file_put_contents($destPath, $html);
            $size = round(strlen($html) / 1024, 1);
            echo "[OK] Generated: $dest ($size KB)\n";
        } else {
            echo "[ERROR] Gagal generate $dest: $errors\n";
        }
    }
}

echo "\n=== Build Selesai Berhasil! ===\n";
