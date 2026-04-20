# 🌱 Go Green School Web

Selamat datang di **Go Green School Web** — website edukasi lingkungan berbasis Laravel yang dirancang untuk membangun kebiasaan peduli bumi melalui pendekatan yang informatif, modern, dan mudah dipahami.

Project ini menggabungkan **konten edukatif**, **fitur interaktif**, dan **kampanye digital** agar siswa, guru, dan komunitas sekolah dapat belajar sekaligus beraksi nyata untuk lingkungan.

🔗 **Live Demo**: https://gogreenschool-main-svl9z8.free.laravel.cloud/  
🎬 **Konten Video Medsos**: https://www.instagram.com/reel/DWjIx3Tk_bs/?igsh=MW8wNm53MjlleHFwcA==

---

## 👥 Pembagian Tugas Tim

Berikut pembagian peran anggota tim pada project **Go Green School**. Bagian ini ditampilkan di awal agar kontribusi setiap anggota langsung terlihat.

- **Richard**
   - Berkontribusi dalam penyempurnaan fitur website, terutama pada peningkatan elemen interaktif dan perapihan komponen antarmuka agar pengalaman pengguna lebih nyaman.
   - Menyusun konten pada bagian _explanation text_ untuk menyampaikan pesan edukasi lingkungan secara jelas, ringkas, dan mudah dipahami.
   - Mendesain **poster Digital Marketing versi 1** sebagai materi promosi visual utama project.
   - Terlibat dalam pembuatan **video konten media sosial** untuk mendukung publikasi website.

- **Irene**
   - Bertanggung jawab menyusun konten _procedure text_, termasuk alur langkah pengelolaan sampah dan penerapan kebiasaan hijau di lingkungan sekolah.
   - Menyiapkan **poster Bahasa Indonesia** dengan penekanan pada kejelasan pesan, ketepatan tata bahasa, dan daya tarik visual.
   - Berpartisipasi dalam produksi **video konten media sosial** agar materi kampanye lebih komunikatif untuk audiens pelajar.

- **Deny**
   - Mengembangkan konten bagian _about us text_ untuk memperkuat identitas, tujuan, dan nilai utama gerakan Go Green School.
   - Berkolaborasi dalam pembuatan **poster Digital Marketing versi 2**, khususnya pada penyusunan konsep pesan dan elemen visual pendukung.
   - Mendukung proses pembuatan **video konten media sosial** sebagai media kampanye digital project.

- **Dicky**
   - Menjadi penanggung jawab utama pengembangan website, mencakup struktur halaman, integrasi fitur, serta penyesuaian tampilan agar optimal di desktop maupun mobile.
   - Menyusun konten _description text_ untuk memberikan gambaran inti website secara informatif, terarah, dan konsisten dengan tema edukasi lingkungan.
   - Berkolaborasi dalam pembuatan **poster Digital Marketing versi 2** bersama tim untuk menjaga konsistensi branding.
   - Turut memproduksi **video konten media sosial** sebagai bagian dari strategi promosi Go Green School.

---

## ✨ Fitur Utama Website

- 🎨 Desain antarmuka modern dengan animasi interaktif
- 🌍 Dukungan bahasa ganda (Indonesia & English)
- 📚 Materi edukasi lengkap (_explanation text_, _procedure text_, _description text_, _about text_)
- ♻️ Informasi program sekolah hijau (pengelolaan sampah, konservasi air, energi hijau, dan lainnya)
- 📊 Kalkulator sampah dengan perhitungan otomatis + visual chart
- 🧾 Riwayat data kalkulator (_local storage_) + export CSV
- 📩 Halaman kontak dengan integrasi pengiriman email
- 📱 Navigasi responsif (desktop & mobile) + tombol scroll naik/turun
- 👨‍💻 Modal profil developer di halaman utama

---

## 🗂️ Struktur Halaman Website

### 1) Home (`/`)
- Hero carousel dan section edukasi utama
- Penjelasan gerakan Go Green School
- Konten **explanation text**
- CTA ke halaman Program, Contact, dan Kalkulator

### 2) About (`/about`)
- Cerita, visi, misi, dan nilai Go Green School
- Konten **about us text** dan **description text**
- Ringkasan tujuan website

### 3) Program (`/program`)
- Daftar program hijau sekolah
- Konten **procedure text** (langkah pengelolaan sampah dan daur ulang)
- Panduan implementasi program berkelanjutan

### 4) Contact (`/contact`)
- Kontak email & Instagram
- Form kirim pesan ke admin
- FAQ + informasi komunikasi sekolah

### 5) Kalkulator (`/kalkulator`)
- Input data sampah organik, anorganik, dan B3
- Hitung total, rata-rata, persentase, prediksi 30 hari
- Visualisasi grafik (Chart.js)
- Simpan, lihat, hapus, gabung data, dan export CSV

---

## 🖼️ Dokumentasi Poster

### Poster Bahasa Indonesia (Irene)
![Poster Bahasa Indonesia 1](Irene/1.png)
![Poster Bahasa Indonesia 2](Irene/2.png)

### Poster Digital Marketing Versi 2 (Dicky & Deny)
![Poster Digital Marketing v2](Dicky/poster%20versi%202.jpeg)

---

## 🎬 Video Konten Medsos

Video promosi website kami dapat ditonton melalui link berikut:

📍 **[Tonton Video Konten Medsos](https://www.instagram.com/reel/DWjIx3Tk_bs/?igsh=MW8wNm53MjlleHFwcA==)**

---

## 🧰 Tech Stack

- **Laravel** (PHP)
- **Blade Template**
- **Tailwind CSS** (CDN)
- **JavaScript (Vanilla)**
- **Chart.js**

---

## 🚀 Cara Menjalankan Project

1. Install dependency
   - `composer install`
   - `npm install`

2. Konfigurasi environment
   - Copy `.env.example` menjadi `.env`
   - Jalankan `php artisan key:generate`

3. Jalankan project
   - Backend: `php artisan serve`
   - Frontend: `npm run dev`

---

## 📝 Penutup

Go Green School Web dibuat sebagai media belajar sekaligus kampanye digital untuk menumbuhkan budaya sekolah yang lebih hijau, lebih sadar lingkungan, dan lebih berdampak bagi masa depan.
