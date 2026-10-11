# TUGAS-2_AHMADMUZANNY_102042500086

# 📚 Perpustakaan Mini

Aplikasi web sederhana untuk mengelola data buku perpustakaan, dibuat menggunakan **PHP native** dan **MySQL**. Aplikasi ini mengimplementasikan fitur **CRUD** (Create, Read, Update, Delete) dan dibuat sebagai **Tugas 2** mata kuliah **Pengembangan Aplikasi Website (PAW)**.

## ✨ Fitur

- **Read**: menampilkan seluruh data buku dalam bentuk tabel (diurutkan dari data terbaru).
- **Create**: menambah data buku baru melalui form.
- **Update**: mengubah data buku yang sudah ada.
- **Delete**: menghapus data buku dengan konfirmasi terlebih dahulu.
- Tampilan **responsif** sehingga tetap rapi di layar HP.

## 🛠️ Teknologi yang Digunakan

| Teknologi | Kegunaan |
|-----------|----------|
| PHP (mysqli) | Bahasa pemrograman sisi server dan penghubung ke database |
| MySQL | Penyimpanan data buku |
| HTML & CSS | Struktur dan tampilan halaman |
| Laragon | Web server (Apache) dan database (MySQL) lokal |
| phpMyAdmin | Pengelolaan database |
| VS Code | Text editor |

## 📁 Struktur Folder

```
perpustakaan_crud/
├── koneksi.php     # Koneksi ke database
├── header.php      # (kosong) disiapkan untuk header bersama
├── style.css       # Seluruh tampilan aplikasi
├── index.php       # Halaman utama (Read)
├── tambah.php      # Form tambah buku (Create)
├── simpan.php      # Proses simpan data (Create)
├── edit.php        # Form ubah buku (Update)
├── update.php      # Proses ubah data (Update)
└── hapus.php       # Proses hapus data (Delete)
```

## 📖 Penjelasan File

| File | Penjelasan |
|------|------------|
| `koneksi.php` | Menghubungkan PHP ke database `paw_perpustakaan` dengan `mysqli_connect`, dan menampilkan pesan error jika koneksi gagal. File ini di-`include` oleh file lain yang membutuhkan akses database. |
| `header.php` | File kosong yang disiapkan untuk bagian header/navbar bersama, belum digunakan. |
| `style.css` | Mengatur font, warna tema merah, navbar, kartu, tabel, tombol, form, dan tampilan responsif. |
| `index.php` | Menampilkan semua data buku dari tabel `buku_086` dengan `SELECT` dan perulangan `while`, lengkap dengan tombol Tambah, Ubah, dan Hapus. |
| `tambah.php` | Form kosong untuk memasukkan data buku baru (semua kolom wajib diisi), dikirim dengan method POST ke `simpan.php`. |
| `simpan.php` | Menerima data dari `tambah.php`, membersihkannya dengan `mysqli_real_escape_string` dan `(int)`, menyimpannya dengan `INSERT`, lalu kembali ke `index.php`. |
| `edit.php` | Form ubah buku yang sudah terisi data lama, diambil berdasarkan `id` dari URL (method GET). |
| `update.php` | Menerima data dari `edit.php`, lalu memperbarui data dengan `UPDATE` dan kembali ke `index.php`. |
| `hapus.php` | Mengambil `id` dari URL, menghapus data dengan `DELETE`, lalu kembali ke `index.php`. |

## 🗄️ Struktur Database

**Nama database:** `paw_perpustakaan`
**Nama tabel:** `buku_086`

```sql
CREATE DATABASE IF NOT EXISTS paw_perpustakaan;
USE paw_perpustakaan;

CREATE TABLE buku_086 (
    id           INT AUTO_INCREMENT PRIMARY KEY,
    judul        VARCHAR(150) NOT NULL,
    penulis      VARCHAR(100) NOT NULL,
    penerbit     VARCHAR(100) NOT NULL,
    tahun_terbit INT NOT NULL,
    kategori     VARCHAR(30)  NOT NULL,
    stok         INT NOT NULL DEFAULT 0
);

INSERT INTO buku_086 (judul, penulis, penerbit, tahun_terbit, kategori, stok) VALUES
('Laskar Pelangi',      'Andrea Hirata',        'Bentang Pustaka', 2005, 'Novel',              5),
('Bumi Manusia',        'Pramoedya Ananta Toer','Hasta Mitra',     1980, 'Novel',              3),
('Belajar PHP dan MySQL','Budi Raharjo',        'Informatika',     2021, 'Teknologi',          8),
('Dasar-Dasar Basis Data','Fathansyah',         'Informatika',     2018, 'Teknologi',          1),
('Filosofi Teras',      'Henry Manampiring',    'Kompas',          2018, 'Pengembangan Diri',  0);
```

## 🚀 Cara Menjalankan

1. Jalankan **Laragon**, lalu klik **Start All** sampai Apache (port 80) dan MySQL (port 3306) aktif.
2. Salin folder `perpustakaan_crud` ke folder `www` Laragon (buka lewat tombol **Root**).
3. Buka **phpMyAdmin** (tombol **Database** di Laragon), lalu jalankan query SQL pada bagian *Struktur Database* di atas.
4. Pastikan pengaturan di `koneksi.php` sesuai:
   ```php
   $conn = mysqli_connect("localhost", "root", "", "paw_perpustakaan");
   ```
5. Buka browser dan akses `http://localhost/perpustakaan_crud/`.

## 🔄 Alur Aplikasi

```
index.php ──► tambah.php ──► simpan.php ──► index.php
    │
    ├──────► edit.php ─────► update.php ──► index.php
    │
    └──────► hapus.php ────────────────────► index.php
```

## 👤 Identitas

- **Nama:** Ahmad Muzanny
- **NIM:** 102042500086
- **Mata Kuliah:** Pengembangan Aplikasi Website (PAW)
- **Dosen Pengampu:** Dewi Marini Umi Atmaja, S.Kom., M.Kom
- **Tugas:** Tugas 2
