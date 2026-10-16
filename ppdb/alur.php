<?php
require_once __DIR__ . '/../koneksi.php';

// URL lama tetap diarahkan agar tautan yang pernah dibagikan tidak rusak.
header('Location: ' . BASE_URL . 'ppdb/informasi.php', true, 302);
exit;
