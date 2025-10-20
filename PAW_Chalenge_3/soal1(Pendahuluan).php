<?php

/**
 * Soal 1 (Pendahuluan)
 * Tujuan: Memahami sumber data (array) dan hasil output mentah sebelum dimanipulasi.
 * File ini akan menjadi dasar untuk soal berikutnya (filter, sort, map).
 */

// require_once digunakan untuk mengimpor atau menyertakan kode dari file lain.
// Di sini, kita mengimpor file "datasource.php" yang berisi data array $product.
require_once __DIR__ . "/datasource.php";

var_dump($product);

/**
 * INSTRUKSI:
 * 1. Jalankan file ini di browser menggunakan server lokal (Apache di XAMPP, Laragon, atau lainnya).
 * 2. Setelah halaman terbuka, klik kanan pada halaman, lalu pilih "View Page Source" (Lihat Sumber Halaman).
 * 
 * PENJELASAN:
 * - Saat dibuka di browser, kalian akan melihat output teks hasil dari fungsi var_dump().
 *   Output ini menampilkan seluruh struktur array $product secara mentah (raw), 
 *   termasuk tipe data (array, string, integer) dan nilainya.
 * - Jika kalian melihat melalui “View Page Source”, hasilnya akan sama seperti di tampilan browser,
 *   tetapi dalam bentuk tampilan HTML mentah yang menunjukkan bahwa var_dump()
 *   sebenarnya hanya mencetak teks biasa, bukan elemen HTML yang diformat.
 * 
 * ----------------------------------------------------------
 * PERTANYAAN:
 * Buat komentar multiline baru di bawah ini, lalu tuliskan dengan kata-kata kalian sendiri
 * penjelasan tentang apa yang kalian lihat di browser.
 * ----------------------------------------------------------
 */
