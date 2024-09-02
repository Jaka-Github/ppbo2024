<?php


function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}

function kelilingLingkaran($jari) : float {
    return 2 * 3.14 * $jari;
}

function volumeBola($jari) : float {
    return 4 / 3 * 3.14 * $jari * $jari * $jari;
}

function volumeTabung($jari, $tinggi) : float {
    return 3.14 * $jari * $jari * $tinggi;
}

function volumeKerucut($jari, $tinggi) : float {
    return 1 / 3 * 3.14 * $jari * $jari * $tinggi;
}



$luas_tanah = luasLingkaran(45);
$keliling_tanah = kelilingLingkaran(45);
$volume_bola = volumeBola(45);
$volume_tabung = volumeTabung(45, 80);
$volume_kerucut = volumeKerucut(45, 80);

echo "Luas tanah Budi adalah {$luas_tanah} meter persegi\n";
echo "Keliling tanah Budi adalah {$keliling_tanah} meter\n";
echo "Volume bola nya {$volume_bola} meter kubik\n";
echo "Volume tabung nya {$volume_tabung} meter^3\n";
echo "Volume kerucut nya {$volume_kerucut} meter^3\n";