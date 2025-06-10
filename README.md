<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<h1 align="center">Bengkel Online</h1>

<p align="center">
Aplikasi Laravel untuk mencari, menilai, dan menghubungi bengkel terdekat secara online.
</p>

---

## Tentang Proyek

**Bengkel Online** adalah aplikasi berbasis Laravel yang memungkinkan pengguna untuk:

-   Menemukan bengkel terdekat
-   Melihat dan memberikan ulasan
-   Mengirim pesan ke bengkel
-   Melihat layanan yang tersedia

---

## Fitur Laravel

-   Routing yang cepat dan sederhana
-   ORM Eloquent untuk database
-   Sistem migrasi dan seeder
-   Autentikasi dan otorisasi
-   Queue dan broadcasting

---

## Instalasi

```bash
git clone https://github.com/Daalleee/bengkel-online.git
cd bengkel-online
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```
