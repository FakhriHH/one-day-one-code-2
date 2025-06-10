<?php
class Mahasiswa
{
    private $nama;
    private $nilai;

    public function __construct($nama, $nilai)
    {
        $this->nama = $nama;
        $this->setNilai($nilai);
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getNilai()
    {
        return $this->nilai;
    }

    public function setNilai($nilai)
    {
        if ($nilai >= 0 && $nilai <= 100) {
            $this->nilai = $nilai;
        } else {
            $this->nilai = 0;
        }
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

    public function getInfo()
    {
        return "{$this->getNama()} Mendapat Nilai {$this->getNilai()}";
    }
}

$mahasiswa = new Mahasiswa("Hawari", 88);

echo "<h2>Info Mahasiswa</h2>";
echo "<p>" . $mahasiswa->getInfo() . "</p>";
echo "<p>Status: " . $mahasiswa->getStatus() . "</p>";
echo "<p>Predikat: " . $mahasiswa->getPredikat() . "</p>";

$mahasiswa->setNilai(45);
echo "<p><strong>Set Nilai Baru (45):</strong></p>";
echo "<p>" . $mahasiswa->getInfo() . "</p>";
