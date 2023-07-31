<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit;

    protected  $diskon;

    private $harga;

           public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
           }

           
           
           public function getHarga() {
           return $this->harga - ($this->harga * $this->diskon / 100 );
           }

           public function getLabel() {
           $str = "{$this->judul} | {$this->penulis} | {$this->penerbit} | (Rp. {$this->harga})";
           return $str;
           }
}

class Komik extends Produk{
    public $waktuMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getinfoproduk() {
        $str ="Komik : " . parent::getLabel() . "  {$this->jmlHalaman} - Halaman.";
        return $str;
       }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
       }
    

    public function getinfoproduk() {
        $str ="Game : " . parent::getLabel() . "  {$this->waktuMain} ~ Jam.";
        return $str;
       }
}

$komik = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100);
$game = new Game("AOT", "Hajime Isayama", "Kodansha", 250000, 50);


echo $komik->getinfoproduk();
echo "<br>";
echo $game->getinfoproduk();
echo "<hr>";

$game->setDiskon(50);
echo $game->getHarga();
