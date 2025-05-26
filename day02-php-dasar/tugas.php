<?php
$mahasiswa = [
    ['nama' => 'Andi', 'nilai' => 85],
    ['nama' => 'Budi', 'nilai' => 78],
    ['nama' => 'Citra', 'nilai' => 92],
    ['nama' => 'Dina', 'nilai' => 70],
];

if (isset($_GET['nama']) && isset($_GET['nilai'])) {
    $namaBaru = htmlspecialchars($_GET['nama']);
    $nilaiBaru = (int) $_GET['nilai'];

    if (!empty($namaBaru) && $nilaiBaru >= 0 && $nilaiBaru <= 100) {
        $mahasiswa[] = ['nama' => $namaBaru, 'nilai' => $nilaiBaru];
    }
}

function hitungRataRata($data)
{
    $total = 0;
    foreach ($data as $mhs) {
        $total += $mhs['nilai'];
    }
    return count($data) > 0 ? $total / count($data) : 0;
}

function cariNilaiTertinggi($data)
{
    $nilaiTertinggi = max(array_column($data, 'nilai'));
    return $nilaiTertinggi;
}

function cariNilaiTerendah($data)
{
    $nilaiTerendah = min(array_column($data, 'nilai'));
    return $nilaiTerendah;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Nilai Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #888;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>Daftar Nilai Mahasiswa</h2>

    <!-- Form tambah data -->
    <form method="get">
        <label>Nama: <input type="text" name="nama" required></label>
        <label>Nilai: <input type="number" name="nilai" min="0" max="100" required></label>
        <button type="submit">Tambah</button>
    </form>

    <!-- Tabel Data Mahasiswa -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $i => $mhs): ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= htmlspecialchars($mhs['nama']) ?></td>
                    <td><?= $mhs['nilai'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Statistik -->
    <p><strong>Rata-rata:</strong> <?= number_format(hitungRataRata($mahasiswa), 2) ?></p>
    <p><strong>Nilai Tertinggi:</strong> <?= cariNilaiTertinggi($mahasiswa) ?></p>
    <p><strong>Nilai Terendah:</strong> <?= cariNilaiTerendah($mahasiswa) ?></p>

</body>

</html>