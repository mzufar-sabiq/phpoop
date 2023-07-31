<?php
class Mobil {
    public $nama,
           $merk,
           $warna,
           $kecepatanMaksimal,
           $jumlahPenumpang;


    public function tambahkecepatan() {
        return "Kecepatan Bertambah!";
    }
    
}

class MobilSport extends Mobil {
    public $turbo = false;

    public function jalankanTurbo() {
        $this->turbo = true;
        return "Turbo dijalankan!";
    }
}

$Mobil1 = new Mobilsport();
echo $Mobil1->tambahkecepatan();
echo "<br>";
echo $Mobil1->jalankanTurbo();
?>

<!-- public function kurangikecepatan() {

}
public function gantitransmisi() {

}
public function belokkanan() {

}
public function belokkiri() {

} -->