# 🌱 Go Green School Web

Selamat datang di **Go Green School Web** — platform edukasi lingkungan berbasis Laravel yang dirancang untuk membantu siswa, guru, dan komunitas sekolah membangun budaya hidup ramah lingkungan.

Website ini menggabungkan **informasi edukatif**, **pengalaman UI modern**, dan **kalkulator sampah berbasis data** untuk mendukung aksi nyata menjaga bumi dari lingkungan sekolah.

🔗 **Live Demo**: https://gogreenschool-main-svl9z8.free.laravel.cloud/

---

## ✨ Highlight Project

- 🎨 UI modern dengan animasi interaktif
- 🌍 Dukungan multi-bahasa (EN/ID)
- 📚 Konten edukasi pengelolaan sampah yang lengkap
- 📊 Kalkulator sampah + visualisasi chart
- 📩 Contact form terhubung ke email admin
- 👨‍💻 Modal profil tim developer di semua halaman utama

---

## 🧰 Tech Stack

- **Laravel** (PHP)
- **Blade Template**
- **Tailwind CSS** (CDN)
- **JavaScript (Vanilla)**
- **Chart.js**

---

## 🗂️ Halaman & Fitur

### 1) Home (`/`)
- Hero carousel multi-slide
- Navigasi desktop + mobile menu
- Section edukasi Go Green School
- Section “Small Actions, Big Impact”
- Vision & Mission
- Testimoni/komunitas
- Footer lengkap + modal developer

### 2) About (`/about`)
- Profil dan cerita Go Green School
- Ringkasan website
- Visi & misi
- CTA ke halaman lain
- Footer lengkap + modal developer

### 3) Program (`/program`)
- Daftar program hijau sekolah
- Prosedur pengelolaan sampah (organik, anorganik, B3)
- Penjelasan konsep dan implementasi
- CTA ke contact/kalkulator
- Footer lengkap + modal developer

### 4) Contact (`/contact`)
- Card kontak: **Email** & **Instagram**
- Form kirim email (validasi backend Laravel)
- Form Instagram DM (preview + copy message)
- FAQ
- Footer lengkap + modal developer

### 5) Kalkulator (`/kalkulator`)
- Input data sampah (organik, anorganik, B3)
- Hitung total, rata-rata, persentase, prediksi 30 hari
- Visualisasi chart (Chart.js)
- Riwayat data di browser (local storage)
- Export CSV, hapus data, dan gabung data
- Insight otomatis berdasarkan hasil perhitungan
- Footer lengkap (sudah disamakan dengan halaman lain)

---

## 🛣️ Routing

Route utama ada di [routes/web.php](routes/web.php):

- `GET /` → `welcome`
- `GET /about` → `about`
- `GET /program` → `program`
- `GET /contact` → `contact`
- `POST /contact` → `ContactController@send` (`contact.send`)
- `GET /kalkulator` → `kalkulator`

---

## 📬 Contact Backend

Alur pengiriman pesan pada [app/Http/Controllers/ContactController.php](app/Http/Controllers/ContactController.php):

1. Validasi input (`name`, `email`, `subject`, `message`)
2. Kirim email menggunakan `Mail::to(...)`
3. Tujuan email: **go.green.website.2026@gmail.com**
4. Tampilkan notifikasi sukses setelah terkirim

---

## ✅ Update yang Sudah Diterapkan

Berikut perubahan penting yang sudah dikerjakan pada project ini:

### 🔧 Pembaruan Footer
- Alamat semua footer diperbarui menjadi:  
  **Jl. Raya Sintang - Pontianak, RT 010/RW 003, Desa Balai Agung, Kec. Sungai Tebelian, Kab. Sintang, Kalbar.**
- Email semua footer diperbarui menjadi:  
  **go.green.website.2026@gmail.com**
- Kontak footer yang sebelumnya nomor telepon diubah menjadi IG:  
  **@earthygreen.vibes**

### 🔧 Halaman Contact
- Email card diperbarui ke email terbaru
- Card Instagram ditambahkan garis hijau agar konsisten visual
- Card WhatsApp dan form WhatsApp dihapus

### 🔧 Halaman Kalkulator
- Footer disamakan dengan layout/footer halaman lain (full footer)

### 🔧 Profil Developer
- Foto **Deny Hendrata** diganti dari avatar menjadi file lokal:  
  `public/images/Deny Hendrata.png`
- Sudah diterapkan di Home, About, Program, Contact, dan Kalkulator

---

## 📁 Struktur Folder Penting

- [resources/views](resources/views) → seluruh tampilan Blade
- [routes/web.php](routes/web.php) → route aplikasi
- [app/Http/Controllers](app/Http/Controllers) → controller backend
- [app/Mail](app/Mail) → class pengiriman email
- [public/images](public/images) → aset gambar

---

## 🚀 Cara Menjalankan Project

### 1) Install dependency
- `composer install`
- `npm install`

### 2) Konfigurasi environment
- Copy `.env.example` menjadi `.env`
- Generate application key:
  - `php artisan key:generate`

### 3) Jalankan aplikasi
- Backend: `php artisan serve`
- Frontend: `npm run dev`

Setelah itu buka URL yang tampil di terminal, atau gunakan link live demo di atas.

---

## 📝 Catatan

Project ini dibuat sebagai media pembelajaran dan kampanye lingkungan sekolah dengan pendekatan web modern yang interaktif, informatif, dan mudah digunakan.
