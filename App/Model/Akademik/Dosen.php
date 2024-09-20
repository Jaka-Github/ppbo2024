<?php
namespace App\Model\Akademik;

use App\Model\Akademik\Pegawai;

class Dosen extends Pegawai{
    public $nidn;

    public function __construct($nidn, $nip, $nama, $no_hp, $alamat) {

        $this->nidn = $nidn;
    


        parent::__construct($nidn, $nip, $nama, $no_hp, $alamat);  
    }

    public function mengajar(string $nama) : void {
        echo $nama . " sedang mengajar perkuliahan" . "\n";
        
    }
    

}