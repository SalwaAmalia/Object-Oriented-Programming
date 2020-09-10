<?php
class Handphone{
  public $jenis, $merk, $warna, $harga, $cadanganData;

  public function cadangkanData1(){
    return "Data dicadangkan";
  }
}

class Ios extends Handphone{
  public $turbo = false;

  public function cadangkanData2(){
        $this->turbo=true;
        return "Icloud di aktifkan ";
    }
    
}

$Handphoneku = new Ios();
echo $Handphoneku->cadangkanData1();
echo "<br>";
echo $Handphoneku->cadangkanData2();


?>