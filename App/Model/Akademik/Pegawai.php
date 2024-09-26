<?php

namespace App\Model\Akademik;
class Pegawai {
    // Atribut
    public $nip;          // Nomor Induk Pegawai
    public $nama;         // Nama Pegawai
    protected $no_hp;     // Nomor HP Pegawai (protected)
    public $alamat;       // Alamat Pegawai

    
    public function __construct($nip, $nama, $no_hp, $alamat) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    
    public function cekIn(): bool {
        echo "{$this->nama} telah  Chek In.\n";
        return true;
    }

  
    public function cekOut(): bool {
        echo "{$this->nama} telah Cek Out.\n";
        return true;
    }

    
    protected function getNoHP(): int {
        return $this->no_hp;
    }


    public function setNoHP(int $no_hp): void {
        $this->no_hp = $no_hp;
        echo "Nomor HP {$this->nama} telah diperbarui.\n";
    }
}






