<?php

namespace App\Util;

use App\Model\Mahasiswa;

class Helper
{
    public static function cetakTable(array $list)
    {
        echo "<table border='1'>
            <tr>
                <th>Info</th>
                <th>Status</th>
            </tr>";

        foreach ($list as $m) {
            if ($m instanceof Mahasiswa) {
                echo "<tr>
                    <td>" . $m->getInfo() . "</td>
                    <td>" . $m->getStatus() . "</td>
                </tr>";
            }
        }
        echo "</table>";
    }
}
