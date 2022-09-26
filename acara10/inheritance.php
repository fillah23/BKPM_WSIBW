<?php 
class car{
    protected $model;
    public function setModel($model){
        $this->model = $model;
    }
    
}

class SportsCart extends car{
    public function hello(){
        return "beep! I am a <i>".$this->model."</i><br/>";
    }
} 

$SportsCart1 = new SportsCart();
$SportsCart1->setModel("Ferrari");
echo $SportsCart1->hello();
?>