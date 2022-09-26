<?php 
interface Animal{
    public function makesound();
}

class cat implements Animal{
    public function makesound()
    {
        echo "meow <br>";
    }
}
class dog implements Animal{
    public function makesound()
    {
        echo "guk guk <br>";
    }
}
class mouse implements Animal{
    public function makesound()
    {
        echo "cit cit";
    }
}

$cat = new cat();
$dog = new dog();
$mouse = new mouse();
$animals = array($cat,$dog,$mouse);

foreach ($animals as $hewan) {
    $hewan->makesound();
}
?>