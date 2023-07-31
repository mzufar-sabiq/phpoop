<?php
class Gadget {
    public $merk,
           $processor, 
           $ram, 
           $berat, 
           $ukuran;
    

           public function __construct($merk = "merk", $processor = "processor", $ram = "ram", $berat = 0, $ukuran = 0) {
            $this->merk = "$merk";
            $this->processor = "$processor";
            $this->ram = "$ram";
            $this->berat = "$berat";
            $this->ukuran = "$ukuran";
           }

           public function getInfoLengkap() {
            $str = "{$this->merk} | {$this->processor} | {$this->ram}";
            return $str;
           }
}

class Handphone extends Gadget {
    public function getInfoLengkap() {
        $str = "Handphone : {$this->merk} | {$this->processor} | {$this->ram} | {$this->ukuran} inches.";
        return $str;
       }
}

class Laptop extends Gadget {
    public function getInfoLengkap() {
        $str = "Laptop : {$this->merk} | {$this->processor} | {$this->ram} | {$this->berat} kg.";
        return $str;
       }
}

$Handphone = new Handphone("Xiaomi redmi note 10", "Snapdragon 678", "6 GB", 0, 6.43);
$Laptop = new Laptop("Infinix inbook X1", "i3-1005G1", "256 GB", 1.47 , 0);

echo $Handphone->getInfoLengkap();
echo "<br>";
echo $Laptop->getInfoLengkap();

?>

