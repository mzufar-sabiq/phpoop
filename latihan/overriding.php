<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

           public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
           }

           public function getLabel() {
            return "$this->judul | $this->penulis | $this->penerbit";
           }
}

class Komik extends Produk{
    public $waktuMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getproduklengkap() {
        $str ="Komik : " . parent::getLabel() ." (Rp. {$this-> harga}) | {$this->jmlHalaman} - Halaman.";
        return $str;
       }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getproduklengkap() {
        $str ="Game : " . parent::getLabel() ." (Rp. {$this-> harga}) | {$this->waktuMain} ~ Jam.";
        return $str;
       }
}

$komik = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100);
$game = new Game("AOT", "Hajime Isayama", "Kodansha", 20000, 50);


echo $komik->getproduklengkap();
echo "<br>";
echo $game->getproduklengkap();
