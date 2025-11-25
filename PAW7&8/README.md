# Modul 7 & 8: Login, Session, Security, dan Laporan

**Tujuan:**  
Membangun sistem login berbasis level dengan session, menerapkan praktik keamanan dasar, serta menampilkan laporan penjualan berbentuk diagram menggunakan Chart.js.

**Durasi:** ±50 menit

---

## 1. Login & Session
- Buat halaman login `login.php` yang memvalidasi user berdasarkan **level**.
- inputan berupa `username` dan `password`
- gunakan table user di database penjualan untuk login
- Simpan informasi login di **session** untuk mengontrol akses ke halaman laporan.  
- Pastikan query database menggunakan **prepared statement** untuk mencegah **SQL injection**.  
- (Opsional) Implementasikan token CSRF untuk form login untuk meningkatkan keamanan.  

---

## 2. Kontrol Akses
- Buat Halaman laporan (`laporan.php`) hanya bisa diakses oleh user (level 1) yang sudah login.  
- Cek **level user** sebelum menampilkan halaman laporan.php data tertentu.  
- Gunakan session untuk mengelola status login dan otorisasi user.  

---

## 3. Laporan Penjualan
- Ambil data transaksi dari database, **kelompokkan berdasarkan tanggal transaksi** HINT: bisa menggunakan (GROUP BY).  
- Hitung jumlah transaksi per tanggal HINT: bisa menggunakan agregate function.  
- Tampilkan data menggunakan **Chart.js** dalam bentuk diagram batang.  
- Pastikan data diolah di backend dengan query efisien sebelum dikirim ke frontend.  

---

### Hasil yang Diharapkan
- Sistem login berbasis level dengan session.  
- Form login aman dari SQL injection dan (opsional) CSRF.  
- Laporan penjualan dinamis dalam bentuk diagram batang menggunakan Chart.js.  
- Praktik keamanan dasar diterapkan di aplikasi web.
