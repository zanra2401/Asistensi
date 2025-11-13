# Challenge Live Coding 
## Master–Detail Data Supplier dan Barang dengan Pembuatan Database via PHP

---

### Tujuan
Mahasiswa mampu:
1. Membuat dan menghubungkan database MySQL menggunakan PHP,  
2. Membuat tabel dan relasi melalui kode PHP,  
3. Mengimplementasikan form **master–detail** (Supplier → Barang) pada dua halaman terpisah,  
4. Melakukan operasi **CRUD dasar (Create dan Read)**.

---

## Deskripsi Soal
Buatlah aplikasi web sederhana berbasis **PHP + MySQLi** dengan dua halaman:  
`supplier.php` dan `barang.php`.

---

### 1. setup.php – Pembuatan Database dan Tabel
Buat file bernama **`setup.php`** yang akan:
- Membuat database bernama `db_supplier_barang`
- Membuat dua tabel: `supplier` dan `barang`
- Membuat relasi `barang.supplier_id → supplier.id`
- Menampilkan pesan **"Database dan tabel berhasil dibuat!"** jika sukses.

#### Struktur tabel:

##### Tabel `supplier`
| Kolom | Tipe Data | Keterangan |
|--------|-------------|------------|
| id | INT (PK, AUTO_INCREMENT) | ID unik supplier |
| nama_supplier | VARCHAR(100) | Nama supplier |
| alamat | VARCHAR(150) | Alamat supplier |

##### Tabel `barang`
| Kolom | Tipe Data | Keterangan |
|--------|-------------|------------|
| id | INT (PK, AUTO_INCREMENT) | ID unik barang |
| nama_barang | VARCHAR(100) | Nama barang |
| harga | INT | Harga barang |
| supplier_id | INT (FK) | Relasi ke `supplier.id` |

---

### 2. supplier.php (Halaman Master)
Tugas halaman ini:
1. Menampilkan daftar **supplier** dalam tabel.  
2. Setiap baris memiliki tombol **“Lihat Barang”** yang mengarah ke: barang.php

3. Di bagian atas halaman, buat **form tambah supplier**:  
- Input: `nama_supplier`, `alamat`  
- Saat disubmit, data disimpan ke tabel `supplier`.

#### Contoh tampilan:
| ID | Nama Supplier | Alamat | Aksi |
|----|----------------|--------|------|
| 1 | PT Maju Jaya | Surabaya | [Lihat Barang] |
| 2 | CV Sinar Terang | Malang | [Lihat Barang] |

---

### 3. barang.php (Halaman Detail)
Tugas halaman ini:
1. Menampilkan daftar **barang milik supplier tertentu** berdasarkan `supplier_id` dari URL.  
2. Di atas tabel, tampilkan **nama supplier**.  
3. Tambahkan form **tambah barang** (field: `nama_barang`, `harga`).
- `supplier_id` diambil dari parameter URL.  
4. Tambahkan tombol **“Kembali ke Daftar Supplier”** untuk kembali ke `supplier.php`.


### Estimasi Waktu
**60 menit**


### Struktur Folder yang Diharapkan
```
2025-2026_Gasal_PAW_C/
├── setup.php           -> membuat database dan table
├── config.php          -> koneksi ke database
├── supplier.php        -> halaman utama (master)
└── barang.php          -> halaman detail
```


