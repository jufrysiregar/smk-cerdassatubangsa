# build.ps1 - PowerShell shortcut untuk build.php

$phpPath = $null

if (Get-Command php -ErrorAction SilentlyContinue) {
    $phpPath = "php"
} elseif (Test-Path "C:\laragon\bin\php\php-8.3.30-Win32-vs16-x64\php.exe") {
    $phpPath = "C:\laragon\bin\php\php-8.3.30-Win32-vs16-x64\php.exe"
} else {
    $found = Get-ChildItem "C:\laragon\bin\php" -Filter "php.exe" -Recurse -ErrorAction SilentlyContinue | Select-Object -First 1
    if ($found) {
        $phpPath = $found.FullName
    } elseif (Test-Path "C:\xampp\php\php.exe") {
        $phpPath = "C:\xampp\php\php.exe"
    }
}

if (-not $phpPath) {
    Write-Host "[ERROR] PHP tidak ditemukan di sistem, Laragon, maupun XAMPP." -ForegroundColor Red
    exit 1
}

Write-Host "Menggunakan PHP: $phpPath" -ForegroundColor Cyan
& $phpPath build.php
