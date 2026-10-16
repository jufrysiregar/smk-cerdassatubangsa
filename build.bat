@echo off
setlocal

:: Cari path PHP dari Laragon atau XAMPP atau PATH sistem
set "PHP_CMD=php"

where php >nul 2>&1
if %ERRORLEVEL% equ 0 goto RUN

if exist "C:\laragon\bin\php\php-8.3.30-Win32-vs16-x64\php.exe" (
    set "PHP_CMD=C:\laragon\bin\php\php-8.3.30-Win32-vs16-x64\php.exe"
    goto RUN
)

for /d %%D in (C:\laragon\bin\php\php-*) do (
    if exist "%%D\php.exe" (
        set "PHP_CMD=%%D\php.exe"
        goto RUN
    )
)

if exist "C:\xampp\php\php.exe" (
    set "PHP_CMD=C:\xampp\php\php.exe"
    goto RUN
)

echo [ERROR] PHP tidak ditemukan di sistem, Laragon, maupun XAMPP!
pause
exit /b 1

:RUN
"%PHP_CMD%" build.php
pause
