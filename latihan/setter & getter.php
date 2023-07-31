<?php

class Produk {
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;

           public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
           }

           public function setJudul($judul) {
            $this->judul = $judul;
           }

           public function getJudul() {
            return $this->judul;
           }

           public function setPenulis($penulis) {
            $this->penulis = $penulis;
           }

           public function getPenulis() {
            return $this->penulis;
           }

           public function setPenerbit() {
            $this->penerbit = $penerbit;
           }

           public function getPenerbit() {
            return $this->penerbit;
           }
       
           public function getDiskon() {
            return $this->diskon;
           }

           public function setDiskon( $diskon ) {
            $this->diskon = $diskon;
           }

           public function setHarga() {
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

    public function getinfoproduk() {
        $str ="Game : " . parent::getLabel() . "  {$this->waktuMain} ~ Jam.";
        return $str;
       }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100);
$produk2 = new Game("AOT", "Hajime Isayama", "Kodansha", 250000, 50);


echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();
echo "<hr>";

$produk2->setDiskon(90);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setPenulis("M.Zufar Sabiq");
echo $produk1->getPenulis();

echo "<br>";
$produk1->setJudul("Dragon Ball");
echo $produk1->getJudul();