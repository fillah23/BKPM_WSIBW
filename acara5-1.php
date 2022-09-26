<?php 
function bilangan($b1,$b2){
    if($b1 > $b2){
        echo $b1;
    }else{
        echo $b2;
    }
}
$bil1 = 3;
$bil2 =2;
echo "Bilangan 1 = ".$bil1;
echo "<br>";
echo "Bilangan 2 = ".$bil2;
echo "<br>";
echo "Bilangan terbesar adalah ";
bilangan($bil1,$bil2)
?>