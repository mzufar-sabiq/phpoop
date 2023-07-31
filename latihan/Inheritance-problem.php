<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

           public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe="tipe") {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
            $this->tipe = $tipe;
           }

           public function getLabel() {
            return "$this->judul | $this->penulis | $this->penerbit";
           }

           public function getInfoProduk() {
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
            return $str;
           }
}


class Komik extends Produk {
    public function getInfoProduk() {
        $str = "Komik : {$this-> getLabel()} (Rp. {$this-> harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }

}
class Game extends Produk {
        public function getInfoProduk() {
            $str = "Game : {$this -> getLabel()} (Rp. {$this -> harga}) ~ {$this->waktuMain} Jam.";
            return $str;
        }
}

$Produk1= new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, 0, "Komik");
$Produk2= new Game("AOT", "Hajime Isayama", "Kodansha", 20000, 0, 50, "Game");


echo $Produk1->getInfoProduk();
echo "<br>";
echo $Produk2->getInfoProduk();
// Game :Masashi Kishimoto, Shounen Jump
// Komik :Hajime Isayama, Kodansha
// Naruto | Masashi Kishimoto, Shounen Jump (Rp. 30000)

// Game : Naruto | Masashi Kishimoto, Shounen Jump (Rp. 30000) - 100 Halaman
// Komik : AOT | Hajime Isayama, Kodansha (Rp. 20000) - 72 jam