<?php 
class person {
    protected $name;
    function set_name($new_name) {
    $this->name = $new_name;
    }
     function get_name() {
        return $this->name;
}
}
?>

<?php
$person1 = new Person();
// set value dari properti name
$person1->set_name('Septian Fillah');
// akses value dari properti name
echo $person1->get_name();
// properti tidak bisa di akses secara langsung, kana muncul error
echo "Hai ".$person1->name=' Fillah Septian';
echo "<hr>";
?>

<?php 
// $person1 = new Person();
// // properti bisa di akses secara langsung
// echo "Hai ".$person1->name='Fillah Septian';
// echo "<hr>";
// // method bisa di akses secara langsung
// echo $person1->get_name();
?>