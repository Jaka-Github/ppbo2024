<?php
namespace App\Admin;

require_once "Pegawai.php";

class Dosen extends Pegawai{
    public $nidn;

    public function __construct($nidn, $nama, $no_hp, $alamat) {

        $this->nidn = $nidn;
    


        parent::__construct($nidn, $nama, $no_hp, $alamat);  // NIDN menggantikan NIP dari Pegawai
    }

    public function mengajar(int $nama) : void {
        echo $this->nama . " sedang mengajar perkuliahan" . "\n";
        
    }
    

}