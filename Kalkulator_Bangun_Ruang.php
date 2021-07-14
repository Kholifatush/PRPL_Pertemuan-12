<?php
interface Bangun_Ruang{
    public function area();
    public function perimeter();
}

interface Bangun_Ruang3D extends Bangun_Ruang{
    public function volume();
}

class Persegi_Panjang implements Bangun_Ruang{
    private $panjang, $lebar;
        
        //constructor
    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function panjang(){
        return $this->panjang;
    }   
    public function lebar(){
        return $this->lebar;
    }
    public function area(){
        return $this->panjang * $this->lebar;
    }

    public function perimeter(){
        return 2 *($this->panjang + $this->lebar);
    }
}

class Bola implements Bangun_Ruang3D{
    private $jari_jari;

    public function __construct($jari_jari){
        $this->jari_jari = $jari_jari;
    }
    public function jari_jari(){
        return $this->jari_jari;
    }
    public function area(){     
                return 4 * M_PI * pow($this->jari_jari, 2);
        }
    public function perimeter(){        
                return 2 * M_PI * $this->jari_jari;
        }
    public function volume(){   
                return (4/3 * M_PI) * pow($this->jari_jari, 3);
    }
}

class Kerucut implements Bangun_Ruang3D{
    private $jari_jari, $tinggi;

    public function __construct($jari_jari, $tinggi){
        $this->jari_jari = $jari_jari;
                $this->tinggi = $tinggi;
    }
    public function jari_jari(){
        return $this->jari_jari;
    }
    public function tinggi(){
        return $this->tinggi;
    }
    public function area(){     
                $r = $this->jari_jari;
                $t = $this->tinggi;
                M_PI * $r * ($r + sqrt(($t*$t)+($r*$r)));
        }
    public function perimeter(){         
                return 2 * M_PI * $this->jari_jari;
        }
    public function volume(){    
                return (M_PI  * pow($this->jari_jari, 2) * $this->tinggi) / 3;
    }
}

class Kubus implements Bangun_Ruang3D{
    private $sisi;

    public function __construct($sisi){
        $this->sisi = $sisi;
    }
    public function sisi(){
        return $this->sisi;
    }
    public function area(){     
                return 6 * pow($this->sisi, 2);
        }
    public function perimeter(){
                return  12 * $this->sisi;
        }
    public function volume(){
                return pow($this->sisi, 3);
    }
}

class Lingkaran implements Bangun_Ruang{
    private $jari_jari;
        
        //constructor
    public function __construct($jari_jari){
        $this->jari_jari = $jari_jari;
    }

    public function jari_jari(){
        return $this->jari_jari;
    }
        
    public function area(){
        return M_PI * pow($this->jari_jari, 2);
    }

    public function perimeter(){
        return 2 * M_PI * $this->jari_jari;
    }
}


$persegi_pnjng = new Persegi_Panjang(6, 8);
$bola = new Bola(3);
$kerucut = new Kerucut(6, 8);
$kubus = new Kubus(6);
$lingkaran = new Lingkaran(7);

$bangun_ruang =  array($persegi_pnjng, $lingkaran, $kubus, $kerucut, $bola);


echo("==== KALKULATOR BANGUN RUANG ====");
echo '<br>';
echo '<br>';
echo("1. ");
echo 'Luas Persegi Panjang: ' . $bangun_ruang[0]->area() .'<br />';
echo 'Panjang : '.$bangun_ruang[0]->panjang().'<br />';
echo 'Lebar : '.$bangun_ruang[0]->lebar().'<br />';
echo '<br>';
echo("2. ");
echo 'Volume Bola: ' . $bangun_ruang[4]->volume() .'<br />';
echo 'Jari-Jari : '.$bangun_ruang[4]->jari_jari().'<br />';
echo '<br>';
echo("3. ");
echo 'Volume Kerucut: ' . $bangun_ruang[3]->volume() .'<br />';
echo 'Jari-Jari : '.$bangun_ruang[3]->jari_jari().'<br />';
echo 'Tinggi : '.$bangun_ruang[3]->tinggi().'<br />';
echo '<br>';
echo("4. ");
echo 'Volume Kubus: ' . $bangun_ruang[2]->volume() .'<br />';
echo 'Panjang Sisi : '.$bangun_ruang[2]->sisi().'<br />';
echo '<br>';
echo("5. ");
echo 'Keliling Lingkaran: ' . $bangun_ruang[1]->perimeter() .'<br />';
echo 'Jari-Jari : '.$bangun_ruang[1]->jari_jari().'<br />';
?>