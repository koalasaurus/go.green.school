# Go Green School Web

Website edukasi lingkungan berbasis **Laravel** untuk program sekolah hijau.

Project ini berfokus pada edukasi pengelolaan sampah, pengenalan program sekolah, serta kalkulator sampah berbasis data untuk analisis sederhana di sekolah.

---

## Teknologi yang Digunakan

- Laravel (PHP)
- Blade Template
- Tailwind CSS (CDN)
- JavaScript (vanilla)
- Chart.js (visualisasi pada halaman kalkulator)

---

## Halaman & Fitur Utama

## 1) Home (`/`)
- Hero carousel (multi-slide)
- Navigasi desktop + mobile menu
- Section edukasi Go Green School
- Section aksi kecil berdampak besar
- Vision & Mission
- Testimoni/komunitas
- Footer lengkap
- Modal profil developer
- Dukungan multi-bahasa (EN/ID)

## 2) About (`/about`)
- Penjelasan profil Go Green School
- Ringkasan informasi website
- Visi dan misi
- CTA ke halaman lain
- Footer lengkap
- Modal profil developer
- Multi-bahasa (EN/ID)

## 3) Program (`/program`)
- Penjelasan program-program hijau
- Prosedur pengelolaan sampah (organik, anorganik, B3)
- Penjelasan konsep pengelolaan sampah
- CTA ke contact/kalkulator
- Footer lengkap
- Modal profil developer
- Multi-bahasa (EN/ID)

## 4) Contact (`/contact`)
- Card kontak: **Email** dan **Instagram**
- Form kirim email ke admin (Laravel backend + validasi)
- Form Instagram DM dengan preview + copy message
- FAQ section
- Footer lengkap
- Modal profil developer
- Multi-bahasa (EN/ID)

## 5) Kalkulator (`/kalkulator`)
- Input data sampah (organik, anorganik, B3)
- Hitung total, rata-rata harian, persentase, dan prediksi 30 hari
- Visualisasi hasil dengan Chart.js
- Riwayat data (local/browser storage)
- Export CSV, hapus data, gabung data
- Insight otomatis berdasarkan hasil perhitungan
- Footer sudah disamakan dengan halaman lain
- Modal profil developer
- Multi-bahasa (EN/ID)

---

## Routing

Daftar route utama di [routes/web.php](routes/web.php):

- `GET /` → `welcome`
- `GET /about` → `about`
- `GET /program` → `program`
- `GET /contact` → `contact`
- `POST /contact` → `ContactController@send` (`contact.send`)
- `GET /kalkulator` → `kalkulator`

---

## Backend Contact Form

Proses kirim pesan di [app/Http/Controllers/ContactController.php](app/Http/Controllers/ContactController.php):

- Validasi input: `name`, `email`, `subject`, `message`
- Kirim email menggunakan `Mail::to(...)`
- Tujuan email: **go.green.website.2026@gmail.com**
- Flash message sukses setelah pengiriman

---

## Pembaruan Konten yang Sudah Dikerjakan

Berikut update penting yang sudah diterapkan di project:

- Alamat footer semua halaman diperbarui menjadi:  
	**Jl. Raya Sintang - Pontianak, RT 010/RW 003, Desa Balai Agung, Kec. Sungai Tebelian, Kab. Sintang, Kalbar.**

- Email footer semua halaman diperbarui menjadi:  
	**go.green.website.2026@gmail.com**

- Kontak footer sebelumnya nomor telepon diubah menjadi IG:  
	**@earthygreen.vibes**

- Halaman Contact:
	- Card email sudah diperbarui ke email terbaru
	- Card Instagram ditambahkan garis hijau agar konsisten visual
	- Card dan form WhatsApp dihapus

- Halaman Kalkulator:
	- Footer disamakan dengan style/footer halaman lain (full footer)

- Foto developer:
	- Foto **Deny Hendrata** sudah diganti ke file lokal:  
		`public/images/Deny Hendrata.png`
	- Diterapkan di semua modal developer (Home, About, Program, Contact, Kalkulator)

---

## Struktur Folder Penting

- [resources/views](resources/views) → semua Blade view
- [routes/web.php](routes/web.php) → route aplikasi
- [app/Http/Controllers](app/Http/Controllers) → controller
- [app/Mail](app/Mail) → class email
- [public/images](public/images) → aset gambar

---

## Cara Menjalankan Project

## 1) Install dependency
- `composer install`
- `npm install`

## 2) Konfigurasi environment
- Copy `.env.example` jadi `.env`
- Generate key:
	- `php artisan key:generate`

## 3) Jalankan server
- Backend: `php artisan serve`
- Frontend (Vite): `npm run dev`

Lalu buka URL lokal yang tampil https://gogreenschool-main-svl9z8.free.laravel.cloud/

---

## Catatan

Project ini dirancang untuk kebutuhan edukasi sekolah dan demo pengelolaan sampah berbasis web modern.
