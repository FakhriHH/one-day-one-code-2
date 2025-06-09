<?php
class Mahasiswa
{
    public $nama;
    public $nilai;

    public function __construct($nama, $nilai)
    {
        $this->nama = $nama;
        $this->nilai = $nilai;
    }

    public function getInfo()
    {
        return "{$this->nama} Mendapatkan Nilai {$this->nilai}";
    }

    public function getStatus()
    {
        return $this->nilai >= 75 ? "Lulus" : "Tidak Lulus";
    }

    public function getPredikat()
    {
        if ($this->nilai >= 85) return 'A';
        elseif ($this->nilai >= 75) return 'B';
        elseif ($this->nilai >= 60) return 'C';
        else return 'D';
    }
}

class MahasiswaSarjana extends Mahasiswa
{
    public $judulSkripsi;

    public function __construct($nama, $nilai, $judulSkripsi)
    {
        parent::__construct($nama, $nilai);
        $this->judulSkripsi = $judulSkripsi;
    }

    public function getInfo()
    {
        return "Sarjana: {$this->nama} - Nilai: {$this->nilai}";
    }
}

$data = [
    new Mahasiswa("Andi", 82),
    new Mahasiswa("Budi", 65),
    new MahasiswaSarjana("Citra", 90, "Sistem Rekomendasi Mahasiswa Berprestasi"),
    new MahasiswaSarjana("Dina", 78, "Analisa Mahasiswa Nonaktif")
];

echo "<h2>Daftar Mahasiswa</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>No</th>
        <th>Info</th>
        <th>Status</th>
        <th>Predikat</th>
    </tr>";

foreach ($data as $i => $mhs) {
    echo "<tr>";
    echo "<td>" . ($i + 1) . "</td>";
    echo "<td>" . $mhs->getInfo() . "</td>";
    echo "<td>" . $mhs->getStatus() . "</td>";
    echo "<td>" . $mhs->getPredikat() . "</td>";
    echo "</tr>";
}


echo "</table>";
