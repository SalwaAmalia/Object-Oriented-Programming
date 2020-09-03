<?php
class handphone{
  public $Jenis, 
          $merk, 
           $warna,
            $harga;
           
            public function getCetak(){
                return "$this->Jenis,$this->merk, $this->warna, $this->harga";
            }
            public function __construct($Jenis="Jenis", $merk="merk", $warna="warna",$harga=0){
                $this->Jenis = $Jenis;
                $this->merk = $merk;
                $this->warna = $warna;
                $this->harga =$harga;
            }
            
}

Class cetakInfohandphone{
     public function cetakInfo(handphone $handphone){
            $str="{$handphone->Jenis},{$handphone->getCetak()}";
            return $str;
      }
}

$handphone1 = new handphone("Android" , "Samsung" , "Hitam" , 4000000);
$handphone2 = new handphone("Ios","Iphone 6" , "Gold" , 6000000);
$handphone3 = new handphone("Android" , "OPPO" , "Merah" , 3000000);
$handphone4 = new handphone("Ios" , "Iphone Xs" , "Rose Gold" , 30000000);
$infohandphone = new cetakInfohandphone();

echo "Detail Handphone : " . $handphone1->getCetak();
echo "<br>";
echo "Detail Handphone : " . $handphone2->getCetak();
echo "<br>";
echo "Detail Handhpone: " . $handphone3->getCetak();
echo "<br>";
echo "Detail Handphone : " . $handphone4->getCetak();
echo "<br>";

$infoHandphone = new cetakInfohandphone();
?>