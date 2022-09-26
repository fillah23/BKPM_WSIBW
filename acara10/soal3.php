<?php 
class tablet{
    protected $merk;
    protected $camera;
    protected $memory;

    public function tablet1(){
        return "ini tablet";
    }
}

class handphone{
    public function beli_handphone(){
        return "merk : $this->merk<br/>
        camera : $this->camera<br/>
        memory : $this->memory ";
    }
}

$handphone_baru = new handphone();
$handphone_baru->merk = "IPhone 14";
$handphone_baru->camera = "48mp";
$handphone_baru->memory = "256 gb";

echo $handphone_baru->beli_handphone();
?>