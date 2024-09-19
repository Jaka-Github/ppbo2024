<?php


require_once 'vendor/autoload.php';

use App\Admin\Dosen;
$dian = new Dosen( "0013118405", "198411132015041001", " Dian Prawira", "62111111", " Jln Purnama");
$nama = "Dian Prawira";
$dian->mengajar($nama);

?>