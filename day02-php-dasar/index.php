<?php
$mahasiswa = [
    ['nama' => 'Andi', 'nilai' => 85],
    ['nama' => 'Budi', 'nilai' => 78],
    ['nama' => 'Citra', 'nilai' => 92],
    ['nama' => 'Dina', 'nilai' => 70],
];

function hitungRataRata($data)
{
    $total = 0;
    $jumlah = count($data);

    foreach ($data as $mhs) {
        $total += $mhs['nilai'];
    }

    return $jumlah > 0 ? $total / $jumlah : 0;
}

echo "<h2>Daftar Nilai Mahasiswa</h2>";
echo "<ul>";

foreach ($mahasiswa as $mhs) {
    echo "<li>{$mhs['nama']} - Nilai: {$mhs['nilai']}</li>";
}

echo "</ul>";

$rerata = hitungRataRata($mahasiswa);
echo "<p><strong>Rata - rata Nilai:</strong>" . number_format($rerata, 2) . "</p>";
