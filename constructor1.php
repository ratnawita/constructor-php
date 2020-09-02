<?php
class produk{
  public $namaBarang, 
          $merk, 
            $harga;
            // membuat method
            public function getCetak(){
                return "$this->namaBarang, $this->merk, $this->harga";
            }

            public function __construct($namaBarang="namaBarang", $merk = "merk", $harga=0){
               $this->namaBarang = $namaBarang;
               $this->merk = $merk;
               $this->harga = $harga;
            }
}

$produk1 = new produk("Shampoo", "Dove", 27000);
$produk2 = new produk("Sabun", "Lifebuoy", 42000);
$produk3 = new produk("Face Wash", "Acnes", 24000);


echo "Nama Barang 1 : " . $produk1->getCetak();
echo "<br>";
echo "Nama Barang 2 : " . $produk2->getCetak();
echo "<br>";
echo "Nama Barang 3 : " . $produk3->getCetak();
echo "<br>";
?>