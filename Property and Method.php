<?php
class siswa{
  public $nis=11900565,
          $nama="Annisa",
           $rombel="RPL-XI 2", 
            $rayon= "WIKRAMA 1";
            // membuat method
            public function cetakSiswa(){
                return "Data Siswa ";
            }
            public function cetakSiswa2(){
                return "$this->nis, $this->nama, $this->rombel, $this->rayon";
            }
}
$siswa1 = new siswa();
$siswa2 = new siswa();
$siswa2->nis=11900561;
$siswa2->nama="Siti Salwa Amalia";
$siswa2->rombel="RPL-XI 1";
$siswa2->rayon="WIKRAMA 5";

var_dump($siswa1);
echo "<br>";
var_dump($siswa2);
echo "<br>";
echo $siswa1->cetakSiswa();
echo "<br>";
echo $siswa2->cetakSiswa2();

?>