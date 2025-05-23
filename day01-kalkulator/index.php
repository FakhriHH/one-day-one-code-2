<?php
require_once "kalkulator.php";

$calc = new Kalkulator();

echo "Penjumlahan 10 + 5 = " . $calc->tambah(10, 5) . "<br>";
echo "Pengurangan 10 - 5 = " . $calc->kurang(10, 5) . "<br>";
echo "Perkalian 10 * 5 = " . $calc->kali(10, 5) . "<br>";
echo "Perkalian 10 / 5 = " . $calc->bagi(10, 5) . "<br>";
