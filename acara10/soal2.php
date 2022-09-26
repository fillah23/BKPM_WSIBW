<?php 
class Produk {
    protected $ukuran;
    protected $warna;
    protected $nama;
    
    public function getUkuran() {
        return $this->ukuran;
    }
    public function setUkuran($ukuran) {
        $this->ukuran = $ukuran;
    }
    public function getWarna() {
        return $this->warna;
    }
    public function setWarna($warna) {
        $this->warna = $warna;
    }
    public function getNama() {
        return $this->nama;
    }
    public function setNama($nama) {
        $this->nama = $nama;
    }
}

class Baju extends Produk {
    private $tipe;
     
    public function getTipe() {
        return $this->tipe;
    }
    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }
}
class Celana extends Produk {
    private $tipe;
    private $model;
     
    public function getTipe() {
        return $this->tipe;
    }
    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }
    public function getModel() {
        return $this->model;
    }
    public function setModel($model) {
        $this->model = $model;
    }
}
class Topi extends Produk {
     
    private $model;
     
    public function getModel() {
        return $this->model;
    }
 
    public function setModel($model) {
        $this->model = $model;
    }
     
}
define("br", "<br />");
// buat objek Topi
$obj_topi = new Topi(); // buat objek
// setting property objek
$obj_topi->setNama("Topi Lakers");
$obj_topi->setUkuran("M");
$obj_topi->setWarna("kuning");
$obj_topi->setModel("bordiran");
// get property objek
echo "Nama Produk : " . $obj_topi->getNama() . br;
echo "Ukuran : " . $obj_topi->getUkuran() . br;
echo "Warna : " . $obj_topi->getWarna() . br;
echo "Model : " . $obj_topi->getModel() . br;
// buat objek baju
$obj_baju = new Baju();
// setting property baju;
$obj_baju->setNama("Flannel");
$obj_baju->setUkuran("L");
$obj_baju->setWarna("putih");
$obj_baju->setTipe("Kemeja");
// get property objek baju
echo br;
echo "Nama Produk : " . $obj_baju->getNama() . br;
echo "Ukuran : " . $obj_baju->getUkuran() . br;
echo "Warna : " . $obj_baju->getWarna() . br;
echo "Tipe : " . $obj_baju->getTipe() . br;
// buat objek celana
$obj_celana = new Celana();
// setting property celana
$obj_celana->setNama("chino");
$obj_celana->setUkuran(12);
$obj_celana->setWarna("hitam");
$obj_celana->setModel("ankle pants..");
$obj_celana->setTipe("Katun");
// get property objek celana
echo br;
echo "Nama Produk : " . $obj_celana->getNama() . br;
echo "Ukuran : " . $obj_celana->getUkuran() . br;
echo "Warna : " . $obj_celana->getWarna() . br;
echo "Tipe : " . $obj_celana->getTipe() . br;
echo "Model : " . $obj_celana->getModel() . br;


?>