# Cara Penggunaan

## Clone file dari server git ke folder lokal
```
git clone https://github.com/faisalfachrureza/rusunawa.git
```
## Masuk ke direktori repository yang telah diclone
```
cd rusunawa
```
## Buat database baru di MySQL
## Import rusunawa.sql ke dalam database
## Copy file .env.example dan ubah menjadi .env
```
cp .env.example .env
```
## Ubah konfigurasi file .env
```
DB_DATABASE=nama_database
```
## Install vendor dan plugin
```
composer install
```
## Generate key
```
php artisan key:generate
```
## Buat symlink
```
php artisan storage:link
```
## Jalankan aplikasi
```
php artisan serve
```
## Akses halaman login pada /login
```
admin
email: admin@admin.com
password: admin123

pengelola
email: pengelola@gmail.com
password: pengelola123
```