<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H');


if ($waktu >= 5 && $waktu < 11) {
    $sapaan = "Selamat Pagi";
} elseif ($waktu >= 11 && $waktu < 15) {
    $sapaan = "Selamat Siang";
} elseif ($waktu >= 15 && $waktu < 19) {
    $sapaan = "Selamat Sore";
} else {
    $sapaan = "Selamat Malam";
}


echo "{$sapaan}, {$nama}, sekarang pukul ". date('H.i') . "\n";
