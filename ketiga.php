<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }

    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}


class Bola
{
    const PHI = 3.14;

    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return 4/3 * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;

    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }


    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;

    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }


    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
        
    }
}

$nasi_tumpeng = new Lingkaran(4);
echo  "LuasLingkaran = " . $nasi_tumpeng-> luas() . " cm\n";
echo  "KelilingLingkaran = " . $nasi_tumpeng->keliling() . " cm\n\n";

$nasi_tumpeng2 = new Bola(4);
echo  "VolumeBola = " . $nasi_tumpeng2-> volume() . " cm\n\n";

$nasi_tumpeng3 = new Tabung(4, 10);
echo "VolumeTabung = " . $nasi_tumpeng3-> volume() . " cm\n\n";

$nasi_tumpeng4 = new Kerucut(4, 10);
echo "VolumeKerucut = " . $nasi_tumpeng4->volume() . " cm\n\n";


?>
