<?php

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

           public function __construct($judul, $penulis, $penerbit, $harga) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
           }

           public function getLabel() {
            return "$this->penulis, $this->penerbit";
           }

}
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000);
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Shounen Jump";
$produk1->harga = 30000;


$produk2 = new Produk("AOT", "Hajime Isayama", "Kodansha", 20000);
$produk2->judul = "AOT";
$produk2->penulis = "Hajime Isayama";
$produk2->penerbit = "Kodansha";
$produk2->harga = 20000;


echo "Komik : $produk1->penulis, $produk1->penerbit;";
echo "<br>";
echo "Komik :" . $produk1->getLabel();
echo "<br>";
echo "Komik :" . $produk2->getLabel();
?>