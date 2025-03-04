<?php
class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->waktuMain = $waktuMain;
        // echo "Hello World!";
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp {$this->harga})";
        return $str;
    }
}

class komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $jmlHalaman = 0)
    {
        parent::__construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game :  " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp {$produk->harga})";
        return $str;
    }
}

$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
echo "<hr>";
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
// echo "Komik : " . $produk1->getLabel();
// echo "<br>";
// echo "Game : " . $produk2->getLabel();
// echo "<br>";
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();