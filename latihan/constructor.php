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
            return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
           }

}
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000);

$produk2 = new Produk("AOT", "Hajime Isayama", "Kodansha", 20000);

echo "Komik :" . $produk1->getLabel();
echo "<br>";
echo "Komik :" . $produk2->getLabel();
?>