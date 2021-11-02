## Cara Penggunaan

- Clone file dari server  git ke folder lokal
```
git clone https://github.com/faisalfachrureza/rusunawa.git
```
- Buat database baru di MySQL
- Copy file .env.example dan ubah menjadi .env
```
cp .env.example .env
```
- Ubah konfigurasi file .env
- Install vendor dan plugin
```
composer install
```
- Generate key
```
php artisan key:generate
```
- Migrasi tabel beserta seeder
```
php artisan migrate --seed
```
- Jalankan aplikasi
```
php artisan serve
```
- Akses halaman login pada mainurl/login dan masukkan email: admin@admin.com password: admin123
- Import file rusunawa.sql ke dalam database untuk menggunakan sistem informasi dengan data yang telah terisi