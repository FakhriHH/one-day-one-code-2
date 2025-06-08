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
}

$mahasiswa1 = new Mahasiswa("Lily", 85);
$mahasiswa2 = new Mahasiswa("Leonardo", 67);

echo "<h2>Informasi Mahasiswa</h2>";
echo "<p>" . $mahasiswa1->getInfo() . " - " . $mahasiswa1->getStatus() . "</p>";
echo "<p>" . $mahasiswa2->getInfo() . " - " . $mahasiswa2->getStatus() . "</p>";
