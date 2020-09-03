<?php
class Produk {
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}


class cetakInfoproduk {
    public function cetak( Produk $produk ){
        $str = "{$produk->judul}" | "{$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new produk("Laskar Pelangi", "Andrea Hirata", "Bentang Pustaka", 25000);
$produk2 = new produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

echo "Novel : " . $produk1->getLabel();
echo "<br>";
echo "Komik : " . $produk2->getLabel();
echo "<br>";

$infoProduk = new cetakInfoproduk();