<?php


require_once 'vendor/autoload.php';

use App\Model\Akademik\Dosen;
$dian = new Dosen( "1000121184001", "198411132015041001", " Dian Prawira", "62111111", " Jln Purnama");


// Memanggil no hp
$dian->getNoHP();

?>