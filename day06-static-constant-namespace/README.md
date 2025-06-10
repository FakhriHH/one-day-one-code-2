# 📅 Day 5 – Static, Constant & Namespace di PHP

## 🎯 Tujuan

- Belajar membuat properti dan method `static`
- Menggunakan `const` untuk nilai tetap dalam class
- Memahami penggunaan `namespace` untuk manajemen kode

---

## 📌 Materi Hari Ini

### ✅ Static

- Bisa diakses tanpa objek: `ClassName::property` atau `ClassName::method()`
- Contoh: `Mahasiswa::$totalMahasiswa`

### ✅ Const

- Konstanta dalam class: tidak bisa diubah
- Contoh: `const MINIMAL_LULUS = 75;`

### ✅ Namespace

- Untuk menghindari konflik nama class
- Didefinisikan di awal file: `namespace App\Model;`
- Diakses dengan `use App\Model\ClassName;`

## 📄 Penjelasan File

- `Mahasiswa.php`: Class Mahasiswa dengan properti static dan const
- `Helper.php`: Class statis untuk mencetak judul/tampilan
- `index.php`: Main script yang menguji class dan namespace

## 🧪 Challenge Tambahan

- Tambahkan method `Helper::cetakTableMahasiswa()` untuk tampilkan array Mahasiswa dalam bentuk tabel HTML
- Gunakan namespace yang berbeda untuk modul yang berbeda jika proyek diperbesar
