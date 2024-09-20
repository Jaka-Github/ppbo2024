<?php

namespace App\Model\Akademik;
require_once "Pegawai.php";

class TenagaKependidikan extends Pegawai {


    public $gaji_pokok;   

    
    public function __construct($nip, $nama, $no_hp, $alamat, $gaji_pokok) {
        
        parent::__construct($nip, $nama, $no_hp, $alamat);

        // Inisialisasi gaji pokok
        $this->gaji_pokok = $gaji_pokok;
    }

    // Metode cuti
    public function cuti(): void {
        echo $this->nama ." sedang mengambil cuti." . "\n";
    }





}