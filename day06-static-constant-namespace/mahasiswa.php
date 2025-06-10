<?php

namespace App\Model;

class mahasiswa
{
    private $nama;
    private $nilai;

    public static $totalMahasiswa = 0;
    const MINIMAL_LULUS = 75;

    public function __construct($nama, $nilai)
    {
        $this->nama = $nama;
        $this->nilai = $nilai;
        self::$totalMahasiswa++;
    }

    public function getInfo()
    {
        return "{$this->nama} mendapat nilai {$this->nilai}";
    }

    public function getStatus()
    {
        return $this->nilai >= self::MINIMAL_LULUS ? "Lulus" : "Tidal Lulus";
    }
}
