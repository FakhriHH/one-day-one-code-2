# Day 4 – Encapsulation & Access Modifier (PHP OOP)

## 🎯 Tujuan

- Belajar menyembunyikan properti (encapsulation)
- Mengakses data dengan getter & setter
- Memahami `private`, `protected`, `public`

## 🛡️ Konsep

- `private $nilai` → Tidak bisa diakses langsung dari luar class
- `$mahasiswa->setNilai(90)` → Gunakan setter untuk ubah nilai
- `$mahasiswa->getNilai()` → Gunakan getter untuk ambil nilai

## 🧪 Contoh Output

- Nama: Andi
- Nilai: 88 → Status: Lulus → Predikat: A
- Setelah setNilai(45): Status: Tidak Lulus, Predikat: D

## 💡 Tantangan Lanjutan

- Tambahkan validasi pada setter: jika nilai di bawah 0 atau di atas 100, tampilkan pesan error dan simpan nilai default 0.
