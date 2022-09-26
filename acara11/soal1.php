<?php 
interface hitungLuas{
    

    public function hitungLuasPersegi();
    public function hitungLuasSeigitiga();
    public function hitungLuasLingkaran();
}

class persegi implements hitungLuas{
    public function hitungLuasPersegi()
    {   $sisi =3;
        $hasil = $sisi * $sisi;
        echo "Luas persegi : <br>";
        echo "sisi = {$sisi}<br>";
        echo "Luas = sisi x sisi = {$sisi} x {$sisi} = $hasil <br><br>";
    }
    public function hitungLuasSeigitiga(){}
    public function hitungLuasLingkaran(){}

}

class segitiga implements hitungLuas{
    public function hitungLuasSeigitiga(){
        $alas =15;
        $lebar =8;
        $hasil = ($alas * $lebar)/2;

        echo "Luas segitiga :<br>";
        echo "alas = {$alas}<br>";
        echo "lebar = {$lebar}<br>";
        echo "Luas = 1/2 x alas x lebar = 1/2 x {$alas} x {$lebar} = $hasil<br><br>";
    }
    public function hitungLuasPersegi(){}
    public function hitungLuasLingkaran(){}
}

class lingkaran implements hitungLuas{
    public function hitungLuasLingkaran(){
        $phi = 3.14;
        $r = 10;
        $hasil = $phi * $r *$r;

        echo "Luas lingkaran :<br>";
        echo "phi = {$phi}<br>";
        echo "r = {$r}<br>";
        echo "Luas = phi x r x r = {$phi} x {$r} x {$r} = {$hasil}";

    }
    public function hitungLuasPersegi(){}
    public function hitungLuasSeigitiga(){}
}

$persegi = new persegi();
$persegi->hitungLuasPersegi();

$segitiga = new segitiga();
$segitiga->hitungLuasSeigitiga();

$lingkaran = new lingkaran();
$lingkaran->hitungLuasLingkaran();

?>