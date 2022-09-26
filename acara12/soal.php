<?php 
interface negara{
    public function negara1();
}

abstract class Person{
    abstract public function greet();
}

class english extends Person implements negara{
    private $greeting;

    public function __construct($greeting){
        $this->greeting = $greeting;
    }

    public function greet()
    {
        return $this->greeting;
    }

    public function negara1()
    {
        return "English";
    }
    
}

class german extends Person implements negara{
    private $greeting;

    public function __construct($greeting){
        $this->greeting = $greeting;
    }

    public function greet()
    {
        return $this->greeting;
    }

    public function negara1()
    {
        return "German";
    }
    
}
class french extends Person implements negara{
    private $greeting;

    public function __construct($greeting){
        $this->greeting = $greeting;
    }

    public function greet()
    {
        return $this->greeting;
    }

    public function negara1()
    {
        return "French";
    }
    
}

$inggris = new english("It's good to see you");
$jerman = new german("Schön dich zu sehen");
$prancis = new french("C'est bon de te voir");

echo "Greeting ".$inggris->negara1()." :<br>";
echo $inggris->greet()."<br><br>";

echo "Greeting ".$jerman->negara1()." :<br>";
echo $jerman->greet()."<br><br>";

echo "Greeting ".$prancis->negara1()." :<br>";
echo $prancis->greet()."<br><br>";

?>