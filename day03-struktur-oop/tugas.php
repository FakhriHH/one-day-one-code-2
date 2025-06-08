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
        return "{$this->nama} mendapatkan nilai {$this->nilai}";
    }

    public function getStatus()
    {
        return $this->nilai >= 75 ? 'Lulus' : 'Tidak Lulus';
    }

    public function getPredikat()
    {
        if ($this->nilai >= 85) return 'A';
        elseif ($this->nilai >= 75) return 'B';
        elseif ($this->nilai >= 60) return 'C';
        else return 'D';
    }
}

$lisMahasiswa = [
    new Mahasiswa("Hawari", 85),
    new Mahasiswa("Reza", 90),
    new Mahasiswa("Akbar", 84),
    new Mahasiswa("Ul", 72),
    new Mahasiswa("Polo", 67),
    new Mahasiswa("Eidit", 59),
];

echo "<h2>Informasi Mahasiswa</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0'";
echo "<tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nilai</th>
        <th>Status</th>
        <th>Predikat</th>
    </tr>";

foreach ($lisMahasiswa as $i => $mhs) {
    echo "<tr>";
    echo "<td>" . ($i + 1) . "</td>";
    echo "<td>" . $mhs->nama . "</td>";
    echo "<td>" . $mhs->nilai . "</td>";
    echo "<td>" . $mhs->getStatus() . "</td>";
    echo "<td>" . $mhs->getPredikat() . "</td>";
    echo "</tr>";
}

echo "</table>";
