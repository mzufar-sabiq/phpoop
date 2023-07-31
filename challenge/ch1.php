<?php

class Smartphone {
   public $merk = "merk";
   public $chipset = "chipset";
   public $ram = "ram";

    public function tampilSmartphone() {
        return "merk : $this->merk <br>
                chipset : $this->chipset <br>
                ram : $this->ram <br>";
    }

}

$infinix = new Smartphone();
$infinix->merk = "Infinix NOTE 12 2023";
$infinix->chipset = "MediaTek Helio G99";
$infinix->ram = "8/256 GB";

$samsung = new Smartphone();
$samsung->merk = "Samsung Galaxy A22 5G";
$samsung->chipset = "MediaTek Dimencity 700 5G";
$samsung->ram = "6/128 GB";

$oppo = new Smartphone();
$oppo->merk = "Oppo A3s";
$oppo->chipset = "Snapdragon 450";
$oppo->ram = "2/32 GB";

$redmi = new Smartphone();
$redmi->merk = "Redmi 4A";
$redmi->chipset = "Snapdragon 425";
$redmi->ram = "2/16 GB";

echo $infinix->tampilSmartphone();
echo "<br>";
echo $samsung->tampilSmartphone();
echo "<br>";
echo $oppo->tampilSmartphone();
echo "<br>";
echo $redmi->tampilSmartphone();
echo "<br>";
 
?>