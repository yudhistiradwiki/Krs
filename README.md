## Sistem Informasi KRS dan KHS

Teknologi informasi merupakan salah satu sarana untuk membantu kegiatan akademik di perguruan tinggi misalnya mengolah data kartu rencana studi dan kartu hasil studi. Teknologi informasi adalah alat bantu untuk memudahkan aliran data dan informasi dari setiap bagian dalam suatu instansi akademik. salah satunya adalah sistem KRS dan KHS.

Sistem informasi KRS dan KHS online membantu dosen dalam memberikan nilai KHS secara online karena sistem ini dilengkapi login untuk user dosen, mahasiswa, dan administrator. Dikarenakan sistem KRS dan KHS ini sudah ada di Politeknik Enjinering Indorama jadi saya sebagai mahasiswa ingin mencoba membuat sistem yang sama. Pada sistem informasi berikut saya sebagai developer membuatnya dengan menggunakan Framework Laravel.

## Screnshoot

<img width="100%" src="https://github.com/yudhistiradwiki/Krs/blob/master/public/theme/images/1.png"/>
<img width="100%" src="https://github.com/yudhistiradwiki/Krs/blob/master/public/theme/images/2.png"/>
<img width="100%" src="https://github.com/yudhistiradwiki/Krs/blob/master/public/theme/images/3.png"/>
<img width="100%" src="https://github.com/yudhistiradwiki/Krs/blob/master/public/theme/images/4.png"/>
<img width="100%" src="https://github.com/yudhistiradwiki/Krs/blob/master/public/theme/images/5.png"/>
<img width="100%" src="https://github.com/yudhistiradwiki/Krs/blob/master/public/theme/images/6.png"/>
<img width="100%" src="https://github.com/yudhistiradwiki/Krs/blob/master/public/theme/images/7.png"/>

## About Laravel

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Instalasi
#### Via Git
```bash
git clone https://github.com/yudhistiradwiki/Krs.git
```

### Download ZIP
[Link Download Zip](https://github.com/yudhistiradwiki/Krs/archive/refs/heads/master.zip)

### Setup Aplikasi
Jalankan perintah 
```bash
composer update
```
atau:
```bash
composer install
```
Copy file .env dari .env.example
```bash
cp .env.example .env
```
Konfigurasi file .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sisfopei
DB_USERNAME=root
DB_PASSWORD=
```
Opsional
```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:VrU4MAnOVXV150T+TxpH2sn6M2uwHiOls2oxBEomlXA=
APP_DEBUG=true
APP_URL=http://localhost
```
Generate key
```bash
php artisan key:generate
```
Menjalankan aplikasi
```bash
php artisan serve
```

<!--
Migrate database
```bash
php artisan migrate
```
Seeder table User, Pengaturan
```bash
php artisan db:seed
```
-->
