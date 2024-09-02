<?php

class Lingkaran
{
    const PHI = 3.14;

    public function luas($jari_jari) : float {
        return self::PHI * $jari_jari * $jari_jari;
    }

    public function keliling($jari_jari) : float {
        return 2 * self::PHI * $jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;

    public function volume($jari_jari) : float {
        return (4/3) * self::PHI * pow($jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;

    public function volume($jari_jari, $tinggi) : float {
        return self::PHI * pow($jari_jari, 2) * $tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;

    public $volume;

    public function volume($jari_jari, $tinggi) : float {
        $this->volume = (1/3) * self::PHI * pow($jari_jari, 2) * $tinggi;
        return $this->volume;
    }
}

$nasi_tumpeng = new Kerucut();
echo $nasi_tumpeng -> volume(4, 10) . "cm";

?>
