<?php 
class mobilLengkap{
    function HidupkanMobil(){
        echo "mobil sudah hidup";
    }
    function MatikanMobil(){
        echo "mobil sudah mati";
    }
    function UbahGigi(){
        echo "gigi sudah diubah";
    }
}

class MobilBMW extends mobilLengkap{
    function nontonTV(){
        echo"Tv dihidupkan <br/>";
        echo" Tv Mencari Chanel <br/>";
        echo"Tv Menampilkan gambar <br/>";
    }
}

class MobilBMWBeraksi{
    function mobilcetak(){
        $mobil=new MobilBMW();
        echo $mobil->nontonTV();
        echo $mobil->HidupkanMobil();
        echo $mobil->MatikanMobil();
        echo $mobil->UbahGigi();
    }
}
$cetak = new MobilBMWBeraksi();
echo $cetak->mobilcetak();
?>