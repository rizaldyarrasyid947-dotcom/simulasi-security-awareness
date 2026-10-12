# Simulasi Security Awareness

Aplikasi web simulasi phishing yang dikembangkan untuk tujuan edukasi dan meningkatkan kesadaran terhadap keamanan digital.

## Fitur

* Simulasi phishing untuk edukasi keamanan digital.
* Alur simulasi berbasis web.
* Pengelolaan data hasil simulasi menggunakan database.

## Teknologi

* PHP
* Laravel
* Database

## Cara Menjalankan

1. Clone atau unduh repository ini.
2. Jalankan `composer install`.
3. Salin `.env.example` menjadi `.env`.
4. Sesuaikan konfigurasi database pada file `.env`.
5. Jalankan `php artisan key:generate`.
6. Jalankan migrasi database jika tersedia dengan `php artisan migrate`.
7. Jalankan aplikasi menggunakan `php artisan serve`.

## Tujuan Proyek

Proyek ini dibuat sebagai sarana pembelajaran pengembangan aplikasi web dan edukasi keamanan digital.

## Catatan Keamanan

Aplikasi ditujukan untuk edukasi dan pengujian yang telah mendapat izin. Jangan gunakan untuk mengumpulkan kata sandi asli atau melakukan phishing terhadap pihak tanpa persetujuan.
