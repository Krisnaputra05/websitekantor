# Website Kantor

Repository ini adalah sebuah aplikasi web berbasis Laravel (skeleton) yang sudah dikustomisasi untuk kebutuhan website kantor/media informasi. README ini memberi panduan cepat instalasi, pengembangan, dan build pada lingkungan pengembangan (Windows PowerShell).

## Ringkasan teknis

-   Framework: Laravel ^11
-   PHP: ^8.2
-   Database default repo: SQLite (file: `database/database.sqlite`) — migrasi tersedia di `database/migrations`
-   Frontend: Vite, TailwindCSS, React (opsional), AOS, Swiper
-   Dependensi penting (composer): `consoletvs/charts`, `laravel/tinker`
-   Dev tools: `barryvdh/laravel-debugbar`, `phpunit/phpunit`, `nunomaduro/collision`, `laravel/pint`

Model utama di `app/Models`:

-   `Article` — konten artikel, terdapat migration & seeder
-   `Category` — kategori artikel
-   `Consultation` — (model konsultasi)
-   `Contact` — (model kontak masuk)
-   `User` — user aplikasi

Seeder utama: `Database\Seeders\DatabaseSeeder` memanggil `UserSeeder`, `CategorySeeder`, `ArticleSeeder` (urutan seed sudah diatur).

## Persyaratan sistem

-   PHP 8.2+
-   Composer
-   Node.js 18+ dan npm
-   Git (opsional)
-   PowerShell (instruksi contoh ada untuk PowerShell)

## Instalasi (PowerShell)

1. Clone repository dan masuk ke folder proyek:

```powershell
git clone <repo-url> .
cd c:\laragon\www\websitekantor
```

2. Install dependency backend dan frontend:

```powershell
composer install
npm install
```

3. Siapkan environment:

```powershell
copy .env.example .env
# Buat APP_KEY
php artisan key:generate
```

4. (Jika belum ada) buat file SQLite (opsional) — contoh PowerShell:

```powershell
if (-not (Test-Path -Path "database\database.sqlite")) { New-Item -Path "database\database.sqlite" -ItemType File }
```

5. Migrasi dan seeder (jalankan di PowerShell):

```powershell
php artisan migrate --graceful
php artisan db:seed
```

Catatan: `DatabaseSeeder` sudah memanggil `UserSeeder`, `CategorySeeder`, dan `ArticleSeeder`.

## Menjalankan aplikasi (development)

Cara cepat menjalankan server dan build frontend secara manual:

```powershell
php artisan serve --host=127.0.0.1 --port=8000
npm run dev
```

Ada juga script Composer yang menjalankan beberapa proses bersamaan (lihat `composer.json` -> `scripts.dev`). Di Windows, Anda bisa langsung menjalankan perintah-perintah di atas atau pakai WSL untuk behavior POSIX yang lebih akurat.

## Build untuk produksi

```powershell
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Menjalankan test

```powershell
php artisan test
# atau
./vendor/bin/phpunit
```

## Struktur penting

-   `app/Models` — model aplikasi (Article, Category, Consultation, Contact, User)
-   `database/migrations` — migrasi skema database
-   `database/seeders` — seeder data awal (`UserSeeder`, `CategorySeeder`, `ArticleSeeder`)
-   `resources/js` & `resources/css` — sumber frontend untuk Vite
-   `public/` — aset hasil build

## Tips pengembangan

-   Jika menambahkan file penyimpanan (storage), jalankan: `php artisan storage:link`
-   Gunakan environment `APP_ENV=local` untuk mempermudah debugging
-   Debugbar dapat diaktifkan lewat paket `barryvdh/laravel-debugbar` (dev)

## Contributing

Silakan buka issue atau buat pull request. Sertakan deskripsi perubahan dan instruksi menjalankan fitur baru jika diperlukan.

## Lisensi

Proyek ini mengikuti lisensi MIT (diturunkan dari skeleton Laravel). Periksa file `LICENSE` bila tersedia.

---

Jika Anda mau, saya bisa:

-   menambahkan bagian Quick Start spesifik (contoh credentials user dari seeder),
-   menambahkan instruksi Docker/WSL, atau
-   menulis skrip npm tambahan untuk workflow dev.

Beritahu saya mana yang ingin ditambahkan.
