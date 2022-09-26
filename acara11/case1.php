<?php 
interface Bird{
    public function makesound();
}
class Perkutut implements Bird{
    public function makesound()
    {
        echo "kur kur";
    }
}
$burung = new Perkutut();
$burung->makesound();
?>