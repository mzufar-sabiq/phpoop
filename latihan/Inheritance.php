<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain;

           public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
           }

           public function getLabel() {
            return "$this->judul | $this->penulis | $this->penerbit";
           }
}

class Komik extends Produk{
    public function getproduklengkap() {
        $str ="Komik : {$this-> getLabel()} (Rp. {$this-> harga}) | {$this->jmlHalaman} - Halaman.";
        return $str;
       }
}

class Game extends Produk{
    public function getproduklengkap() {
        $str ="Game : {$this-> getLabel()} (Rp. {$this-> harga}) | {$this->waktuMain} ~ Jam.";
        return $str;
       }
}

$komik = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, 0);
$game = new Game("AOT", "Hajime Isayama", "Kodansha", 20000, 0, 50);


echo $komik->getproduklengkap();
echo "<br>";
echo $game->getproduklengkap();
