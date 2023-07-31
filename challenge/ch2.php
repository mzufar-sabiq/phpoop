<?php
class Gadget {
    public $merk,
           $processor, 
           $ram, 
           $berat, 
           $ukuran,
           $tipe;
    

           public function __construct($merk = "merk", $processor = "processor", $ram = "ram", $berat = "berat", $ukuran = "ukuran", $tipe = "tipe") {
            $this->merk = "$merk";
            $this->processor = "$processor";
            $this->ram = "$ram";
            $this->berat = "$berat";
            $this->ukuran = "$ukuran";
            $this->tipe = "$tipe";
           }

           public function getInfoLengkap() {
            //Handphone : Xiaomi redmi note 10  | snap Snapdragon 678 | 6 GB | 6.43 inches
            $str = "{$this->tipe} : {$this->merk} | {$this->processor} | {$this->ram}";

            if( $this->tipe == "Handphone" ) {
                $str .= " | {$this->ukuran}";
            } else if ( $this->tipe == "Laptop" ) {
                $str .= " | {$this->berat}";
            }

            return $str;
           }
}

$Handphone = new Gadget("Xiaomi redmi note 10", "Snapdragon 678", "6 GB", 0, "6.43 inches", "Handphone");
$Laptop = new Gadget("Infinix inbook X1", "i3-1005G1", "256 GB", "1,47 kg", 0, "Laptop");

echo $Handphone->getInfoLengkap();
echo "<br>";
echo $Laptop->getInfoLengkap();

?>

<?php
// $Handphone = new Gadget();
// $Handphone->$merk = "Xiaomi  redmi note 10";
// $Handphone->$processor = "Snapdragon 678";
// $Handphone->$ram = "6 GB";
// $Handphone->$ukuran = "6.43 Inches";

// $Laptop = new Gadget();
// $Laptop->$merk = "Infinix inbook X1"; 
// $Laptop->$processor = "i3-1005G1";
// $Laptop->$ram = "256 GB";
// $Laptop->$berat = "1,47 kg";

//Handphone : Xiaomi redmi note 10  | snap Snapdragon 678 | 6 GB | 6.43 inches
//Laptop : Infinix inbook X1 | i3-1005G1 | 256 GB | 1,47 kg
?>