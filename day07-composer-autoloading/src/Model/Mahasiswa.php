<?php

namespace App\Model;

class Mahasiswa
{
    private string $nama;
    private int $nilai;

    public function __construct(string $nama, int $nilai)
    {
        $this->nama = $nama;
        $this->nilai = $nilai;
    }

    public function getInfo(): string
    {
        return "{$this->nama} - {$this->nilai}";
    }

    public function getStatus(): string
    {
        return $this->nilai >= 75 ? "Lulus" : "Tidak Lulus";
    }
}
