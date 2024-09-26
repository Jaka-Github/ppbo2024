<?php
namespace App\Model\Akademik;

use App\Model\Akademik\Pegawai;

class Dosen extends Pegawai{
    private $nidn;

    public function __construct($nidn, $nip, $nama, $no_hp, $alamat) {

        $this->nidn = $nidn;
    


        parent::__construct($nip, $nama, $no_hp, $alamat);
    }

  


    public function mengajar() : void {
        echo $this->nama . " sedang mengajar perkuliahan" . "\n";
        
    }


}