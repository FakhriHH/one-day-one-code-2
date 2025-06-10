<?php

require_once "mahasiswa.php";
require_once "helper.php";

use App\Model\mahasiswa;
use App\Util\Helper;

Helper::cetakJudul("Data Mahasiswa");

$list = [
    new Mahasiswa("Andi", 80),
    new Mahasiswa("Budi", 65),
    new Mahasiswa("Citra", 90),
];

Helper::cetakTableMahasiswa($list);
Helper::garis();

echo "<p>Total mahasiswa: " . Mahasiswa::$totalMahasiswa . "</p>";
echo "<p>Nilai minimal untuk lulus: " . Mahasiswa::MINIMAL_LULUS . "</p>";
