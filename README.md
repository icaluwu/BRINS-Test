# BRINS Test 2026

Aplikasi ini dibuat sebagai bagian dari Tes BRINS 2026 oleh **Teuku Vaickal Rizki Irdian**. Profil personal developer tersedia di [icaluwu.site](https://icaluwu.site).

## Ringkasan

Project ini adalah aplikasi Laravel untuk:

- autentikasi web berbasis session;
- dashboard ringkas untuk jumlah user dan produk;
- RESTful API inquiry produk;
- autentikasi API menggunakan JWT Bearer Token;
- pencarian produk berdasarkan nama.

## Stack

- Laravel 13
- PHP 8.5+
- SQLite atau database yang dikonfigurasi pada `.env`
- Vite
- CSS native tanpa library styling eksternal
- `php-open-source-saver/jwt-auth`

## Menjalankan project

1. Install dependency PHP:

```bash
composer install
```

2. Siapkan environment:

```bash
copy .env.example .env
php artisan key:generate
```

3. Atur koneksi database pada `.env`, lalu jalankan migrasi dan seeder:

```bash
php artisan migrate --seed
```

4. Jalankan server:

```bash
php artisan serve
```

5. Untuk proses development frontend:

```bash
npm install
npm run dev
```

Untuk build asset production:

```bash
npm run build
```

## Kredensial demo

Gunakan kredensial hasil seeder untuk login web dan API:

```text
Username: admin
Password: password123
```

## Endpoint RESTful API

Base URL:

```text
http://127.0.0.1:8000/api
```

### Login JWT

```http
POST /login
Accept: application/json
Content-Type: application/json
```

Body:

```json
{
  "username": "admin",
  "password": "password123"
}
```

Response berhasil mengembalikan `access_token`, `token_type`, dan `expires_in`.

### Inquiry semua produk

```http
GET /products
Accept: application/json
Authorization: Bearer <access_token>
```

### Inquiry satu produk

```http
GET /products/{id}
Accept: application/json
Authorization: Bearer <access_token>
```

### Pencarian produk

```http
GET /products?search=Kendaraan
Accept: application/json
Authorization: Bearer <access_token>
```

Status response utama:

- `200` untuk login dan inquiry yang berhasil;
- `401` untuk kredensial atau token yang tidak valid;
- `404` jika produk tidak ditemukan;
- `422` jika input login tidak lengkap.

## Coding Guidelines 2026

Project ini mengikuti prinsip berikut:

1. **Security by default**
   Credential, secret, dan file environment tidak boleh di-commit. Endpoint produk menggunakan middleware JWT dan endpoint login dipisahkan dari endpoint terproteksi.

2. **Separation of concerns**
   Route hanya mendefinisikan akses, controller menangani alur request, model menangani representasi data, dan view menangani presentasi.

3. **Explicit API contract**
   Response JSON memakai bentuk yang konsisten, status HTTP digunakan sesuai kondisi, dan header `Accept: application/json` dipakai untuk request API.

4. **Accessible interface**
   Form memiliki label, fokus keyboard terlihat, kontras warna dijaga, dan layout dapat digunakan pada layar kecil.

5. **Responsive by default**
   Tampilan menggunakan CSS lokal dengan breakpoint sederhana tanpa mengubah alur backend.

6. **Dependency restraint**
   Styling menggunakan CSS native. Dependency hanya ditambahkan ketika menyelesaikan kebutuhan aplikasi yang jelas.

7. **Validation before persistence**
   Input login divalidasi sebelum autentikasi diproses dan pesan error tidak membocorkan informasi sensitif.

8. **Testable changes**
   Perubahan backend harus divalidasi dengan PHPUnit. Perubahan PHP diformat menggunakan Laravel Pint sebelum diselesaikan.

9. **Documentation as an interface**
   Endpoint, cara menjalankan aplikasi, kredensial demo, dan status response dijelaskan agar project dapat diverifikasi oleh reviewer.

10. **Maintainable naming**
    Nama route, method, field, dan file mengikuti konteks domain serta konvensi Laravel.

## Pengujian

Jalankan test suite:

```bash
php artisan test
```

Format file PHP yang berubah:

```bash
vendor/bin/pint --dirty --format agent
```

## Developer

**Teuku Vaickal Rizki Irdian**
Website personal: [icaluwu.site](https://icaluwu.site)
