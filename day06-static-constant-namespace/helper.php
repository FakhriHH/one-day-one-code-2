<?php

namespace App\Util;

use App\Model\Mahasiswa;

class Helper
{
    public static function cetakJudul($judul)
    {
        echo "<h2 style='color:blue;'>$judul</h2>";
    }

    public static function garis()
    {
        echo "<hr>";
    }

    public static function cetakTableMahasiswa(array $listMahasiswa)
    {
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr><th>Nama</th><th>Nilai</th><th>Status</th></tr>";

        foreach ($listMahasiswa as $mhs) {
            if ($mhs instanceof Mahasiswa) {
                echo "<tr>
                    <td>{$mhs->getInfo()}</td>
                    <td>{$mhs->getStatus()}</td>
                    <td>" . $mhs::MINIMAL_LULUS . "</td>
                </tr>";
            }
        }

        echo "</table>";
    }
}
