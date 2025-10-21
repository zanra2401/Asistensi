# Asistensi Modul 3 - PAW

## `WARNING PERATURAN TOLONG DI BACA`
> **Waktu:** 25 menit | **Nilai Maksimal:** 100  
> Download File ZIP saja, File Lain hanya Preview Tidak perlu di download  
> Open net / book

---

## 1. Soal 1 (Pendahuluan)  
**Tujuan:** Memahami sumber data (array) dan hasil output mentah sebelum dimanipulasi.  
- Soal bisa langsung dilihat di file **soal1(Pendahuluan).php**.

---

## 2. Soal 2 (Manipulasi Array dan Penyajian)  
**Tujuan:**  
Praktikan memahami manipulasi array PHP dan menyajikannya ke tampilan HTML berbasis **“card” (bukan tabel)**.

### Contoh Hasil
- Di folder `contoh_hasil/` sudah tersedia file HTML yang menampilkan **produk dalam kartu/kotak flex**.  
- Praktikan bisa membuka file tersebut di browser untuk melihat contoh tata letak dan styling.  

### Instruksi
1. Gunakan file `datasource.php` sebagai sumber data `$product`. **Jangan ubah isinya.**  
2. File kerja adalah `soal2.php`. Semua manipulasi array dan penyajian data dilakukan di sini.
3. Tampilkan setiap kategori secara unik seperti di contoh hasil menggunakan array_map
4. Tampilkan seluruh produk dalam **kartu/kotak flex**, dengan kolom:
   - Gambar Produk  
   - Nama Produk  
   - Kategori  
   - Stok
5. **Filter Produk Berdasarkan Kategori**
   - Buat filter produk per kategori menggunakan `array_filter`.  
   - Contoh: tampilkan hanya kategori `Elektronik` atau `Makanan`.
6. **Sorting Produk**
   - Urutkan produk berdasarkan **stok** atau **nama produk** sebelum ditampilkan.
7. **Desain / CSS** (opsional)
   - Gunakan **flexbox** atau **grid CSS** untuk kartu.  
   - Kartu harus rapi dan mudah dibaca.  
   - Referensi warna:
     - Ungu: `#9431ce`  
     - Abu muda: `#D8E0E0`
8. **Larangan**
   - **Tidak boleh menggunakan `<table>`** untuk menampilkan daftar produk kecuali sorting.

> Praktikan bisa bereksperimen dengan `flex-wrap`, `gap`, `background-color`, `border-radius`, dll.  
> Tujuannya adalah mempraktikkan manipulasi array sambil membuat tampilan produk yang menarik.





