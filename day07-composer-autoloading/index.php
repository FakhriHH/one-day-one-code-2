<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Model\Mahasiswa;
use App\Util\Helper;

$m1 = new Mahasiswa("Hawari", 80);
$m2 = new Mahasiswa("Marco", 60);

$list = [$m1, $m2];

Helper::cetakTable($list);
